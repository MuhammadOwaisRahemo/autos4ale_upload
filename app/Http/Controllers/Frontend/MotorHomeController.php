<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class MotorHomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Motorhomes',
            'banner_name' => 'main-banner motohomes_bg',
            'banner_title' => 'Find your perfect motorhome',
            'filter_file_name' => 'motorhomes_filter',
        ];
        return view('front.pages.motorhomes.motorhomes')->with($data);
    }

    public function motorhomes_used()
    {
        $data = [
            'title' => 'Used Motorhomes',
            'banner_name' => 'main-banner motohomes_bg',
            'banner_title' => 'The UK’s largest choice of pre-loved motorhomes',
            'filter_file_name' => 'motorhomes_used_filter',
        ];
        return view('front.pages.motorhomes.motorhomes_used')->with($data);
    }

    public function motorhomes_new()
    {
        $data = [
            'title' => 'New Motorhomes',
            'banner_name' => 'main-banner motohomes_bg',
            'banner_title' => 'Drive your new motorhome away today',
            'filter_file_name' => 'motorhomes_new_filter',
        ];
        return view('front.pages.motorhomes.motorhomes_new')->with($data);
    }

    public function motorhomes_sell()
    {
        $data = [
            'title' => 'Sell Your Motorhome',
            'banner_name' => 'main-banner motohomes_bg',
            'banner_title' => 'Drive your new motorhome away today',
            'filter_file_name' => 'motorhomes_sell_filter',
        ];
        return view('front.pages.motorhomes.motorhomes_sell')->with($data);
    }

    public function motorhomes_reviews()
    {
        $blogs = Blog::where('status','publish')->where('category_id',4)->orderBy('id','DESC')->get();
        $data = [
            'title' => 'Motorhomes Reviews',
            'data' => $blogs,
            'banner_name' => 'main-banner motohomes_bg',
            'banner_title' => 'Drive your new motorhome away today',
            'filter_file_name' => 'motorhomes_reviews_filter',
        ];
        return view('front.pages.motorhomes.motorhomes_reviews')->with($data);
    }

    public function motorhomes_finance()
    {
        $data = [
            'title' => 'Finance Motorhome',
            'banner_name' => 'main-banner motohomes_bg',
            'banner_title' => 'Drive your new motorhome away today',
            'filter_file_name' => 'motorhomes_finance_filter',
        ];
        return view('front.pages.motorhomes.motorhomes_finance')->with($data);
    }
}
