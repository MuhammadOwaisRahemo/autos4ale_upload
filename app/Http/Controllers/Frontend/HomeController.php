<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CarAd;
use App\Models\CarAdCategory;
use App\Models\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function luxury(Request $request)
    {
        $car_ads = new CarAd();

        $data = [
            'title' => 'Luxury cars',
            'data' => $car_ads->with('car_details', 'car_images')->where('status', '1')->where('category_id', 1)->where('condition_type', 'new')->where('fuel', 'other')->latest()->get(),
            'banner_name' => 'luxurycars_banner',
            'banner_title' => 'Luxury cars',
            'filter_file_name' => false,
        ];
        return view('front.pages.luxurycars')->with($data);
    }

    // check_login
    public function check_login(Request $request)
    {
        $reg = $request->reg;
        $milage = $request->milage;
        $route = route('front.find_car', ['reg' => $reg, 'milage' => $milage]);

        if (auth('user')->check()) {
            return redirect($route);
        } else {
            session()->put('find_car', $route);
            return redirect(route('front.signin'));
        }
    }
}
