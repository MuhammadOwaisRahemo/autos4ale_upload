<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CarAd;
use Illuminate\Http\Request;

class VanController extends Controller
{
    public function vans()
    {
        $ads = new CarAd();
        $data = [
            'title' => 'Vans',
            'used_vans' => $ads->with('car_details','car_images')->where('status','1')->where('category_id',2)->where('condition_type','used')->where('fuel','other')->latest()->get(),
            'banner_name' => 'main-banner van_bg',
            'banner_title' => 'Find your perfect van',
            'filter_file_name' => 'vans_filter',
        ];
        return view('front.pages.vans.vans')->with($data);
    }

    public function new_vans()
    {
        $ads = new CarAd();
        $data = [
            'title' => 'New Vans',
            'electric_vans' => $ads->with('car_details','car_images')->where('status','1')->where('category_id',2)->where('condition_type','new')->where('fuel','other')->latest()->get(),
            'banner_name' => 'main-banner van_bg',
            'banner_title' => 'Drive your new van away today',
            'filter_file_name' => 'new_vans_filter',
        ];
        return view('front.pages.vans.new_vans')->with($data);
    }

    public function sell_van()
    {
        $data = [
            'title' => 'Sell Your Van',
            'banner_name' => 'main-banner van_bg',
            'banner_title' => 'Put your van in front of 1.6 million buyers',
            'filter_file_name' => 'sell_van_filter',
        ];
        return view('front.pages.vans.sell_van')->with($data);
    }

    public function van_blogs()
    {
        $blogs = Blog::where('status','publish')->where('category_id',2)->orderBy('id','DESC')->get();
        $data = [
            'title' => 'Van Blogs',
            'data' => $blogs,
            'banner_name' => 'main-banner van_bg',
            'banner_title' => 'The latest van reviews, news and advice from our team',
            'filter_file_name' => 'van_blog_filter',
        ];
        return view('front.pages.vans.van_blogs')->with($data);
    }

    public function van_reviews()
    {
        $data = [
            'title' => 'Van Reviews',
            'banner_name' => 'main-banner van_bg',
            'banner_title' => 'The latest van reviews, news and advice from our team',
            'filter_file_name' => 'van_reviews_filter',
        ];
        return view('front.pages.vans.van_reviews')->with($data);
    }

    public function van_finance()
    {
        $data = [
            'title' => 'Van Finance',
            'banner_name' => 'main-banner van_bg',
            'banner_title' => 'Put your van in front of 1.6 million buyers',
            'filter_file_name' => 'van_finance_filter',
        ];
        return view('front.pages.vans.van_finance')->with($data);
    }

    public function electric_van()
    {
        $ads = new CarAd();

        $data = [
            'title' => 'Electric Van',
            'electric_vans' => $ads->with('car_details','car_images')->where('status','1')->where('category_id',2)->where('condition_type','used')->where('fuel','electric')->latest()->get(),
            'banner_name' => 'main-banner van_bg',
            'banner_title' => 'The latest van reviews, news and advice from our team',
            'filter_file_name' => 'electric_van_filter',
        ];
        return view('front.pages.vans.electric_van')->with($data);
    }
}
