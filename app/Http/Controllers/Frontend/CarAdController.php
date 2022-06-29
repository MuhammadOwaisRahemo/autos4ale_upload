<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\CommonHelpers;
use App\Models\Brand;
use App\Models\CarAdImage;
use App\Models\CarAd;
use App\Models\CarAdCategory;
use App\Models\CarAdPayment;
use App\Models\CarAdDetail;
use App\Models\CarAdContactDetail;
use App\Models\Enquiry;
use App\Models\CarAdSubCategory;
use App\Models\Model;
use Illuminate\Support\Facades\Validator;

use Stripe;

use function GuzzleHttp\Promise\all;

class CarAdController extends Controller
{

    public function vehicle_sale_summary()
    {
        $data = array(
            'title' => 'Vehicle Selling Summary',
        );
        return view('front.pages.user_dashboard.vehicle_seeling.vehicle_sale_summary')->with($data);
    }

    public function find_car(Request $request)
    {
        if(session()->get('find_car')){
            session()->forget('find_car');
        }

        $data = array(
            'title' => 'Find Car',
            'data' => @$request
        );
        return view('front.pages.user_dashboard.vehicle_seeling.find_car')->with($data);
    }

    public function find_car_details(Request $request)
    {

        $data = $this->get_response($request->reg);

        $details = json_decode($data);

        if (!isset($details->message)) {
            $html = "";
            $title = $details->make . " " . $details->model;
            $html .= '<div class="vehicle_saleaddbox mt-4">
            <div class="row">
             <div class="col-md-6">
            <h4>Vehicle details found:</h4>
            <h4 class="mt-3 vehicle_title">' . $title . '</h4>

        </div>
        <div class="col-md-6 car_details">
             <div class="row">
                <div class="col">
                    <h4 class="fw-normal">Fuel type</h4>
                </div>
                <div class="col">
                    <h4 class="text-theme">' . $details->fuelType . '</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="fw-normal">Engine size</h4>
                </div>
                <div class="col">
                    <h4 class="text-theme">' . $details->engineCapacity . 'cc</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h4 class="fw-normal">Colour</h4>
                </div>
                <div class="col">
                    <h4 class="text-theme">' . $details->colour . '</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h4 class="fw-normal">Date of first registration</h4>
                </div>
                <div class="col">
                    <h4 class="text-theme">' . $details->yearOfManufacture . '</h4>
                </div>
            </div>
        </div>
        </div>
        </div>
        <input type="hidden" name="title" value="' . $title . '">
        <input type="hidden" name="fuel_type" id="fuel_type" value="' . $details->fuelType . '">
        <input type="hidden" name="engine_size" value="' . $details->engineCapacity . '">
        <input type="hidden" name="color" value="' . $details->colour . '">
        <input type="hidden" name="register_date" value="' . $details->yearOfManufacture . '">
        <input type="hidden" name="register_num" value="' . $request->reg . '">
        <input type="hidden" name="mileage_num" value="' . $request->milage . '">
        <textarea name="car_data" type="text" hidden>'.$data.'</textarea>

        <div class="text-end vehicleadd_btm me-md-5 pe-md-4">
            <button type="submit" class="btn btn-theme">Continue</button>
        </div>';
            $msg = [
                'status' => 200,
                'html' => $html,
            ];
        } else {
            $msg = [
                'status' => 404,
                'error' => $details->message,
            ];
        }

        return response()->json($msg);
    }

    public function get_car_subCat(Request $request)
    {
        $sub_category = CarAdSubCategory::where('category_id',$request->cat_id)->get();

        $html = '<option value="">--Select Subcategory--</option>';
        if (count($sub_category) > 0) {
            foreach ($sub_category as $key => $value) {
                $html .= '<option value="'.$value->id.'">'.ucfirst($value->name).'</option>';

                $data = [
                    'status' => 200,
                    'html' => $html,
                ];

            }
            return response()->json($data);
        }else{
            $html .= '<option value="">Subcategory not found</option>';

            $data = [
                'status' => 404,
                'html' => $html,
            ];
            return response()->json($data);
        }

    }

