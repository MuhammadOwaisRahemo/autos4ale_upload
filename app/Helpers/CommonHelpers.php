<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Helpers\Exception;
use App\Models\Settings;

class CommonHelpers
{

    public static function send_email($view, $data, $to, $subject = 'Welcome !', $from_email = null, $from_name = null)
    {
        $from_name = $from_name ?? env('FROM_EMAIL', '');
        $from_email = $from_email ?? env('FROM_NAME', '');

        $data = (array) $data;
        $data['subject'] = $subject;
        $data['to'] = $to;
        $data['from_name'] = $from_name;
        $data['from_email'] = $from_email;

        $data['email_data'] = $data;
        try {
            Mail::send('emails.' . $view, $data, function ($message) use ($data) {
                $message->from($data['from_email'], $data['from_name']);
                $message->subject($data['subject']);
                $message->to($data['to']);
            });
            return true;
        } catch (Exception $ex) {
            return response()->json($ex);
        }
    }

    public static function uploadSingleFile($file, $path = 'uploads/images/', $types = "png,gif,csv,jpeg,svg,jpg", $filesize = '20000', $rule_msgs = [])
    {
        $path = $path . date('Y') . '/';
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $rules = array('file' => 'required|mimes:' . $types . "|max:" . $filesize);
        $validator = \Validator::make(array('file' => $file), $rules, $rule_msgs);
        if ($validator->passes()) {
            $rand = time() . "_" . \Str::random(15) . "_";
            $f_name = $rand . $file->getClientOriginalName();
            $filename = $path . $f_name;
            //full size image
            $file->move($path, $f_name);
            return $filename;
        } else {
            return ['error' => $validator->errors()->first('file')];
        }
    }

    public static function createThumbnail($filepath, $width = 500, $height = 500)
    {
        $img = \Image::make($filepath);
        //this so name can be broken
        $path = explode('/', $filepath);
        $f_name = "thumbnail_".last($path);
        //sticting the name and path again
        $path = str_replace(last($path), '', $filepath);
        $filename = $path . $f_name;

        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($filename, 80);
        return $filename;
    }

    public static function all_countries(){
        return \DB::table('countries')->get();
    }

    public static function get_new_lease_code(){
        $lastOrder = \DB::table('leasings')->where('code', '!=', '')->orderBy('id', 'desc')->first();
        if (empty($lastOrder)){
            $number = 30010000001;
        }else{
            $number = (int) $lastOrder->code + 1;
        }
        return (string) $number;
    }

    public static function get_new_payment_code(){
        $lastOrder = \DB::table('payments')->select(['id', 'payment_code'])->where('payment_code', \DB::raw("(select max(`payment_code`) from payments)"))->first();

        if (empty($lastOrder)){
            $number = 33000000001;
        }else{
            $number = (int) $lastOrder->payment_code + 1;
        }
        return (string) $number;
    }


    public static function get_order_numer(){

        $number = date('ymd0001');
        $data = \DB::table('orders')->select(['order_no'])->where('order_no',$number)->first();
        if($data){
            $lastOrder = \DB::table('orders')->select(['order_no'])->where('order_no', \DB::raw("(select max(`order_no`) from orders)"))->first();
            $number = (int) $lastOrder->order_no + 1;
        }
        return (string) $number;
    }


    public static function get_gate_pass_code(){

        $lastOrder = \DB::table('gate_passes')->select(['id', 'pass_no'])->where('pass_no', \DB::raw("(select max(`pass_no`) from gate_passes)"))->first();

        if (empty($lastOrder)){
            $number = 66000000001;
        }else{
            $number = (int) $lastOrder->pass_no + 1;
        }
        return (string) $number;
    }


    public static function discount_calc($amount=0,$check=false,$is_minus=true){
        $settings = Settings::where('type','discount')->first();
        $dis_15 = 0;
        $dis_2  = 0 ;
        if($settings->data->is_discount_on==1){

            $dis_15  = ($amount*($settings->data->discount/100));
        }

        if($settings->data->is_sp_discount_on==1){
            $dis_2   = ($amount*($settings->data->sp_discount/100));
        }
        if($check){
            $dis_15 = $settings->data->discount;
            $dis_2  = $settings->data->sp_discount;
            $ar =['discount'=>$dis_15,'sp_discount'=>$dis_2];
            return $ar;
        }

          $r = ($is_minus) ?  $amount-($dis_15+$dis_2) :  ($dis_15+$dis_2);
          return $r;
    }


    public static function convert_number_to_words($number) {

        $hyphen      = '-';
        $conjunction = ' and ';
        $separator   = ', ';
        $negative    = 'negative ';
        $decimal     = ' point ';
        $dictionary  = array(
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'fourty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
            1000                => 'thousand',
            1000000             => 'million',
            1000000000          => 'billion',
            1000000000000       => 'trillion',
            1000000000000000    => 'quadrillion',
            1000000000000000000 => 'quintillion'
        );

        if (!is_numeric($number)) {
            return false;
        }

        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }

        if ($number < 0) {
            return $negative . Self::convert_number_to_words(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . Self::convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = Self::convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= Self::convert_number_to_words($remainder);
                }
                break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }

        return $string ;
    }
}
