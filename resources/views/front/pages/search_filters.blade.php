@extends('layouts.front_dashboardlight')

@section('content')

    <div class="container-fluid mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="car-listingleft">
                        <input type="hidden" value="{{ @$request->category }}" id="main_category">
                        <input type="hidden" value="{{ @$request->post_code }}"id="post_code">
                        <div class="text-center">
                            <h4 class="total_result fw-bold">{{ count($ads) }} cars for sale</h4>
                            <p class="text_color select_filter">1 filter selected</p>
                        </div>
                        <div class="saved_searchreset">
                            <div class="row">
                                <div class="col-md">
                                    <a href="#" class="text-theme"><i class="fa-solid fa-heart"></i> Saved Search</a>
                                </div>
                                <div class="col-md text-end">
                                    <a type="button" id="rest_search" class="text-theme"><i
                                            class="fa-solid fa-arrows-rotate"></i> Reset</a>
                                </div>
                            </div>
                        </div>

                        <div class="topbar-carlist bg-theme text-white mt-2">
                            My Saved searches <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <input type="text" class="form-control mt-2" value="WC2N5DU">
                        <select class="form-control mt-3">
                            <option>Distance (100m)</option>
                            <option>Distance (200m)</option>
                        </select>

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
                                id="option-1">
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

                        <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                            <select class="form-control">
                                <option>Milage</option>
                                <option>Distance (200m)</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="mdropdown-carlist mt-2 position-relative">
                            <label>Fuel Type</label>
                            <select class="form-control" id="fuel_type">
                                <option>Any</option>
                                @if (isset($fuel_type))
                                    @foreach ($fuel_type as $value)
                                        <option value="{{ $value->id }}"
                                            @if (!empty(@$request->fuel_type)) {{ $request->fuel_type == $value->fuel_type ? 'selected' : '' }} @endif
                                            id="fuel_type_id{{ $value->id }}" data-value="{{ $value->fuel_type }}">
                                            {{ $value->fuel_type }}</option>
                                    @endforeach
                                @endif
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
                            <select class="form-control" id="engine_size">
                                <option value="">Any</option>
                                @if (isset($engine_size))
                                    @foreach ($engine_size as $value)
                                        <option value="{{ $value->id }}"
                                            @if (!empty(@$request->engine_size)) {{ $request->engine_size == $value->engine_size ? 'selected' : '' }} @endif
                                            id="engine_size_id{{ $value->id }}"
                                            data-value="{{ $value->engine_size }}">
                                            {{ $value->engine_size }} cc</option>
                                    @endforeach
                                @endif
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
                            <select class="form-control" id="seller">
                                <option value="">Private & Trade</option>
                                <option value="">Any</option>
                                <option value="private"
                                    @if (!empty(@$request->seller)) {{ $request->seller == 'private' ? 'selected' : '' }} @endif>
                                    Private</option>
                                <option value="trade"
                                    @if (!empty(@$request->seller)) {{ $request->seller == 'trade' ? 'selected' : '' }} @endif>
                                    Trade</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                            <select class="form-control">
                                <option>Doors</option>
                                <option>Any</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

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

                        <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                            <select class="form-control">
                                <option>Seats</option>
                                <option>Any</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                            <select class="form-control">
                                <option>Accelertaion</option>
                                <option>Any</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                            <select class="form-control">
                                <option>Annual Tax</option>
                                <option>Any</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                            <select class="form-control">
                                <option>Drivetrain</option>
                                <option>Any</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                            <select class="form-control">
                                <option>Consumption</option>
                                <option>Any</option>
                            </select>
                            <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                        </div>

                        <div class="border btm_catcarlist mt-2 p-3 position-relative text-start">
                            <label class="d-block">CAT S/C/D/N</label>
                            <img src="{{ asset('front_assets') }}/images/chevron.png"
                                class="arrow_down position-absolute">
                            <div class="inner_contentcarlist mt-3">
                                <label class="check_container"> Include Cat S/C/D/N
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check_container"> Exclude Cat S/C/D/N
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check_container"> Only show Cat S/C/D/N
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div><br>

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
                        @foreach ($ads as $value)
                            <div class="col-12">
                                <div class="carlisting_item mt-4">
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
                                            <div class="col-md-7 pe-3">
                                                <a href="{{ route('front.cars.single_car_details', $value->hashid) }}"style="text-decoration: none">
                                                <h1 class="price text-theme">£{{ $value->car_details->price }}</h1>
                                                <h2 class="car_name">{{ $value->car_details->ad_title }}</h2>
                                                <p class="car_details">
                                                    {{ $value->car_details->subtitle }}
                                                </p>
                                                {{-- <p class="car_details">Buy & Finance Online</p> --}}
                                                <p class="car_specs">
                                                    {{ $value->register_date . ' | ' . $value->fuel_type }}
                                                </p>
                                                @if ($value->user->trade_seller == 1)
                                                    <p class="car_brand">Carzam <a
                                                        href="{{ route('front.ads_dealer_data',[ 'id' => $all_ads_by_trade, 'channel' => @$request->category]) }}"
                                                        class="text-theme text-decoration-none">See all {{ isset($category_id) ? $value->user->ads->where('category_id',$category_id)->where('status',1)->count() : $value->user->ads->count() }} cars</a></p>
                                                    <ul class="list-inline">
                                                @endif

                                                    {{-- <li class="list-inline-item">4.4 <span class="text-theme">( 5549
                                                            reviews )</span></li>
                                                    <li class="list-inline-item">Collect from Corby <span
                                                            class="text-theme">(74 miles)</span></li> --}}
                                                    <li class="list-inline-item last_logo">
                                                        <img src="{{ asset('front_assets') }}/images/carzam_logo.png"
                                                            class="img-fluid">
                                                    </li>
                                                </ul>
                                        </a>

                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

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
                        {{-- button pagination --}}
                        {{ $ads->withQueryString()->links('vendor.pagination.custombutton') }}
                        {{-- button pagination --}}

                        <div class="related mt-3">
                            <div class="col-12">
                                <h1 class="title_related">Latest brand new car deals</h1>
                                <div class="row">
                                    {{-- <div class="col-md-4">
									<a href="#">
										<img src="{{ asset('front_assets') }}/images/related.JPG" class="img-fluid mx-auto d-block">
									</a>
									<div class="border">
										<h4 class="mt-3">
											<a href="#" class="text-theme">
												£1,595
											</a>
										</h4>
										<h4>Jaguar F-Type 2.0i R-Dynamic Auto Euro 6 (s/s) 2dr</h4>
										<p class="mb-0 text_color">Coupe | Automatic | 2.0L | Petrol</p>
										<div class="btm-text fw-500">
											<p style="font-size: 16px;" class="text-theme">BRAND NEW - IN STOCK</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<a href="#">
										<img src="{{ asset('front_assets') }}/images/related.JPG" class="img-fluid mx-auto d-block">
									</a>
									<div class="border">
										<h4 class="mt-3">
											<a href="#" class="text-theme">
												£1,595
											</a>
										</h4>
										<h4>Jaguar F-Type 2.0i R-Dynamic Auto Euro 6 (s/s) 2dr</h4>
										<p class="mb-0 text_color">Coupe | Automatic | 2.0L | Petrol</p>
										<div class="btm-text fw-500">
											<p style="font-size: 16px;" class="text-theme">BRAND NEW - IN STOCK</p>
										</div>
									</div>
								</div>

								<div class="col-md-4">
									<a href="#">
										<img src="{{ asset('front_assets') }}/images/related.JPG" class="img-fluid mx-auto d-block">
									</a>
									<div class="border">
										<h4 class="mt-3">
											<a href="#" class="text-theme">
												£1,595
											</a>
										</h4>
										<h4>Jaguar F-Type 2.0i R-Dynamic Auto Euro 6 (s/s) 2dr</h4>
										<p class="mb-0 text_color">Coupe | Automatic | 2.0L | Petrol</p>
										<div class="btm-text fw-500">
											<p style="font-size: 16px;" class="text-theme">BRAND NEW - IN STOCK</p>
										</div>
									</div>
								</div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid grey_bg py-5 pt-3 mt-5">
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="top_content text-center">
                    <h4 class="fw-bold">Get The Latest Updates</h4>
                    <p>We’ll send you some updates and special offers</p>
                </div>

                <div class="newsletter mt-3">
                    <div class="col-md-8 mx-auto">
                        <div class="bg-white p-5">
                            <form>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter your email adress">
                                    <span class="input-group-text">
                                        <button type="button" class="btn btn-theme">Get Updates</button>
                                    </span>
                                </div>
                            </form>

                            <div class="text-center mt-4">
                                <p class="mb-0">Want to become member in my community? <a href="#"
                                        class="text-decoration-none text-theme">Join with us</a></p>
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
        $(".search_filter_data").click(function(e) {
            e.preventDefault();
            var main_category = $("#main_category").val();
            var post_code = $("#post_code").val();
            var make_id = $("#brand").val();
            var make_text = $("#brand_id" + make_id).data('value');
            var model_id = $("#model").val();
            var model_text = $("#model_id" + model_id).data('value');
            var fuel_type_id = $("#fuel_type").val();
            var fuel_type_text = $("#fuel_type_id" + fuel_type_id).data('value');
            var color_id = $("#color").val();
            var color_text = $("#color_id" + color_id).data('value');
            var seller = $("#seller").val();
            var price = $("#price").val();
            var engine_size_id = $("#engine_size").val();
            var engine_size_text = $("#engine_size_id" + engine_size_id).data('value');
            var min_year_id = $("#min_year").val();
            var min_year_text = $("#min_year_id" + min_year_id).data('value');
            var max_year_id = $("#max_year").val();
            var max_year_text = $("#max_year_id" + max_year_id).data('value');

            if ($('.search_year').is(":checked")) {
                var search_year = $("input[name='search_by_year']:checked").val();
            }

            var route = '{{ route('front.search_filter') }}?post_code=' + post_code + '&category=' +
                main_category;
            if (make_text) {
                route += '&make=' + make_text;
            }

            if (model_text) {
                route += '&model=' + model_text;
            }

            if (fuel_type_text) {
                route += '&fuel_type=' + fuel_type_text;
            }

            if (color_text) {
                route += '&color=' + color_text;
            }

            if (seller) {
                route += '&seller=' + seller;
            }

            if (price) {
                route += '&price=' + price;
            }

            if (engine_size_text) {
                route += '&engine_size=' + engine_size_text;
            }

            if (search_year == "brand_new") {
                route += '&search_by=' + search_year;
            }

            if (search_year == "year") {
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
            var post_code = $("#post_code").val();
            var route = '{{ route('front.search_filter') }}?post_code=' + post_code + '&category=' +
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