    public function save_car_ad(Request $request)
    {
        $car_data = json_decode($request->car_data);
        $brand = Brand::where('name',$car_data->make)->first();
        $model = Model::where('brand_id',@$brand->id)->where('name',$car_data->model)->first();

        if (!isset($brand)) {
            $brand = new Brand();
            $brand->name = $car_data->make;
            $brand->save();
        }
        if (!isset($model->id)) {
            $model = new Model();
            $model->brand_id = $brand->id;
            $model->name = $car_data->model;
            $model->save();

        }

        $user_id = auth('user')->user()->id;
        $car_ad_check = CarAd::where('user_id', $user_id)->where('register_num', $request->register_num)->where('status', '0')->first();

        if (isset($car_ad_check->id)) {
            return redirect($car_ad_check->route);
        } else {
            $car_ads = new CarAd();
            $car_ads->user_id = $user_id;
            $car_ads->register_num = $request->register_num;
            $car_ads->brand_id = $brand->id;
            $car_ads->model_id = $model->id;
            $car_ads->register_num = $request->register_num;
            $car_ads->title = $request->title;
            $car_ads->mileage_num = $request->mileage_num;
            $car_ads->fuel_type = $request->fuel_type;
            $car_ads->engine_size = $request->engine_size;
            $car_ads->color = $request->color;
            $car_ads->register_date = $request->register_date;
            $car_ads->car_data = $request->car_data;
            $car_ads->save();
            $car_ads->route = route('front.vehicle_ad_price', $car_ads->hashid);
            $car_ads->save();
            return redirect(route('front.vehicle_ad_price', $car_ads->hashid));
        }
    }

    public function vehicle_ad_price($ad_id)
    {
        $data = [
            'title' => 'Vehicle Ad Price',
            'ad_id' => $ad_id,
            'categories' => CarAdCategory::all(),
        ];
        return view('front.pages.user_dashboard.vehicle_seeling.vehicle_ad_price')->with($data);
    }

    public function vehicle_save_price(Request $request)
    {
        if (isset($request->trade_name)) {
            $check = true;
        } else {
            $check = false;
        }

        $user_id = auth('user')->user()->id;
        $car_ad_id = hashids_decode($request->car_ad_id);
        $car_details = CarAdDetail::where('car_ad_id', $car_ad_id)->first();
        if (!isset($car_details->id)) {
            $car_details = new CarAdDetail();
        }

        $car_details->user_id = $user_id;
        $car_details->car_ad_id = $car_ad_id;
        $car_details->name_title = $request->name_title;
        $car_details->first_name = $request->first_name;
        $car_details->last_name = $request->last_name;
        $car_details->price = $request->price;
        $car_details->trade_seller = $request->trade_seller;
        $car_details->trade_name = $check == true ? $request->trade_name : null;
        $car_details->address_1 = $check == true ? $request->address_1 : null;
        $car_details->address_2 = $check == true ? $request->address_2 : null;
        $car_details->city = $check == true ? $request->city : null;
        $car_details->country = $check == true ? $request->country : null;
        $car_details->post_code = $check == true ? $request->post_code : null;
        $car_details->telephone = $check == true ? $request->telephone : null;

        $car_details->save();

        $car_ad = CarAd::find($car_ad_id);
        $car_ad->route = route('front.car_ad_details', $car_details->hashid);
        $car_ad->category_id = $request->category_id;
        $car_ad->condition_type = $request->condition_type;
        $car_ad->fuel = $request->fuel;
        $car_ad->save();

        return redirect(route('front.car_ad_details', $car_details->hashid));
    }

