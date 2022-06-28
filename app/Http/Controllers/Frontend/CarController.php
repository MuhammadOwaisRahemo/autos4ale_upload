<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\CarAd;
use App\Models\Model;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $car_ads = new CarAd();
        $data = [
            'title' => 'Home',
            'brands' => Brand::all(),
            'main_category' => 'car',
            'new_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'used_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','used')->where('fuel','other')->latest()->get(),
            'sport_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'luxry_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'banner_name' => 'main-banner',
            'banner_title' => 'Find best car for you in simple easy way',
            'banner_dec' => 'Auto4sale is the newest way of selling a vehicle. We have wade it simple for car sellers <br> to sell their vehicle and receive immediate cash payouts with no hassle.',
            'filter_file_name' => 'car_sale_filter',
        ];

        return view('front.pages.cars.index')->with($data);
    }

    public function get_models(Request $request)
    {
        $models = Model::where('brand_id',$request->brand_id)->get();

        $html = '<option value=""><strong>Model</strong></option>';
        if (count($models) > 0) {
            foreach ($models as $value) {
                $html .= '<option value="'.$value->id.'" id="model_id'.$value->id.'" data-value="'. $value->name .'">'.ucfirst($value->name).'</option>';

                $data = [
                    'status' => 200,
                    'html' => $html,
                ];

            }
        }else{
            $html .= '<option value="">Model not found</option>';

            $data = [
                'status' => 404,
                'html' => $html,
            ];
        }
        return response()->json($data);

    }

    public function used_cars()
    {
        $car_ads = new CarAd();

        $data = [
            'title' => 'Used Cars',
            'main_category' => 'car',
            'new_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'used_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','used')->where('fuel','other')->latest()->get(),
            'sport_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'luxry_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'banner_name' => 'main-banner',
            'banner_title' => 'Find best car for you in simple easy way',
            'banner_dec' => 'Auto4sale is the newest way of selling a vehicle. We have wade it simple for car sellers <br> to sell their vehicle and receive immediate cash payouts with no hassle.',
            'filter_file_name' => 'used_car_filter',
        ];
        return view('front.pages.cars.used_cars')->with($data);
    }

    public function new_cars()
    {
        $car_ads = new CarAd();

        $data = [
            'title' => 'New Cars',
            'main_category' => 'car',
            'new_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'used_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','used')->where('fuel','other')->latest()->get(),
            'sport_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'luxry_cars' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'banner_name' => 'main-banner',
            'banner_title' => 'Find best car for you in simple easy way',
            'banner_dec' => 'Auto4sale is the newest way of selling a vehicle. We have wade it simple for car sellers <br> to sell their vehicle and receive immediate cash payouts with no hassle.',
            'filter_file_name' => 'car_new_filter',
        ];
        return view('front.pages.cars.new_cars')->with($data);
    }

    public function sell_my_car()
    {
        $data = [
            'title' => 'Sell My Car',
        ];
        return view('front.pages.cars.sell_cars')->with($data);
    }

    public function electric_cars()
    {
        $car_ads = new CarAd();
        $data = [
            'title' => 'Electric Cars',
            'main_category' => 'car',
            'data' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','used')->where('fuel','electric')->latest()->get(),
            'banner_name' => 'main-banner',
            'banner_title' => 'Find best car for you in simple easy way',
            'banner_dec' => 'Auto4sale is the newest way of selling a vehicle. We have wade it simple for car sellers <br> to sell their vehicle and receive immediate cash payouts with no hassle.',
            'filter_file_name' => 'used_car_filter',
        ];
        return view('front.pages.cars.electric_cars')->with($data);
    }

    public function leasing_cars()
    {
        $car_ads = new CarAd();
        $data = [
            'title' => 'Leasing Cars',
            'main_category' => 'car',
            'data' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->latest()->get(),
            'banner_name' => 'main-banner',
            'banner_title' => 'Find best car for you in simple easy way',
            'banner_dec' => 'Auto4sale is the newest way of selling a vehicle. We have wade it simple for car sellers <br> to sell their vehicle and receive immediate cash payouts with no hassle.',
            'filter_file_name' => 'car_leasing_filter',
        ];
        return view('front.pages.cars.leasing_car')->with($data);
    }

    public function car_blogs()
    {
        $blogs = Blog::where('status','publish')->where('category_id',1)->orderBy('id','DESC')->get();

        $data = [
            'title' => 'Car Blogs',
            'main_category' => 'car',
            'data' => $blogs,
            'banner_name' => 'main-banner',
            'banner_title' => 'Find best car for you in simple easy way',
            'banner_dec' => 'Auto4sale is the newest way of selling a vehicle. We have wade it simple for car sellers <br> to sell their vehicle and receive immediate cash payouts with no hassle.',
            'filter_file_name' => 'car_blog_filter',
        ];

        return view('front.pages.cars.car_blogs')->with($data);
    }

    public function single_car_blog(Request $request)
    {
        $id = hashids_decode($request->id);
        $blog = Blog::where('id',$id)->where('status','publish')->first();

        $data = [
            'title' => 'Car Blog',
            'data' => $blog
        ];
        return view('front.pages.cars.single_car_blog')->with($data);
    }

    public function buy_new_car()
    {
        $car_ads = new CarAd();

        $data = [
            'title' => 'Buy New Car',
            'main_category' => 'car',
            'data' => $car_ads->with('car_details','car_images')->where('status','1')->where('category_id',1)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'banner_name' => 'main-banner',
            'banner_title' => 'Find best car for you in simple easy way',
            'banner_dec' => 'Auto4sale is the newest way of selling a vehicle. We have wade it simple for car sellers <br> to sell their vehicle and receive immediate cash payouts with no hassle.',
            'filter_file_name' => 'car_buy_filter',
        ];

        return view('front.pages.cars.buy_car')->with($data);
    }

    public function car_details(Request $request)
    {
        $ad_id = hashids_decode($request->id);
        $car_ads = CarAd::hashidFind($request->id)->with('car_details','car_images','car_contact_details')->where('id',$ad_id)->where('status','1')->first();

        $data = [
            'title' => 'Car Details',
            'data' => $car_ads,
        ];

        return view('front.pages.cars.car_details')->with($data);
    }

    public function car_value()
    {
        $data = [
            'title' => 'Value Cars',
            'main_category' => 'car',
            'banner_name' => 'main-banner',
            'banner_title' => 'Find best car for you in simple easy way',
            'banner_dec' => 'Auto4sale is the newest way of selling a vehicle. We have wade it simple for car sellers <br> to sell their vehicle and receive immediate cash payouts with no hassle.',
            'filter_file_name' => 'car_value_filter',
        ];
        return view('front.pages.cars.value_car')->with($data);
    }
}
