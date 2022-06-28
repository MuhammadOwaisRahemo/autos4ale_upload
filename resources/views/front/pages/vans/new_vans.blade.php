@extends('layouts.front')
@section('content')
    <div class="container-fluid choose_section grey_bg">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto bg-white py-4 box_shadow">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="thum_img">
                                        <img src="{{ asset('front_assets') }}/images/car.svg" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="thum_content">
                                        <h4>In stock and available now</h4>
                                        <p>Deposit & withdraw pound</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="thum_img">
                                        <img src="{{ asset('front_assets') }}/images/price.png" class="img-fluid">
                                        <!-- <img src="{{ asset('front_assets') }}/images/price.svg" class="img-fluid"> -->
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="thum_content">
                                        <h4>Manufacturer warranty</h4>
                                        <p>Special offers for you</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="thum_img">
                                        <img src="{{ asset('front_assets') }}/images/trusted.svg" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="thum_content">
                                        <h4>Finance options</h4>
                                        <p>Saving your money</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid brands_section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="text-center top_content">
                    <h2 class="fw-bold">Browse by Brand</h2>
                    <p>Become part of our ever growing community</p>
                </div>
                <div class="col-12 mt-4">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="text-center brands">
                                <img src="{{ asset('front_assets') }}/images/ford.png" class="img-fluid mx-auto d-block">
                                <h4 class="mt-2">FORD</h4>
                                <p>View All 41,567 cars</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center brands">
                                <img src="{{ asset('front_assets') }}/images/volk.png" class="img-fluid mx-auto d-block">
                                <h4 class="mt-2">Volkswagen</h4>
                                <p>View All 41,567 cars</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center brands">
                                <img src="{{ asset('front_assets') }}/images/audi.png" class="img-fluid mx-auto d-block">
                                <h4 class="mt-2">AUDI</h4>
                                <p>View All 41,567 cars</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center brands">
                                <img src="{{ asset('front_assets') }}/images/mercedes.png"
                                    class="img-fluid mx-auto d-block">
                                <h4 class="mt-2">Mercedes-Benz</h4>
                                <p>View All 41,567 cars</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="advertise">
                <div class="row">
                    <div class="col-md-6">
                        <div class="right_img">
                            <img src="{{ asset('front_assets') }}/images/left_vanew.png" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newbest_choice">
                            <h1 class="fw-bold">Pre-haggled prices for you</h1>
                            <p class="text_color">There’s no need to negotiate. Find the van you want, it’ll have the
                                dealer’s discount displayed. Simple.</p>
                            <div class="row counter">
                                <div class="col-md-4">
                                    <h2 class="text-theme fw-bold">15</h2>
                                    <p class="text_color">New Vans <br> in stock</p>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="text-theme fw-bold">145</h2>
                                    <p class="text_color">Used Vans <br> in stock</p>
                                </div>
                                <div class="col-md-4">
                                    <h2 class="text-theme fw-bold">117</h2>
                                    <p class="text_color">Happy <br> buyer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid grey_bg py-5">
        <div class="container">
            <div class="row">
                <div class="text-center top_content">
                    <p>Electric Van Models</p>
                    <h2 class="fw-bold">Special offers for you</h2>
                </div>

                <div class="tab-content mt-4 cars_content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-newcar" role="tabpanel"
                        aria-labelledby="pills-newcar-tab">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($electric_vans as $value)
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="cars">
                                                <label class="badge bg-theme">{{ $value->car_details->price }}</label>
                                                <div class="car_img">
                                                    <img src="{{ check_file($value->car_images[0]->image) }}"
                                                        class="img-fluid mx-auto d-block" style="width: 237px;
                                                        height: 177px;">
                                                </div>
                                                <div class="car_content">
                                                    <h3 class="fw-500 mb-3">{{ $value->car_details->ad_title }}</h3>
                                                    {{-- <p><b>Max. Speed :</b> 58.865 miles</p>
                                      <p><b>Transmission :</b> Automatic</p> --}}
                                                    <p><b>Exterior :</b> {{ $value->color }}</p>
                                                </div>
                                                <a href="{{ route('front.cars.single_car_details', $value->hashid) }}"
                                                    class="btn btn-theme w-100 mt-2">Show Details</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-usercar" role="tabpanel" aria-labelledby="pills-usercar-tab">
                        used cars
                    </div>
                    <div class="tab-pane fade" id="pills-sportcar" role="tabpanel" aria-labelledby="pills-sportcar-tab">
                        Sport Cars
                    </div>
                    <div class="tab-pane fade" id="pills-luxury" role="tabpanel" aria-labelledby="pills-luxury-tab">
                        Luxury Cars
                    </div>
                </div>

            </div>

            <div class="row results mt-4 align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">3.389 result <a href="#" class="text-theme">Need a car ? choose type
                            car</a></p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="btn btn-theme show_cars">Show All Cars</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="advertise">
                <div class="row g-0">
                    <div class="col-md-7 bg-theme">
                        <div class="madvertise_text text-white">
                            <h3>Place an advert on <br> Auto4sale</h3>
                            <p>Get the price you deserve</p>
                            <form class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Regestration</label>
                                    <input type="text" class="form-control" placeholder="e.g LL58 JFK">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Current Milage</label>
                                    <input type="text" class="form-control" placeholder="e.g 50094">
                                </div>

                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-theme bg-white text-black">Create Advert</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right_img">
                            <img src="{{ asset('front_assets') }}/images/advertis_right.png" class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="container">
            <div class="row">
                <div class="text-center top_content">
                    <p>Van Reviews</p>
                    <h2 class="fw-bold">The latest from Auto4sale</h2>
                </div>
            </div>

            <div class="row cars_reviews mt-4">
                <div class="col-md-4">
                    <a href="#">
                        <img src="{{ asset('front_assets') }}/images/vanblog.png" class="img-fluid mx-auto d-block">
                    </a>
                    <h4 class="mt-3">
                        <a href="#">
                            Fiat Ducato Panel Van (2022 - ) Review
                        </a>
                    </h4>
                    <p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a
                        tried and tested platform.from a dealer.</p>
                    <div class="btm-text text-end">
                        <p>Expert review | 10 days ago</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <a href="#">
                        <img src="{{ asset('front_assets') }}/images/vanblog.png" class="img-fluid mx-auto d-block">
                    </a>
                    <h4 class="mt-3">
                        <a href="#">
                            Fiat Ducato Panel Van (2022 - ) Review
                        </a>
                    </h4>
                    <p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a
                        tried and tested platform.from a dealer.</p>
                    <div class="btm-text text-end">
                        <p>Expert review | 10 days ago</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <a href="#">
                        <img src="{{ asset('front_assets') }}/images/vanblog.png" class="img-fluid mx-auto d-block">
                    </a>
                    <h4 class="mt-3">
                        <a href="#">
                            Fiat Ducato Panel Van (2022 - ) Review
                        </a>
                    </h4>
                    <p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a
                        tried and tested platform.from a dealer.</p>
                    <div class="btm-text text-end">
                        <p>Expert review | 10 days ago</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="container-fluid grey_bg py-5 pt-3">
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
