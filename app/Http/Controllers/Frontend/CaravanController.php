<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class CaravanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Caravans',
            'banner_name' => 'main-banner caravans_bg',
            'banner_title' => 'Find your perfect motorhome',
            'filter_file_name' => 'caravans_filter',
        ];
        return view('front.pages.caravans.caravans')->with($data);
    }

    public function caravans_used()
    {
        $data = [
            'title' => 'Used Caravans',
            'banner_name' => 'main-banner caravans_bg',
            'banner_title' => 'The UK’s largest choice of pre-loved caravans',
            'filter_file_name' => 'caravans_used_filter',
        ];
        return view('front.pages.caravans.caravans_used')->with($data);
    }

    public function caravans_new()
    {
        $data = [
            'title' => 'New Caravans',
            'banner_name' => 'main-banner caravans_bg',
            'banner_title' => 'Drive your new caravans away today',
            'filter_file_name' => 'caravans_new_filter',
        ];
        return view('front.pages.caravans.caravans_new')->with($data);
    }

    public function caravans_sell()
    {
        $data = [
            'title' => 'Sell Your Caravan',
            'banner_name' => 'main-banner caravans_bg',
            'banner_title' => 'Put your caravan in front of over 340,000 buyers',
            'filter_file_name' => 'caravans_sell_filter',
        ];
        return view('front.pages.caravans.caravans_sell')->with($data);
    }

    public function caravans_reviews()
    {
        $blogs = Blog::where('status','publish')->where('category_id',5)->orderBy('id','DESC')->get();
        $data = [
            'title' => 'Caravans Reviews',
            'data' => $blogs,
            'banner_name' => 'main-banner caravans_bg',
            'banner_title' => 'Drive your new caravans away today',
            'filter_file_name' => 'caravans_reviews_filter',
        ];
        return view('front.pages.caravans.caravans_reviews')->with($data);
    }

    public function caravans_finance()
    {
        $data = [
            'title' => 'Finance Caravans',
            'banner_name' => 'main-banner caravans_bg',
            'banner_title' => 'See caravans available near you',
            'filter_file_name' => 'caravans_finance_filter',
        ];
        return view('front.pages.caravans.caravans_finance')->with($data);
    }
}
