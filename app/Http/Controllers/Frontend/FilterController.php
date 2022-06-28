<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CarAd;
use App\Models\CarAdCategory;
use App\Models\Model;
use App\Models\User;

class FilterController extends Controller
{
    public function search_filter(Request $request)
    {
        $condition_type = 'used';
        if (isset($request->search_by) && $request->search_by == "brand_new") {
            $condition_type = 'new';
        }

        if (!empty($request->category)) {
            $category_id = CarAdCategory::where('slug',$request->category)->first()->id;
            $ads = CarAd::with('car_images', 'car_details','user.ads')->where(['category_id' => $category_id, 'status' => '1', 'condition_type' => $condition_type, 'fuel' => 'other']);
        }else{
            $ads = CarAd::with('car_images', 'car_details')->where(['status' => '1', 'condition_type' => $condition_type, 'fuel' => 'other']);
        }

        $fuel_type = $ads->groupBy('fuel_type')->get();
        $color = $ads->groupBy('color')->get();
        $engine_size = $ads->groupBy('engine_size')->orderBy('id', 'desc')->get();
        $min_year = $ads->groupBy('register_date')->orderBy('id', 'desc')->get();
        $max_year = $ads->groupBy('register_date')->latest()->get();

        if (isset($request->make)) {
            $brand_id = Brand::where('name', $request->make)->first()->id;
            $ads = $ads->where('brand_id', $brand_id);

            $model_filter = Model::where('brand_id', $brand_id)->get();
        }
        if (isset($request->model)) {
            $model_id = Model::where('brand_id', $brand_id)->where('name', $request->model)->first()->id;
            $ads = $ads->where('model_id', $model_id);
        }
        if (isset($request->fuel_type)) {
            $ads = $ads->where('fuel_type', $request->fuel_type);
        }
        if (isset($request->color)) {
            $ads = $ads->where('color', $request->color);
        }
        if (isset($request->seller)) {
            $ads = $ads->whereHas('car_details', function ($query) use ($request) {
                $query->where('trade_seller', $request->seller);
            });
        }
        if (isset($request->price)) {
            $price = explode("to", $request->price);
            $min = $price[0];
            $max = $price[1];
            $ads = $ads->whereHas('car_details', function ($query) use ($min, $max) {
                $query->whereBetween('price', [$min, $max]);
            });
        }
        if (isset($request->engine_size)) {
            $ads = $ads->where('engine_size', $request->engine_size);
        }
        if (isset($request->search_by) && $request->search_by == 'year') {
            if (isset($request->from) && !isset($request->to)) {
                $ads = $ads->where('register_date', $request->from);
            }
            if (isset($request->to) && !isset($request->from)) {
                $ads = $ads->where('register_date', $request->to);
            }
            if (isset($request->from) && isset($request->to)) {
                $ads = $ads->whereBetween('register_date', [$request->from, $request->to]);
            }
        }

        if (isset($category_id)) {
            $make = CarAd::with('brand')->where(['category_id' => $category_id, 'status' => '1', 'condition_type' => $condition_type, 'fuel' => 'other']);
        }else{
            $make = CarAd::with('brand')->where(['status' => '1', 'condition_type' => $condition_type, 'fuel' => 'other']);
        }

        $data = [
            'title' => 'Search Data',
            'all_ads_by_trade' => hashids_encode(1),
            'ads' => $ads->paginate(10),
            'make' => $make->groupBy('brand_id')->get(),
            'model' => @$model_filter,
            'fuel_type' => $fuel_type,
            'color' => $color,
            'engine_size' => $engine_size,
            'min_year' => $min_year,
            'max_year' => $max_year,
            'request' => @$request,
            'category_id' => @$category_id
        ];

        return view('front.pages.search_filters')->with($data);
    }

    public function ads_dealer_data(Request $request)
    {

        $condition_type = 'used';
        if (isset($request->search_by) && $request->search_by == "brand_new") {
            $condition_type = 'new';
        }

        $user_trade_details = User::hashidFind($request->id);
        $category_id = CarAdCategory::where('slug',$request->channel)->first();

        if (!empty($request->category) && !empty($category_id)) {
            $ads = CarAd::with('car_images', 'car_details')->where(['user_id' => $user_trade_details->id,'category_id' => $category_id->id, 'status' => '1', 'condition_type' => $condition_type, 'fuel' => 'other']);
        }else{
            $ads = CarAd::with('car_images', 'car_details')->where(['user_id' => $user_trade_details->id,'status' => '1', 'condition_type' => $condition_type, 'fuel' => 'other']);
        }


        $color = $ads->groupBy('color')->get();
        $min_year = $ads->groupBy('register_date')->orderBy('id', 'desc')->get();
        $max_year = $ads->groupBy('register_date')->latest()->get();


        if (isset($request->make)) {
            $brand_id = Brand::where('name', $request->make)->first()->id;
            $ads = $ads->where('brand_id', $brand_id);

            $model_filter = Model::where('brand_id', $brand_id)->get();
        }
        if (isset($request->model)) {
            $model_id = Model::where('brand_id', $brand_id)->where('name', $request->model)->first()->id;
            $ads = $ads->where('model_id', $model_id);
        }
        if (isset($request->color)) {
            $ads = $ads->where('color', $request->color);
        }
        if (isset($request->price)) {
            $price = explode("to", $request->price);
            $min = $price[0];
            $max = $price[1];
            $ads = $ads->whereHas('car_details', function ($query) use ($min, $max) {
                $query->whereBetween('price', [$min, $max]);
            });
        }
        if (isset($request->search_by) && $request->search_by == 'year') {
            if (isset($request->from) && !isset($request->to)) {
                $ads = $ads->where('register_date', $request->from);
            }
            if (isset($request->to) && !isset($request->from)) {
                $ads = $ads->where('register_date', $request->to);
            }
            if (isset($request->from) && isset($request->to)) {
                $ads = $ads->whereBetween('register_date', [$request->from, $request->to]);
            }
        }

        $data = [
            'title' => 'Ad Dealer',
            'trade_details' => $user_trade_details,
            'ads' => $ads->paginate(10),
            'make' => CarAd::with('brand')->where(['user_id' => $user_trade_details->id,'category_id' => $category_id, 'status' => '1', 'condition_type' => $condition_type, 'fuel' => 'other'])->groupBy('brand_id')->get(),
            'model' => @$model_filter,
            'color' => $color,
            'min_year' => $min_year,
            'max_year' => $max_year,
            'request' => @$request,
        ];

        return view('front.pages.ads_dealer')->with($data);
    }
}
