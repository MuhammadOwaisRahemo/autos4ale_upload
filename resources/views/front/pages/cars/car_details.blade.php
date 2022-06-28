@extends('layouts.front_dashboardlight')
@section('page-css')
<style>
    .error{
        color: red;
    }
</style>
@endsection
@section('content')
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="slider van_detslider slider-for">
                        @foreach ($data->car_images as $value)
                            <div>
                                <img src="{{ check_file($value->image) }}" class="img-fluid"
                                    style="wid
                        736px; height:612px;">
                            </div>
                        @endforeach

                    </div>
                    <div class="slider van_navslider slider-nav">
                        @foreach ($data->car_images as $value)
                            <div>
                                <img src="{{ check_file($value->image) }}" class="img-fluid"
                                    style="width:106px; height:88px;">
                            </div>
                        @endforeach
                    </div>

                    {{-- <div class="slider_btm mt-4">
					<div class="col-12">
						<div class="row">
							<div class="col-md-6">
								<h1>Overview</h1>
								<p>21" DT ALLOYS + FIXED SUNROOF</p>
							</div>
							<div class="col-md-6">
								<div class="d-flex">
									<div class="me-3">
										<img src="{{ asset('front_assets') }}/images/miles.png" class="img-fluid">
									</div>
									<div>
										<h2 class="text-theme">23,958 miles</h2>
										<p>1,490 miles below average</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

                    <div class="description">
                        <h1>Description</h1>
                        <p>{!! $data->car_details->advert_text !!}</p>

                        {{-- <p>Vehicle registered: 13/12/2018</p> --}}

                        <p class="fw-bold">Extra Features</p>

                        <p>{!! $data->car_details->feature !!}</p>
                    </div>

                    <div class="other_detail">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Specifications
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $data->car_details->specification !!}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Running Costs
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $data->car_details->running_cost !!}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span>Basic History</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $data->car_details->basic_history !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car_details">
                        <h2 class="fw-bold car_name">{{ $data->car_details->ad_title ?? '' }}</h2>
                        {{-- <h4 class="car_year">2018 (68 reg)</h4> --}}
                        <p class="short_des">{{ $data->car_details->subtitle ?? '' }}</p>
                        <div class="d-flex">
                            <div>
                                <div class="car_price">
                                    <h3 class="text-theme fw-bold">{{ $data->car_details->price ?? '' }}</h3>
                                    <p class="fw-500">Close to market average</p>
                                </div>
                            </div>
                            <div class="ms-2">
                                <img src="{{ asset('front_assets') }}/images/price_img.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="car_detailsbtn text-center mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-theme">
                                        <img src="{{ asset('front_assets') }}/images/icons-contact.svg" class="img-fluid">
                                        <br>
                                        Call
                                    </a>
                                </li>

                                @if (!empty(auth('user')->user()->id))
                                    <li class="list-inline-item">
                                        <button type="button" class="btn btn-theme" data-toggle="modal"
                                            data-target="#car_ad_enquiry">
                                            <img src="{{ asset('front_assets') }}/images/sms.svg" class="img-fluid"> <br>
                                            Message
                                        </button>
                                    </li>

                                    <x-modals.car_ad_enquiry adId="{{$data->hashid}}"></x-modals.car_ad_enquiry>

                                <li class="list-inline-item">
                                    <a href="{{ route('front.chat.room-check',hashids_encode($data->user_id))}}", class="btn btn-theme">
                                        <img src="{{ asset('front_assets') }}/images/contact.svg" class="img-fluid"> <br>
                                        Chat
                                    </a>
                                </li>
                                @endif

                            </ul>
                        </div>

                        <div class="car_selardetail mt-4">
                            <h3 class="title_seller">About Seller</h3>

                            <img src="{{ asset('front_assets') }}/images/sellar_logo.jpg" class="img-fluid w-100">

                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <h4 class="text-theme">{{ $data->car_details->ad_title }}</h4>
                                </div>
                                <div class="text-center">
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
                            </div>

                            <div class="d-flex justify-content-between mt-1">
                                <div>
                                    <h4 class="text-theme">
                                        <a href="#" class="text-decoration-none"><img
                                                src="{{ asset('front_assets') }}/images/external-link.svg"
                                                class="img-fluid me-2" />Visit Site</a>
                                    </h4>
                                </div>
                                <div>
                                    <h4 class="text-theme">
                                        <a href="#" class="text-theme text-decoration-none">
                                            <img src="{{ asset('front_assets') }}/images/ios-call.svg"
                                                class="img-fluid me-2">
                                            {{ $data->car_contact_details->contact_no }}
                                        </a>
                                    </h4>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <h4 class="text-theme">
                                        <a href="#" class="text-decoration-none"><img
                                                src="{{ asset('front_assets') }}/images/map-pin.svg"
                                                class="img-fluid me-2" />Location Map</a>
                                    </h4>
                                </div>
                                <div>
                                    <h4 class="text-theme">
                                        <a href="#" class="text-theme text-decoration-none contact_phone">
                                            <img src="{{ asset('front_assets') }}/images/directions.svg"
                                                class="img-fluid me-2"> Get Direction
                                        </a>
                                    </h4>
                                </div>
                            </div>

                            <div class="extra_features">
                                <h4 class="features_title mt-3 mb-3">Extra features</h4>

                                {{-- <div class="d-flex justify-content-between">
								<div>
									<img src="{{ asset('front_assets') }}/images/suv.svg" class="img-fluid"> SUV
								</div>

								<div>
									<img src="{{ asset('front_assets') }}/images/fuel-size.svg" class="img-fluid"> 2.0L
								</div>

								<div>
									<img src="{{ asset('front_assets') }}/images/gear.svg" class="img-fluid"> Automatic
								</div>
							</div>

							<div class="d-flex justify-content-between mt-4">
								<div>
									<img src="{{ asset('front_assets') }}/images/door.svg" class="img-fluid"> 5 doors
								</div>

								<div>
									<img src="{{ asset('front_assets') }}/images/seat.svg" class="img-fluid"> 5 seats
								</div>

								<div>
									<img src="{{ asset('front_assets') }}/images/map.svg" class="img-fluid"> Full service history
								</div>
							</div> --}}

                                <div class="d-flex justify-content-between mt-4">
                                    <div>
                                        <img src="{{ asset('front_assets') }}/images/gas-pump.svg" class="img-fluid">
                                        {{ $data->fuel_type }}
                                    </div>

                                </div>

                                <h4 class="features_title mt-4 mb-3">{{ $data->car_details->ad_title }} reviews</h4>

                                <div class="car_review">
                                    <div class="d-flex">
                                        <div>
                                            <div class="from">
                                                By Our Experts
                                            </div>
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
                                            </ul>
                                        </div>

                                        <div>
                                            <a href="#"
                                                class="text-theme text-decoration-none mt-3 d-block ms-5 carreview_link">Read
                                                Review</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-4 related_cars">
                <div class="realted_carstitle">
                    <h2>Other cars from this seller</h2>
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('front_assets') }}/images/related.JPG" class="img-fluid w-100">
                    <h3 class="price text-theme">£1,595</h3>
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('front_assets') }}/images/related.JPG" class="img-fluid w-100">
                    <h3 class="price text-theme">£1,595</h3>
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('front_assets') }}/images/related.JPG" class="img-fluid w-100">
                    <h3 class="price text-theme">£1,595</h3>
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('front_assets') }}/images/related.JPG" class="img-fluid w-100">
                    <h3 class="price text-theme">£1,595</h3>
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
        $(".slider-for").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            fade: true,
            asNavFor: ".slider-nav",
        });
        $(".slider-nav").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: ".slider-for",
            dots: false,
            centerMode: true,
            focusOnSelect: true,
        });

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
                getAjaxRequests(url, param, 'post', function (param) {
                $("#enquiry_btn").attr('disabled', false);
                  },loader=true);
            })
        });
    </script>
@endsection