    public function car_ad_details($detail_id)
    {
        $detail_id = hashids_decode($detail_id);
        $car_detail = CarAdDetail::where('id', $detail_id)->select(['id', 'price', 'car_ad_id'])->first();
        $car_ad = CarAd::where('id', $car_detail->car_ad_id)->select(['title'])->first();

        $data = [
            'title' => 'Car Details',
            'detail_id' => $car_detail->id,
            'price' => $car_detail->price,
            'title' => $car_ad->title
        ];
        return view('front.pages.user_dashboard.vehicle_seeling.car_ad_details')->with($data);
    }

    public function save_car_details(Request $request)
    {
        // $car_details = CarAdDetail::where('car_ad_id',$car_ad_id)->first();
        // if (!isset($car_details->id)) {
        //    $car_details = new CarAdDetail();
        // }
        $car_details = CarAdDetail::find($request->detail_id);
        $car_details->price = $request->price;
        $car_details->ad_title = $request->ad_title;
        $car_details->subtitle = $request->subtitle;
        $car_details->feature = $request->feature;
        $car_details->history_maintenance = $request->history_maintenance;
        $car_details->advert_text = $request->advert_text;
        $car_details->specification = $request->specification;
        $car_details->running_cost = $request->running_cost;
        $car_details->basic_history = $request->basic_history;
        $car_details->video_url = $request->video_url;
        $car_details->save();

        $car_ad = CarAd::find($car_details->car_ad_id);
        $car_ad->route = route('front.car_images', hashids_encode($car_details->car_ad_id));
        $car_ad->save();

        return redirect(route('front.car_images', hashids_encode($car_details->car_ad_id)));
    }

    public function car_images($ad_id)
    {
        $data = [
            'title' => 'Car Images',
            'ad_id' => $ad_id,
        ];

        return view('front.pages.user_dashboard.vehicle_seeling.car_images')->with($data);
    }

    public function save_car_images(Request $request)
    {

        $rules = ['images' =>  'required|array|distinct|min:2'];
        $msg = [
            'images.min' => 'The car images must have at least 5 images.',
        ];
        $validator = Validator::make($request->all(), $rules, $msg );
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $ad_id = hashids_decode($request->ad_id);
        foreach ($request->images as $key => $value) {
                $car_image = new CarAdImage();

            $image = CommonHelpers::uploadSingleFile($value, 'front_assets/uploads/car_ads/');
            if (is_array($image)) {
                return response()->json($image);
            }

            if (file_exists($car_image->image)) {
				@unlink($car_image->image);
			}

            $car_image->car_ad_id = $ad_id;
            $car_image->image = $image;
            $car_image->save();
        }

        if ($car_image) {
            $car_ad = CarAd::find($ad_id);
            $car_ad->route = route('front.car_contact_details', $request->ad_id);
            $car_ad->save();
            $msg = [
				'success' => 'Images Successfully Uploaded.',
				'redirect' => route('front.car_contact_details', $request->ad_id),
			];

            return response()->json($msg);
        }
    }

    public function car_contact_details($ad_id)
    {
        $data = [
            'title' => 'Contact Details',
            'ad_id' => $ad_id
        ];

        return view('front.pages.user_dashboard.vehicle_seeling.contact_details')->with($data);
    }

    public function save_car_contact_details(Request $request)
    {
        if (isset($request->email)) {
            $email = $request->email;
        } else {
            $email = auth('user')->user()->email;
        }

        $car_ad_id = hashids_decode($request->ad_id);
        $contact_details = CarAdContactDetail::where('car_ad_id', $car_ad_id)->first();
        if (!isset($contact_details->id)) {
             $contact_details = new CarAdContactDetail();
        }

        $contact_details->car_ad_id = $car_ad_id;
        $contact_details->trade_name = $request->trade_name;
        $contact_details->contact_no = $request->contact_no;
        $contact_details->email = $email;
        $contact_details->post_code = $request->post_code;
        $contact_details->save();

        $car_ad = CarAd::find($car_ad_id);
        $car_ad->route = route('front.car_ad_package', $request->ad_id);
        $car_ad->save();

        return redirect(route('front.car_ad_package', $request->ad_id));
    }

