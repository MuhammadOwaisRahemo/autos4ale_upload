@extends('layouts.front_dashboardlight')
@section('page-css')
    <style>
        .error {
            color: red;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid mt-4">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <img src="{{ check_file($trade_details->trade_logo) }}" class="img-fluid w-100"
                        style="width: 1296px; height: 291px;">
                </div>

                <div class="col-12 mt-4  mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dealer_name">
                                <h4>{{ $trade_details->trade_name }}</h4>
                            </div>

                            <div class="car_selardetail">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </li>
                                    <li class="list-inline-item">4.8</li>
                                </ul>
                                <p>108 Reviews</p>
                            </div>
                            @if (!empty(auth('user')->user()->id))
                            <a href="#" class="btn btn-theme py-2 px-3" data-toggle="modal"
                                data-target="#car_ad_enquiry">Equip Now</a>
                            <x-modals.car_ad_enquiry dealerId="{{ $trade_details->hashid }}"></x-modals.car_ad_enquiry>
                            @endif
                        </div>
                        <div class="col-md-4 ms-auto">
                            @auth
                            <div class="car_detailsbtn text-center mt-2">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-theme">
                                            <img src="{{ asset('front_assets') }}/images/icons-contact.svg"
                                                class="img-fluid"> <br>
                                            Call
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-theme">
                                            <img src="{{ asset('front_assets') }}/images/sms.svg" class="img-fluid"> <br>
                                            Message
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-theme">
                                            <img src="{{ asset('front_assets') }}/images/contact.svg" class="img-fluid">
                                            <br>
                                            Chat
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @endauth

                        </div>
                    </div>

                    <div class="row">
                        <div class="search_catbox mt-5 position-relative">
                            <div class="row">
                                <div class="col-md-5">
                                    <h3 class="fw-bold">Get in touch</h3>
                                    <p>{{ $trade_details->location . ',' . $trade_details->address . ',' . $trade_details->country }}
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <h3 class="fw-bold">Website</h3>
                                    <p>
                                        <a href="{{ $trade_details->website_url }}"
                                            class="text-theme">{{ $trade_details->website_url }}</a>
                                    </p>
                                </div>
                                {{-- <div class="col-md-4">
								<h3 class="fw-bold">Opening hours</h3>
								<p>Sunday 10:00pm - 12:00am</p>
								<p>Sunday 10:00pm - 12:00am</p>
								<p>Sunday 10:00pm - 12:00am</p>
								<p>Sunday 10:00pm - 12:00am</p>
							</div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-listingleft">
                        <div class="text-center">
                            <h4 class="total_result fw-bold">{{ count($ads) }} cars for sale</h4>
                            <p class="text_color select_filter">1 filter selected</p>
                        </div>
                        <div class="saved_searchreset">
                            <div class="row">
                                <div class="col-md">
                                    <!-- <a href="#" class="text-theme"><i class="fa-solid fa-heart"></i> Saved Search</a> -->
                                </div>
                                <div class="col-md text-end">
                                    <a href="#" id="rest_search" class="text-theme"><i
                                            class="fa-solid fa-arrows-rotate"></i> Reset</a>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="topbar-carlist bg-theme text-white mt-2">
          My Saved searches <i class="fa-solid fa-magnifying-glass"></i>
         </div> -->

                        <!-- <input type="text" class="form-control mt-2" value="WC2N5DU"> -->

                        <!-- <select class="form-control mt-3">
          <option>Distance (100m)</option>
          <option>Distance (200m)</option>
         </select> -->
                        <input type="hidden" value="{{ @$request->channel }}" id="main_category">
                        <input type="hidden" value="{{ @$request->id }}" id="id">
                        <div class="mdropdown-carlist mt-3 position-relative">
                            <label>Make</label>
                            <select class="form-control" id="brand" class="filter_class_change">
                                <option>Any</option>
                                @foreach ($make as $value)
                                    <option value="{{ $value->brand->id }}"
                                        @if (!empty(@$request->make)) {{ $request->make == $value->brand->name ? 'selected' : '' }} @endif
                                        id="brand_id{{ $value->brand->id }}" data-value="{{ $value->brand->name }}">
                                        {{ $value->brand->name }}</option>
                                @endforeach
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="mdropdown-carlist mt-2 position-relative">
                            <label>Model</label>
                            <select class="form-control" id="model">
                                <option>Any</option>
                                @if (isset($model))
                                    @foreach ($model as $value)
                                        <option value="{{ $value->id }}"
                                            @if (!empty(@$request->model)) {{ $request->model == $value->name ? 'selected' : '' }} @endif
                                            id="model_id{{ $value->id }}" data-value="{{ $value->name }}">
                                            {{ $value->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="mdropdown-carlist mt-2 position-relative">
                            <label>Model Variant</label>
                            <select class="form-control">
                                <option>Any</option>
                                <option>TOYOTA</option>
                                <option>HONDA</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>


                        <div class="mdropdown-carlist mt-2 position-relative">
                            <label>Price</label>
                            <select class="form-control" id="price">
                                <option value="">Any to Any</option>
                                <option value="500 to 1000"
                                    @if (!empty($request->price)) {{ $request->price == '500 to 1000' ? 'selected' : '' }} @endif>
                                    500 to 1000</option>
                                <option value="1000 to 2000"
                                    @if (!empty($request->price)) {{ $request->price == '1000 to 2000' ? 'selected' : '' }} @endif>
                                    1000 to 2000</option>
                                <option value="2000 to 3000"
                                    @if (!empty($request->price)) {{ $request->price == '2000 to 3000' ? 'selected' : '' }} @endif>
                                    2000 to 3000</option>
                                <option value="3000 to 4000"
                                    @if (!empty($request->price)) {{ $request->price == '3000 to 4000' ? 'selected' : '' }} @endif>
                                    3000 to 4000</option>
                                <option value="5000 to 6000"
                                    @if (!empty($request->price)) {{ $request->price == '5000 to 6000' ? 'selected' : '' }} @endif>
                                    5000 to 6000</option>
                                <option value="6000 to 7000"
                                    @if (!empty($request->price)) {{ $request->price == '6000 to 7000' ? 'selected' : '' }} @endif>
                                    6000 to 7000</option>
                                <option value="8000 to 9000"
                                    @if (!empty($request->price)) {{ $request->price == '8000 to 9000' ? 'selected' : '' }} @endif>
                                    8000 to 9000</option>
                                <option value="10000 to 20000"
                                    @if (!empty($request->price)) {{ $request->price == '10000 to 20000' ? 'selected' : '' }} @endif>
                                    10000 to 20000</option>
                                <option value="20000 to 100000"
                                    @if (!empty($request->price)) {{ $request->price == '20000 to 100000' ? 'selected' : '' }} @endif>
                                    20000 to 100000</option>
                                <option value="100000 to 2000000"
                                    @if (!empty($request->price)) {{ $request->price == '100000 to 2000000' ? 'selected' : '' }} @endif>
                                    100000 to 2000000</option>
                                <option value="2000000 to 5000000"
                                    @if (!empty($request->price)) {{ $request->price == '2000000 to 5000000' ? 'selected' : '' }} @endif>
                                    2000000 to 5000000</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="main_option d-flex text-center mt-4">
                            <input type="radio" name="search_by_year"
                                {{ $request->search_by == 'year' ? 'checked' : '' }} value="year" class="search_year"
                                id="option-1" checked>
                            <input type="radio" name="search_by_year" value="brand_new" class="search_year"
                                {{ $request->search_by == 'brand_new' ? 'checked' : '' }} id="option-2">
                            <label for="option-1" class="option option-1">
                                <span>Year</span>
                            </label>
                            <label for="option-2" class="option option-2">
                                <span>Brand New</span>
                            </label>
                        </div>

                        <div class="search_by_year">
                            <div class="mdropdown-carlist mt-2 position-relative">
                                <label>Min</label>
                                <select class="form-control" id="min_year">
                                    <option>Any</option>
                                    @if (isset($min_year))
                                        @foreach ($min_year as $value)
                                            <option value="{{ $value->id }}"
                                                @if (!empty(@$request->from)) {{ $request->from == $value->register_date ? 'selected' : '' }} @endif
                                                id="min_year_id{{ $value->id }}"
                                                data-value="{{ $value->register_date }}">
                                                {{ $value->register_date }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                            </div>

                            <div class="mdropdown-carlist mt-2 position-relative">
                                <label>Max</label>
                                <select class="form-control" id="max_year">
                                    <option>Any</option>
                                    @if (isset($max_year))
                                        @foreach ($max_year as $value)
                                            <option value="{{ $value->id }}"
                                                @if (!empty(@$request->to)) {{ $request->to == $value->register_date ? 'selected' : '' }} @endif
                                                id="max_year_id{{ $value->id }}"
                                                data-value="{{ $value->register_date }}">
                                                {{ $value->register_date }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                            </div>
                        </div>

                        <!-- <div class="mdropdown-carlist2 mt-2 position-relative text-start">
          <select class="form-control">
           <option>Milage</option>
           <option>Distance (200m)</option>
          </select>
          <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
         </div>

         <div class="mdropdown-carlist2 mt-2 position-relative text-start">
          <select class="form-control">
           <option>Fuel Type</option>
           <option>Any</option>
          </select>
          <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
         </div>

         <div class="mdropdown-carlist2 mt-2 position-relative text-start">
          <select class="form-control">
           <option>Body Type</option>
           <option>Any</option>
          </select>
          <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
         </div>

         <div class="mdropdown-carlist mt-2 position-relative">
          <label>Engine Size</label>
          <select class="form-control">
           <option>Any</option>
           <option>500</option>
           <option>1000</option>
          </select>
          <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
         </div>

         <div class="mdropdown-carlist2 mt-2 position-relative text-start">
          <select class="form-control">
           <option>Engine Power</option>
           <option>Any</option>
          </select>
          <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
         </div>

         <div class="mdropdown-carlist2 mt-2 position-relative text-start">
          <select class="form-control">
           <option>Private & Trade</option>
           <option>Any</option>
          </select>
          <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
         </div>

         <div class="mdropdown-carlist2 mt-2 position-relative text-start">
          <select class="form-control">
           <option>Doors</option>
           <option>Any</option>
          </select>
          <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
         </div> -->


                        <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                            <select class="form-control" id="color">
                                <option>Colors</option>
                                <option>Any</option>
                                @if (isset($color))
                                    @foreach ($color as $value)
                                        <option value="{{ $value->id }}"
                                            @if (!empty(@$request->color)) {{ $request->color == $value->color ? 'selected' : '' }} @endif
                                            id="color_id{{ $value->id }}" data-value="{{ $value->color }}">
                                            {{ $value->color }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>
                        <div class=" mdropdown-carlist2 mt-2 position-relative text-start"
                        style="float: right !important;">
                        <button type="button"
                            class="btn btn-theme fw-500 search_btn search_filter_data">Search</button>
                    </div><br>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right_carlisting">
                        <div class="top_sorting">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        {{-- arrow button pagination --}}
                                        {{ $ads->withQueryString()->links('vendor.pagination.custom_arow') }}
                                        {{-- arrow button pagination --}}
                                        </nav>
                                    </div>
                                    <div class="col-md-6 text-end position-relative">
                                        <div class="sorting_dropdown">
                                            <select class="form-control">
                                                <option>Sort By</option>
                                                <option>Sort By</option>
                                                <option>Sort By</option>
                                                <option>Sort By</option>
                                            </select>
                                            <img src="{{ asset('front_assets') }}/images/chevron.png"
                                                class="arrow_down position-absolute">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            @forelse ($ads as $value)
                                <div class="carlisting_item mt-2">
                                    <div class="row">

                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-8 p-0">
                                                    <!-- <div class="row"> -->
                                                    <img src="{{ check_file($value->car_images[0]->image) }}"
                                                        class="img-fluid" style="border: 1px solid #fff">
                                                    <!-- </div> -->
                                                </div>
                                                <div class="col-md-4 p-0">
                                                    <!-- <div class="row"> -->
                                                    <img src="{{ check_file($value->car_images[1]->image) }}"
                                                        class="img-fluid" style="border: 1px solid #fff">
                                                    <img src="{{ check_file($value->car_images[2]->image) }}"
                                                        class="img-fluid" style="border: 1px solid #fff">
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 pe-3 ps-md-0">
                                            <a
                                                href="{{ route('front.cars.single_car_details', $value->hashid) }}"style="text-decoration: none">
                                                <h1 class="price text-theme">£{{ $value->car_details->price }}</h1>
                                                <h2 class="car_name">{{ $value->car_details->ad_title }}</h2>
                                                <p class="car_details">
                                                    {{ $value->car_details->subtitle }}
                                                </p>
                                                {{-- <p class="car_details">Buy & Finance Online</p> --}}
                                                <p class="car_specs">
                                                    {{ $value->register_date . ' | ' . $value->fuel_type }}</p>

                                                <p class="car_brand"><a href="#"
                                                        class="text-theme text-decoration-none">{{$trade_details->trade_name}} See all {{count($ads)}} cars</a></p>
                                                <ul class="list-inline">
                                                    {{-- <li class="list-inline-item">4.4 <span class="text-theme">( 5549
                                                            reviews )</span></li>

                                                    <li class="list-inline-item">Collect from Corby <span
                                                            class="text-theme">(74 miles)</span></li> --}}

                                                    <li class="list-inline-item last_logo">
                                                        <img src="{{ check_file($trade_details->trade_logo) }}"
                                                        class="img-fluid" style="width: 113px; height:32px;">
                                                    </li>
                                                </ul>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <center>
                                    <h4>Ads Not Found</h4>
                                </center>
                            @endforelse


                            {{-- <div class="carlisting_item mt-2">
							<div class="row">
								<div class="col-md-5">
									<img src="{{ asset('front_assets') }}/images/car_list.png" class="img-fluid">
								</div>
								<div class="col-md-7 pe-3 ps-md-0">
									<h1 class="price text-theme">£ 234,00</h1>
									<h2 class="car_name">Jaguar XE</h2>
									<p class="car_details">
										R-SPORT with £4005 factory Fitted Options 2.0 4dr
									</p>
									<p class="car_details">Buy & Finance Online</p>
									<p class="car_specs">2017 (17 reg) | Saloon 39,492 miles 2.0L | 180PS | Manual | Diesel 1 owner | Part service history | ULEZ</p>

									<p class="car_brand">Carzam <a href="#" class="text-theme text-decoration-none">See all 1241 cars</a></p>
									<ul class="list-inline">
										<li class="list-inline-item">4.4 <span class="text-theme">( 5549 reviews )</span></li>

										<li class="list-inline-item">Collect from Corby <span class="text-theme">(74 miles)</span></li>

										<li class="list-inline-item last_logo">
											<img src="{{ asset('front_assets') }}/images/carzam_logo.png" class="img-fluid">
										</li>
									</ul>
								</div>
							</div>
						</div> --}}
                        </div>

                        {{-- button pagination --}}
                        {{ $ads->withQueryString()->links('vendor.pagination.custombutton') }}
                        {{-- button pagination --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid grey_bg py-5">
        <div class="container">
            <div class="reviews">
                <div class="row">
                    <div class="col-md-4">
                        <div class="customer_review">
                            <h1 class="fw-bold">2 customer reviews</h1>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item text-theme">
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li class="list-inline-item text-theme">
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li class="list-inline-item text-theme">
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li class="list-inline-item text-theme">
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li class="list-inline-item text-theme">
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </li>
                                <li class="list-inline-item text_color">5 out of 5</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 review_progress">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-end pe-0">
                                <div class="text_color">
                                    5 Star
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div class="progress-bar w-100" role="progressbar"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="end_text fw-bold">
                                    100%
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mt-2">
                            <div class="col-md-2 text-end pe-0">
                                <div class="text_color">
                                    4 Star
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="end_text fw-bold">
                                    0%
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mt-2">
                            <div class="col-md-2 text-end pe-0">
                                <div class="text_color">
                                    3 Star
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="end_text fw-bold">
                                    0%
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mt-2">
                            <div class="col-md-2 text-end pe-0">
                                <div class="text_color">
                                    2 Star
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="end_text fw-bold">
                                    0%
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mt-2">
                            <div class="col-md-2 text-end pe-0">
                                <div class="text_color">
                                    1 Star
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="end_text fw-bold">
                                    0%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="top_sorting mt-3">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6 text-end position-relative">
                            <div class="sorting_dropdown">
                                <select class="form-control">
                                    <option>Sort By</option>
                                    <option>Sort By</option>
                                    <option>Sort By</option>
                                    <option>Sort By</option>
                                </select>
                                <img src="{{ asset('front_assets') }}/images/chevron.png"
                                    class="arrow_down position-absolute">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="user_review">
                        <h3>Mrs Amanda Fenton <i class="fa-solid fa-circle-check text-theme ms-2"></i></h3>
                        <p class="text_color ago_days">23 Days ago</p>
                        <p class="author_name">Stratstone Mayfair</p>
                        <p class="review">Stratstone Mayfair Range Rover evoque r dynamic se Dealership was very helpful
                            with all questions & queries. Moshin ahmed Salesman was very Knowledgeable and delivered me a
                            absolutely Lovely car. communication was great by email & phone. Moshin was very polite and
                            pleasure to deal with, a great assist to stratstone . Handover of the car was quick & easy and
                            drove away in a absolutely lovely car .</p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="user_review">
                        <h3>Mrs Amanda Fenton <i class="fa-solid fa-circle-check text-theme ms-2"></i></h3>
                        <p class="text_color ago_days">23 Days ago</p>
                        <p class="author_name">Stratstone Mayfair</p>
                        <p class="review">Stratstone Mayfair Range Rover evoque r dynamic se Dealership was very helpful
                            with all questions & queries. Moshin ahmed Salesman was very Knowledgeable and delivered me a
                            absolutely Lovely car. communication was great by email & phone. Moshin was very polite and
                            pleasure to deal with, a great assist to stratstone . Handover of the car was quick & easy and
                            drove away in a absolutely lovely car .</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid faq_section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="text-center top_content">
                        <h2 class="fw-bold">Your questions answered</h2>
                        <p>Keep your vehicle description short and simple. Call out optional extras that other similar cars
                            may not have. And don’t forget to mention full-service history if you have it.</p>
                    </div>

                    <div class="mt-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Why sell my car with Auto4sale?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text_color">
                                            With Auto4sale, you’re twice as likely to sell your car within a week. We also
                                            have more options than anywhere else to sell your car, so you are in control: 1.
                                            Instant Cash offer – The fastest way to sell your car. Get cash directly from
                                            Auto4sale and have the car picked up from your driveway within 48hrs 2. Part
                                            Exchange – The easy way to part exchange your old car for new one 3. Create an
                                            advert – You are in full control with your own sale. You can create and upload
                                            your advert in just three steps, and the size of our audience means you’ll get
                                            your car in front of more buyers than on any other site.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What paperwork do I need to sell my car?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text_color">When you sell your car, you’ll need to hand over the car’s
                                            handbook, the service logbook (plus receipts) and, if the car is over three
                                            years old, the MOT certificate. Buyers may also appreciate older MOT
                                            certificates and maintenance receipts. After you’ve sold the car, you’ll need a
                                            receipt with the date, price, registration number, make and model featured.
                                            You’ll also need your (and the buyer’s) name and address. You’ll need to tell
                                            the DVLA the car has been sold. If your car has a V5C (registration document)
                                            then fill in the bottom and send this to the DVLA. You’ll need to give the top
                                            part to the buyer alongside other paperwork.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Where can I sell my car?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text_color">
                                            There are plenty of places to sell your old car. You could sell it directly to a
                                            dealership or auction house, or you can sell it online. If you’ve got the time
                                            to wait for the right buyer, selling your car privately on a site like Auto4sale
                                            can earn you more money. If you’re looking for someone to buy your car for cash,
                                            Instant Offer is a great option and one of the fastest ways to sell your car.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        What is my car worth?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text_color">
                                            If you’ve sold a car before, you’ll know you can get wildly different quotes
                                            from competing sites and dealerships. Auto4sale free car valuation tool gives
                                            you the right guide price. We combine data from thousands of live adverts and
                                            dealer websites, plus values from car auctions, and ex-fleet and leasing
                                            vehicles. As our guide price represents the entire market and our data is
                                            updated daily, your quote is fair, priced to sell, and accurate. We’ll also give
                                            you a part-exchange price, an instant offer and a private sale price, so you can
                                            decide how you want to sell your car.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        How much can I sell it for?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text_color">
                                            A car valuation will tell you exactly how much you can sell your car for. To get
                                            the best price for your car, make sure it’s clean and in good working order.
                                            Scuffs and scratches can knock the price down, so be realistic about the car’s
                                            condition and see whether it’s worth paying for repairs. A full-service history
                                            (where you’ve had a service every year, or within its set mileage) can fetch a
                                            higher price too. Other factors can affect a car’s price. Some make models are
                                            more desirable than others, and a car’s age and mileage will also affect the
                                            final offer. Older cars with higher mileage tend to sell for less, though
                                            remember the depreciation curve of new cars means they lose most of their value
                                            in the first few years.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Why sell my car with Auto4sale?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text_color">
                                            With Auto4sale, you’re twice as likely to sell your car within a week. We also
                                            have more options than anywhere else to sell your car, so you are in control: 1.
                                            Instant Cash offer – The fastest way to sell your car. Get cash directly from
                                            Auto4sale and have the car picked up from your driveway within 48hrs 2. Part
                                            Exchange – The easy way to part exchange your old car for new one 3. Create an
                                            advert – You are in full control with your own sale. You can create and upload
                                            your advert in just three steps, and the size of our audience means you’ll get
                                            your car in front of more buyers than on any other site.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        What paperwork do I need to sell my car?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="text_color">
                                            When you sell your car, you’ll need to hand over the car’s handbook, the service
                                            logbook (plus receipts) and, if the car is over three years old, the MOT
                                            certificate. Buyers may also appreciate older MOT certificates and maintenance
                                            receipts.
                                        </p>

                                        <p class="text_color">
                                            After you’ve sold the car, you’ll need a receipt with the date, price,
                                            registration number, make and model featured. You’ll also need your (and the
                                            buyer’s) name and address.
                                        </p>

                                        <p class="text_color">
                                            You’ll need to tell the DVLA the car has been sold. If your car has a V5C
                                            (registration document) then fill in the bottom and send this to the DVLA.
                                            You’ll need to give the top part to the buyer alongside other paperwork.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            validations = $(".ajaxForm").validate();
            $('.ajaxForm').submit(function(e) {
                e.preventDefault();
                validations = $(".ajaxForm").validate();
                if (validations.errorList.length != 0) {
                    return false;
                }
                var url = $(this).attr('action');
                $("#enquiry_btn").attr('disabled', true);
                var param = $(".ajaxForm").serializeArray()
                getAjaxRequests(url, param, 'post', function(param) {
                    $("#enquiry_btn").attr('disabled', false);
                }, loader = true);
            })
        });

        $(".search_filter_data").click(function(e) {
            e.preventDefault();
            var main_category = $("#main_category").val();
            var dealer_id = $("#id").val();
            var make_id = $("#brand").val();
            var make_text = $("#brand_id" + make_id).data('value');
            var model_id = $("#model").val();
            var model_text = $("#model_id" + model_id).data('value');
            var color_id = $("#color").val();
            var color_text = $("#color_id" + color_id).data('value');
            var price = $("#price").val();
            var min_year_id = $("#min_year").val();
            var min_year_text = $("#min_year_id" + min_year_id).data('value');
            var max_year_id = $("#max_year").val();
            var max_year_text = $("#max_year_id" + max_year_id).data('value');

            if ($('.search_year').is(":checked")) {
                var search_year = $("input[name='search_by_year']:checked").val();
            }

            var route = '{{ route('front.ads_dealer_data') }}?id='+dealer_id+'&channel=' +
                main_category;
            if (make_text) {
                route += '&make=' + make_text;
            }

            if (model_text) {
                route += '&model=' + model_text;
            }

            if (color_text) {
                route += '&color=' + color_text;
            }

            if (price) {
                route += '&price=' + price;
            }

            if (search_year == "brand_new") {
                route += '&search_by=' + search_year;
            }

            if (search_year == "year" && min_year_text || max_year_text) {
                route += '&search_by=' + search_year;
                if (min_year_text) {
                    route += '&from=' + min_year_text;
                }
                if (max_year_text) {
                    route += '&to=' + max_year_text;
                }
            }
            window.location.href = route;
        });

        $("#rest_search").click(function(e) {
            e.preventDefault();
            var main_category = $("#main_category").val();
            var dealer_id = $("#id").val();
            var route = '{{ route('front.ads_dealer_data') }}?id='+dealer_id+'&channel=' +
                main_category;
            window.location.href = route;
        });

        $(".search_year").click(function() {
            var value = $(this).val();
            if (value == 'year') {
                $("#option-1").attr('checked', true);
                $("#option-2").attr('checked', false);
                $(".search_by_year").removeClass('d-none');
            } else {
                $("#option-1").attr('checked', false);
                $("#option-2").attr('checked', true);
                $(".search_by_year").addClass('d-none');
            }
        });
    </script>
@endsection
