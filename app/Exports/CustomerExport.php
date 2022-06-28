<?php

namespace App\Exports;

use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;




class CustomerExport implements FromCollection,WithHeadings,WithCustomStartCell, WithMapping,WithEvents, WithHeadingRow,ShouldAutoSize
{

    protected $value;
    protected $date_range;
    protected $date_search;
    function __construct($value, $date_range, $date_search)
    {
        $this->value = $value;
        $this->date_range = $date_range;
        $this->date_search = $date_search;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = new User();
        if (!empty($this->value)) {
            $data = $data->where('full_name','Like',"%{$this->value}%")->orWhere('email','Like',"%{$this->value}%")->orWhere('signup_method','Like',"%{$this->value}%");
          }

          if (isset($this->date_range)) {
            $date = explode(" to ",$this->date_range);
            $dateS = new Carbon($date[0]);
            $dateE = new Carbon($date[1]);

            $data = $data->whereBetween($this->date_search, [$dateS->format('Y-m-d') . " 00:00:00", $dateE->format('Y-m-d') . " 23:59:59"]);
        }
        return $data->get();
    }

    public function map($data): array
    {
        $customer_data =  array(
            'name' => $data->full_name,
            'email' => $data->email,
            'signup_method' => $data->signup_method,
            'last_login' => get_fulltime($data->last_login),
            'created_at' => get_fulltime($data->created_at)
        );
        return $customer_data;
    }

    public function headings(): array
    {

        return ["Name", "Email", "Signup Method", "Last Login", "Created At"];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:E1';
                // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }

    public function startCell(): string
    {
        return 'A1';
    }
}
