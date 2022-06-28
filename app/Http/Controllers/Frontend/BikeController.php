<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CarAd;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Bikes',
            'banner_name' => 'main-banner bike_bg',
            'banner_title' => 'Find your perfect bike',
            'filter_file_name' => 'bike_filter',
        ];
        return view('front.pages.bikes.bikes')->with($data);
    }

    public function new_bikes()
    {
        $ads = new CarAd();

        $data = [
            'title' => 'New Bikes',
            'new_bikes' => $ads->with('car_details','car_images')->where('status','1')->where('category_id',3)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'banner_name' => 'main-banner bike_bg',
            'banner_title' => 'The latest van reviews, news and advice from our team',
            'filter_file_name' => 'new_bike_filter',
        ];
        return view('front.pages.bikes.new_bikes')->with($data);
    }

    public function sell_bike()
    {
        $data = [
            'title' => 'Sell Your Bike',
            'banner_name' => 'main-banner bike_bg',
            'banner_title' => 'Put your motorhome in front of over 625,000 buyers',
            'filter_file_name' => 'sell_bike_filter',
        ];
        return view('front.pages.bikes.sell_bike')->with($data);
    }

    public function bike_reviews()
    {
        $blogs = Blog::where('status','publish')->where('category_id',3)->orderBy('id','DESC')->get();
        $data = [
            'title' => 'Bike Reviews',
            'data' => $blogs,
            'banner_name' => 'main-banner bike_bg',
            'banner_title' => 'The latest bike reviews, news and advice from our team',
            'filter_file_name' => 'bike_review_filter',
        ];
        return view('front.pages.bikes.bike_reviews')->with($data);
    }

    public function bike_finance()
    {
        $data = [
            'title' => 'Bike Finance',
            'banner_name' => 'main-banner bike_bg',
            'banner_title' => 'The latest bike reviews, news and advice from our team',
            'filter_file_name' => 'bike_finance_filter',
        ];
        return view('front.pages.bikes.bike_finance')->with($data);
    }

    public function electric_bikes()
    {
        $ads = new CarAd();

        $data = [
            'title' => 'Electric Bikes',
            'electric_bikes' => $ads->with('car_details','car_images')->where('status','1')->where('category_id',3)->where('condition_type','used')->where('fuel','electric')->latest()->get(),
            'banner_name' => 'main-banner bike_bg',
            'banner_title' => 'The future of riding',
            'filter_file_name' => 'electric_bike_filter',
        ];
        return view('front.pages.bikes.electric_bikes')->with($data);
    }
}