    public function car_ad_package($ad_id)
    {
        $seller = CarAdDetail::where('car_ad_id',hashids_decode($ad_id))->first(['trade_seller','price']);
        $packages = [];
        if ($seller->trade_seller == "private") {
            if ($seller->price > 0 && $seller->price < 1001) {
                $packages[] = $ultimate = [
                    'pakg_name' => 'Ultimate',
                    'weeks' => 'Advertised until sold Free to rebook',
                    'price' => '12.47',
                    'desc' => 'Our best package - get all our great features to get the most presence and prominence to be seen by the most buyers.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                        2 => 'Showcase your vehicle with a YouTube video',
                        3 => 'Get ahead in search results. The higher the quality of your advert, the higher it will appear in search.',
                        4 => 'Advertise until sold - you will be able to re-book your advert for free, for as long as you like',
                    ],
                ];


                $packages[] = $premium = [
                    'pakg_name' => 'Premium',
                    'weeks' => '6 weeks',
                    'price' => '9.47',
                    'desc' => 'Our second best package - get most of our great features to be seen by more buyer sover a longer period of time.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                        2 => 'Showcase your vehicle with a YouTube video'
                    ],
                ];

                $packages[] = $standard = [
                    'pakg_name' => 'Standard',
                    'weeks' => '3 weeks',
                    'price' => '4.47',
                    'desc' => 'Our standard ad gets you more prominence than the basic ad.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                    ],
                ];

                $packages[] = $basic = [
                    'pakg_name' => 'Free to list',
                    'weeks' => '1 week',
                    'price' => 'FREE',
                    'desc' => 'Get your ad listed for free. Other adverts with more features will appear above yours.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                    ],
                ];
            }

            if ($seller->price > 1000 && $seller->price < 10001) {
                $packages[] = $ultimate = [
                    'pakg_name' => 'Ultimate',
                    'weeks' => 'Advertised until sold Free to rebook',
                    'price' => '39.97',
                    'desc' => 'Our best package - get all our great features to get the most presence and prominence to be seen by the most buyers.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                        2 => 'Showcase your vehicle with a YouTube video',
                        3 => 'Get ahead in search results. The higher the quality of your advert, the higher it will appear in search.',
                        4 => 'Advertise until sold - you will be able to re-book your advert for free, for as long as you like',
                    ],
                ];

