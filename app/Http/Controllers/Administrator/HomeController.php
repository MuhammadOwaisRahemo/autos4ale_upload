<?php

namespace App\Http\Controllers\Administrator;

use DB;
use Carbon\Carbon;
use App\Services\Slug;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Element;
use App\Models\User;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        $all_users = new User();

        if (isset($request->date_range)) {
            $date = explode("to", $request->date_range);
            $dateS = new Carbon($date[0]);
            $dateE = new Carbon($date[1]);

            $all_users = $all_users->whereBetween('created_at', [$dateS->format('Y-m-d') . " 00:00:00", $dateE->format('Y-m-d') . " 23:59:59"]);
        } else {
            $dateS = Carbon::now()->subMonth(3);
            $dateE = Carbon::now();

            $all_users = $all_users->whereBetween('created_at', [$dateS->format('Y-m-d') . " 00:00:00", $dateE->format('Y-m-d') . " 23:59:59"]);
        }

        $start = $dateS->format('Y-m-d');
        $end = $dateE->format('Y-m-d');
        $starts = strtotime($start);
        $ends = strtotime($end);
        $days_between = number_format((float)ceil(abs($ends - $starts) / 86400));

        $data_array = array(
            'title'   => 'DashBoard',
            'all_users' => $all_users->get(),
            'request' => @$request,
            'date_diff' => @$days_between
        );
        return view('admin.dashboard')->with($data_array);
    }

    public function importCSV(Slug $slug)
    {
        // $data = $this->csvToArray('Accounts.csv');
        // $arr=[];
        // foreach($data as $k => $item){
        //     if($item['Type']=='Customer'){

        //       $f=[
        //           "company_id"   =>1,
        //           "name"         =>$item['ShopName'],
        //           "phone"        =>($item['Contact1']),
        //           "tel_no"       =>($item['Contact2']) ? ($item['Contact2']) : ($item['Contact3']),
        //           "address"      => $item['Permanent'],
        //           "city"         => $item['City'],
        //           "area_incharge"=> $item['Salesman'],
        //           "nic_no"       => $item['Reference'],
        //           'type'         =>'customer'
        //         ];
        //         $arr[]=$f;
        //     }

        // }
        // Customer::insert($arr);
        // dd($data);
        // foreach($data as $k => $item){
        // $range = \App\Models\ProductRange::firstOrNew(['name' => $item['Range']]);
        // if($range->id == null){
        //     $range->slug = $slug->createSlug('products_ranges', $item['Range']);
        //     $range->save();
        // }

        // $type = \App\Models\ProductType::firstOrNew(['name' => $item['ITEM']]);
        // if($type->id == null){
        //     $price = $item['Rate'];
        //     $type->slug = $slug->createSlug('products_type', $item['ITEM']);
        //     $type->purchase_price = round($price - ($price * 0.1));
        //     $type->margin = 10;
        //     $type->range_id = \App\Models\ProductRange::whereName($item['Range'])->first()->id ?? null;
        //     $type->sale_price = $price;
        //     $type->save();
        // }

        // $product = \App\Models\Product::firstOrNew(['item_code' => $item['Code'], 'item_no' => $item['ShadeNo']]);
        // if($product->id == null){
        //     $product->item_name = $item['ShadeName'];
        //     $product->item_code = $item['Code'];
        //     $product->item_no = $item['ShadeNo'];
        //     $product->packaging = $item['Pckng'];
        //     $product->packaging_type = strtolower($item['Ptype']);
        //     $product->type_id = \App\Models\ProductType::whereName($item['ITEM'])->first()->id ?? null;
        //     $product->range_id = \App\Models\ProductRange::whereName($item['Range'])->first()->id ?? null;
        //     $product->save();
        // }

        // $product = \App\Models\Product::whereItemCode($item['Code'])->wherePackaging($item['Pckng'])
        // ->whereNull('sale_price')
        // ->first();
        // if($product && $product->id != null){
        //     $price = $item['Rate'];
        //     $product->purchase_price = round($price - ($price * 0.1));
        //     $product->sale_price = $price;
        //     $product->save();
        // }
        // }

        // $products = \App\Models\Product::all();
        // $arr = [];
        // foreach($products as $k => $v){
        //     $arr[$v->type_id]['sale_price'][$v->packaging_type] = $v->sale_price;
        //     $arr[$v->type_id]['purchase_price'][$v->packaging_type] = $v->purchase_price;
        // }
        // foreach($arr as $a => $b){
        //     $product_type = \App\Models\ProductType::find($a);
        //     $product_type->sale_price = $b['sale_price'];
        //     $product_type->purchase_price = $b['purchase_price'];
        //     $product_type->save();
        // }
        // exit;
        // dd($data);
    }

    private function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }
}
