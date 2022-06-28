<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CarAd;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function index()
    {
        $ads = new CarAd();
        $data = [
            'title' => 'Trucks',
            'new_trucks' => $ads->with('car_details','car_images')->where('status','1')->where('category_id',6)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'banner_name' => 'main-banner truck_bg',
            'banner_title' => 'Find new & used trucks',
            'filter_file_name' => 'trucks_filter',
        ];
        return view('front.pages.trucks.trucks')->with($data);
    }

    public function trucks_used()
    {
        $data = [
            'title' => 'Used Trucks',
            'banner_name' => 'main-banner truck_bg',
            'banner_title' => 'Browse pre-owned trucks',
            'filter_file_name' => 'trucks_used_filter',
        ];
        return view('front.pages.trucks.trucks_used')->with($data);
    }

    public function trucks_new()
    {
        $data = [
            'title' => 'New Trucks',
            'banner_name' => 'main-banner truck_bg',
            'banner_title' => 'Drive your new truck away today',
            'filter_file_name' => 'trucks_new_filter',
        ];
        return view('front.pages.trucks.trucks_new')->with($data);
    }

    public function trucks_sell()
    {
        $data = [
            'title' => 'Sell Your Truck',
            'banner_name' => 'main-banner truck_bg',
            'banner_title' => 'Drive your new truck away today',
            'filter_file_name' => 'trucks_sell_filter',
        ];
        return view('front.pages.trucks.trucks_sell')->with($data);
    }

    public function trucks_reviews()
    {
        $blogs = Blog::where('status','publish')->where('category_id',6)->orderBy('id','DESC')->get();
        $data = [
            'title' => 'Truck Reviews',
            'data' => $blogs,
            'banner_name' => 'main-banner truck_bg',
            'banner_title' => 'The latest truck reviews, news and advice from our team',
            'filter_file_name' => 'trucks_reviews_filter',
        ];
        return view('front.pages.trucks.trucks_reviews')->with($data);
    }
}