                $packages[] = $premium = [
                    'pakg_name' => 'Premium',
                    'weeks' => '6 weeks',
                    'price' => '29.47',
                    'desc' => 'Our second best package - get most of our great features to be seen by more buyer sover a longer period of time.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                        2 => 'Showcase your vehicle with a YouTube video'
                    ],
                ];

                $packages[] = $standard = [
                    'pakg_name' => 'Standard',
                    'weeks' => '3 weeks',
                    'price' => '23.47',
                    'desc' => 'Our standard ad gets you more prominence than the basic ad.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                    ],
                ];

                $packages[] = $basic = [
                    'pakg_name' => 'Basic',
                    'weeks' => '2 weeks',
                    'price' => '18.47',
                    'desc' => 'Our most basic package - get your ad listed across desktop and mobile. Other adverts with more features will appear above yours.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                    ],
                ];
            }

            if ($seller->price > 10000) {
                $packages[] = $ultimate = [
                    'pakg_name' => 'Ultimate',
                    'weeks' => 'Advertised until sold Free to rebook',
                    'price' => '42.47',
                    'desc' => 'Our best package - get all our great features to get the most presence and prominence to be seen by the most buyers.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                        2 => 'Showcase your vehicle with a YouTube video',
                        3 => 'Get ahead in search results. The higher the quality of your advert, the higher it will appear in search.',
                        4 => 'Advertise until sold - you will be able to re-book your advert for free, for as long as you like',
                    ],
                ];

                $packages[] = $premium = [
                    'pakg_name' => 'Premium',
                    'weeks' => '6 weeks',
                    'price' => '32.47',
                    'desc' => 'Our second best package - get most of our great features to be seen by more buyer sover a longer period of time.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                        2 => 'Showcase your vehicle with a YouTube video'
                    ],
                ];

                $packages[] = $standard = [
                    'pakg_name' => 'Standard',
                    'weeks' => '3 weeks',
                    'price' => '24.97',
                    'desc' => 'Our standard ad gets you more prominence than the basic ad.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                    ],
                ];

                $packages[] = $basic = [
                    'pakg_name' => 'Basic',
                    'weeks' => '2 weeks',
                    'price' => '19.97',
                    'desc' => 'Our most basic package - get your ad listed across desktop and mobile. Other adverts with more features will appear above yours.',
                    'featured' => [
                        0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                        1 => 'Stand out with photos in search results',
                    ],
                ];
            }
        }
        if ($seller->trade_seller == "trade") {
            if ($seller->price > 0 && $seller->price < 1001) {
                $ult_price = '12.47';
                $ext_price = '8.97';
                $std_price = '7.47';
                $basic_price = '4.97';
            }

            if ($seller->price > 1000 && $seller->price < 2001) {
                $ult_price = '20.97';
                $ext_price = '15.47';
                $std_price = '12.47';
                $basic_price = '8.47';
            }

            if ($seller->price > 2000 && $seller->price < 3001) {
                $ult_price = '26.97';
                $ext_price = '19.97';
                $std_price = '15.97';
                $basic_price = '10.97';
            }

            if ($seller->price > 3000 && $seller->price < 5001) {
                $ult_price = '32.97';
                $ext_price = '24.47';
                $std_price = '19.47';
                $basic_price = '13.47';
            }

            if ($seller->price > 5000 && $seller->price < 7001) {
                $ult_price = '39.47';
                $ext_price = '29.97';
                $std_price = '23.47';
                $basic_price = '16.47';
            }

            if ($seller->price > 7000 && $seller->price < 10001) {
                $ult_price = '47.47';
                $ext_price = '35.97';
                $std_price = '28.47';
                $basic_price = '19.97';
            }

            if ($seller->price > 10000) {
                $ult_price = '49.97';
                $ext_price = '38.97';
                $std_price = '30.97';
                $basic_price = '21.47';
            }

            $packages[] = $ultimate = [
                'pakg_name' => 'Ultimate',
                'weeks' => '6 weeks',
                'price' => $ult_price,
                'featured' => [
                    0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                    1 => 'Stand out with photos in search results',
                    2 => 'Showcase your vehicle with a YouTube video',
                ],
            ];

            $packages[] = $extended = [
                'pakg_name' => 'Extended',
                'weeks' => '4 weeks',
                'price' => $ext_price,
                'featured' => [
                    0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                    1 => 'Stand out with photos in search results',
                    2 => 'Showcase your vehicle with a YouTube video',
                ],
            ];

            $packages[] = $standard = [
                'pakg_name' => 'Standard',
                'weeks' => '3 weeks',
                'price' => $std_price,
                'featured' => [
                    0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                    1 => 'Stand out with photos in search results',
                    2 => 'Showcase your vehicle with a YouTube video',
                ],
            ];

            $packages[] = $basic = [
                'pakg_name' => 'Basic',
                'weeks' => '2 weeks',
                'price' => $basic_price,
                'featured' => [
                    0 => 'Attract buyers - show off your vehicle is best features with up to 100 photos',
                    1 => 'Stand out with photos in search results',
                    2 => 'Showcase your vehicle with a YouTube video',
                ],
            ];
        }
        $data = [
            'title' => 'Car Advert Package',
            'ad_id' => $ad_id,
            'packages' => $packages,
        ];
        return view('front.pages.user_dashboard.vehicle_seeling.car_ad_package')->with($data);
    }

    public function save_car_ad_package(Request $request)
    {
        return redirect(route('front.car_payment_summary',['ad_id' => $request->ad_id, 'price' => $request->price]));
    }

    public function car_payment_summary(Request $request)
    {
        $data = [
            'title' => 'Car Payment Summary',
            'ad_id' => $request->ad_id,
            'price' => $request->price,
            'user_id' => hashids_encode(auth('user')->user()->id),
        ];
        return view('front.pages.user_dashboard.vehicle_seeling.car_payment_summary')->with($data);
    }

    public function save_car_payment_summary(Request $request)
    {
        $user_id = hashids_decode($request->user_id);
        $ad_id = hashids_decode($request->ad_id);
        $car_ad = CarAd::where('id', $ad_id)->where('user_id', $user_id)->where('status', '0')->first();
        if (!isset($car_ad->id)) {
            return redirect(route('front.vehacle_sale_summary'));
        }

        if ($request->amount == "FREE") {
            $payment = new CarAdPayment();
            $payment->user_id = $user_id;
            $payment->car_ad_id = $ad_id;
            $payment->package_id = null;
            $payment->amount = $request->amount == "FREE" ? 0 : '';
            $payment->transaction_date = date('Y-m-d');
            $payment->save();

            $car_ad->status = "1";
            $car_ad->save();

            return redirect(route('front.car_payment_success', $payment->hashid));
        }else{
            Stripe\Stripe::setApiKey(config('app.STRIPE_SECRET'));
            $charged = Stripe\Charge::create([
                "amount" => $request->amount * 100,
                "currency" => "gbp",
                "source" => $request->stripeToken,
                "description" => "This payment is car ad."
            ]);

            if ($charged->status == 'succeeded') {
                $payment = new CarAdPayment();
                $payment->user_id = $user_id;
                $payment->car_ad_id = $ad_id;
                $payment->package_id = null;
                $payment->transaction_id = $charged->id;
                $payment->amount = $charged->amount;
                $payment->currency = $charged->currency;
                $payment->transaction_date = date('Y-m-d');
                $payment->data = json_encode($charged);
                $payment->save();

                $car_ad->status = "1";
                $car_ad->save();

                return redirect(route('front.car_payment_success', $payment->hashid));
            } else {
                dd('Something Went Wronge.');
            }
        }



        return back();
    }

    public function car_payment_success($payment_id)
    {
        $data = [
            'title' => 'Car Payment Success',
        ];

        return view('front.pages.user_dashboard.vehicle_seeling.car_payment_success')->with($data);
    }

    public function get_response($reg)
    {
        $curl = curl_init();
        $url = 'https://api.checkcardetails.co.uk/vehicledata/vehicleregistration?apikey=bb97ee462240d41f098b9083a6808c10&vrm=' . $reg . '';
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function save_enquiry(Request $request)
    {

        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $ad_enquiry = new Enquiry();

        $ad_enquiry->user_id = auth('user')->user()->id;
        $ad_enquiry->car_ad_id = isset($request->car_ad_id) ? hashids_decode($request->car_ad_id) : null;
        $ad_enquiry->dealer_id = isset($request->dealer_id) ? hashids_decode($request->dealer_id) : null;
        $ad_enquiry->enquiry_type = isset($request->dealer_id) ? 'dealer' : 'ad';
        $ad_enquiry->first_name = $request->first_name;
        $ad_enquiry->last_name = $request->last_name;
        $ad_enquiry->email = $request->email;
        $ad_enquiry->ph_number = $request->ph_number;
        $ad_enquiry->message = $request->message;
        $ad_enquiry->save();

        $msg = [
            'success' => 'Your Enquiry is Successfully Send.',
            'reload' => true,
        ];

        return response()->json($msg);

    }
}
