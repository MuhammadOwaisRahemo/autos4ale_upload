@extends('layouts.front')
@section('content')
    <div class="container-fluid choose_section">
        <div class="container">
            <div class="row">
                <div class="text-center top_content">
                    <h2 class="fw-bold">Why choose us</h2>
                    <p>Become part of our ever growing community</p>
                </div>
                <div class="col-10 mx-auto mt-5">
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
                                        <h4>Variety Car of Brands</h4>
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
                                        <h4>Best Price Guarantee</h4>
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
                                        <h4>Trusted and Secure</h4>
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

    <div class="container-fluid grey_bg py-5">
        <div class="container">
            <div class="row">
                <div class="text-center top_content">
                    <p>Research Car Models</p>
                    <h2 class="fw-bold">Special offers for you</h2>
                </div>

                <div class="mx-auto d-flex mt-4 specialcar_tabs">

                    <ul class="nav nav-pills mb-3 mx-auto" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-newcar-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-newcar" type="button" role="tab" aria-controls="pills-newcar"
                                aria-selected="true">New Cars</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-usercar-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-usercar" type="button" role="tab" aria-controls="pills-usercar"
                                aria-selected="false">Used Cars</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-sportcar-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-sportcar" type="button" role="tab" aria-controls="pills-sportcar"
                                aria-selected="false">Sport Cars</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-luxury-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-luxury" type="button" role="tab" aria-controls="pills-luxury"
                                aria-selected="false">Luxury Cars</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content cars_content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-newcar" role="tabpanel"
                        aria-labelledby="pills-newcar-tab">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($new_cars as $value)
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
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($used_cars as $value)
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
                    <div class="tab-pane fade" id="pills-sportcar" role="tabpanel" aria-labelledby="pills-sportcar-tab">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($sport_cars as $value)
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
                    <div class="tab-pane fade" id="pills-luxury" role="tabpanel" aria-labelledby="pills-luxury-tab">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($luxry_cars as $value)
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
                </div>

            </div>

            <div class="row results mt-4 align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">3.389 result <a href="javascript:void(0);" class="text-theme">Need a car ?
                            choose type car</a></p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="javascript:void(0);" class="btn btn-theme show_cars">Show All Cars</a>
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
                            <form class="row" method="get" action="{{ route('front.check_login') }}">

                                <div class="col-md-6">
                                    <label class="form-label">Regestration</label>
                                    <input type="text" class="form-control" placeholder="e.g LL58 JFK" name="reg"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Current Milage</label>
                                    <input type="text" class="form-control" placeholder="e.g 50094" name="milage"
                                        required>
                                </div>

                                <div class="col-12 mt-3">
                                    <button class="btn btn-theme bg-white text-black">Create Advert</button>
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
            <!-- TrustBox widget - Micro Review Count -->
            <div id="trustbox" class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6a8b0d04a076446a9ad"
                data-businessunit-id="6298d8e6ed6eb51daaf8ed97" data-style-height="24px" data-style-width="100%"
                data-theme="light" data-without-reviews-preferred-string-id="2">
                <a href="https://uk.trustpilot.com/review/autos4sale.co.uk" target="_blank" rel="noopener">Trustpilot</a>
            </div>
            <!-- End TrustBox widget -->
            <!-- <div class="row">
                       <div class="text-center top_content">
                        <p>Car Reviews</p>
                        <h2 class="fw-bold">The latest from Auto4sale</h2>
                       </div>
                      </div>

                      <div class="row cars_reviews mt-4">
                       <div class="col-md-4">
                        <a href="javascript:void(0);">
                         <img src="{{ asset('front_assets') }}/images/review.png" class="img-fluid mx-auto d-block">
                        </a>
                        <h4 class="mt-3">
                         <a href="javascript:void(0);">
                          Highway code changes for self-driving cars
                         </a>
                        </h4>
                        <p class="mb-0">Proposed updates to Highway Code may allow drivers to use streaming services on the move, though phones remain out of bounds</p>
                        <div class="btm-text text-end">
                         <p>Expert review | 10 days ago</p>
                        </div>
                       </div>

                       <div class="col-md-4">
                        <a href="javascript:void(0);">
                         <img src="{{ asset('front_assets') }}/images/review.png" class="img-fluid mx-auto d-block">
                        </a>
                        <h4 class="mt-3">
                         <a href="javascript:void(0);">
                          Fiat Ducato Panel Van (2022 - ) Review
                         </a>
                        </h4>
                        <p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a tried and tested platform.from a dealer.and tested platform.from a dealer.</p>
                        <div class="btm-text text-end">
                         <p>Expert review | 10 days ago</p>
                        </div>
                       </div>

                       <div class="col-md-4">
                        <a href="javascript:void(0);">
                         <img src="{{ asset('front_assets') }}/images/review.png" class="img-fluid mx-auto d-block">
                        </a>
                        <h4 class="mt-3">
                         <a href="javascript:void(0);">
                          Fiat Ducato Panel Van (2022 - ) Review
                         </a>
                        </h4>
                        <p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a tried and tested platform.from a dealer.and tested platform.from a dealer.</p>
                        <div class="btm-text text-end">
                         <p>Expert review | 10 days ago</p>
                        </div>
                       </div>

                      </div>

                      <div class="row cars_reviews">
                       <div class="col-md-4">
                        <a href="javascript:void(0);">
                         <img src="{{ asset('front_assets') }}/images/review.png" class="img-fluid mx-auto d-block">
                        </a>
                        <h4 class="mt-3">
                         <a href="javascript:void(0);">
                          Highway code changes for self-driving cars
                         </a>
                        </h4>
                        <p class="mb-0">Proposed updates to Highway Code may allow drivers to use streaming services on the move, though phones remain out of bounds</p>
                        <div class="btm-text text-end">
                         <p>Expert review | 10 days ago</p>
                        </div>
                       </div>

                       <div class="col-md-4">
                        <a href="javascript:void(0);">
                         <img src="{{ asset('front_assets') }}/images/review.png" class="img-fluid mx-auto d-block">
                        </a>
                        <h4 class="mt-3">
                         <a href="javascript:void(0);">
                          Fiat Ducato Panel Van (2022 - ) Review
                         </a>
                        </h4>
                        <p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a tried and tested platform.from a dealer.and tested platform.from a dealer.</p>
                        <div class="btm-text text-end">
                         <p>Expert review | 10 days ago</p>
                        </div>
                       </div>

                       <div class="col-md-4">
                        <a href="javascript:void(0);">
                         <img src="{{ asset('front_assets') }}/images/review.png" class="img-fluid mx-auto d-block">
                        </a>
                        <h4 class="mt-3">
                         <a href="javascript:void(0);">
                          Fiat Ducato Panel Van (2022 - ) Review
                         </a>
                        </h4>
                        <p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a tried and tested platform.from a dealer.and tested platform.from a dealer.</p>
                        <div class="btm-text text-end">
                         <p>Expert review | 10 days ago</p>
                        </div>
                       </div>

                      </div> -->

        </div>
    </div>


    <div class="container-fluid py-4">
        <div class="container">
            <div class="row">
                <div class="text-center top_content">
                    <p>All the latest news for you</p>
                    <h2 class="fw-bold">The latest from Auto4sale</h2>
                </div>
            </div>

            <div class="row">
                <div class="social_icons mb-5">
                    <div class="icons">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-youtube"></i>
                                    <span>Youtube</span>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="fab fa-tiktok"></i>
                                    <span>Tiktok</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid grey_bg py-5">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-6">
                    <div class="top_content">
                        <h4 class="fw-bold">What My Clients Say</h4>
                        <p class="mb-0">Testimonials from our best clients</p>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <a href="javascript:void(0);" class="btn btn-theme view_alltest">View All Reviews</a>
                </div>
            </div>

            <div class="row">
                <div class="testimonials">
                    <div>
                        <div class="testimonials_item">
                            <p>"Aku seneng banget belanja disini penjualnya ramah banget melayani pembeli dengan sepenuh
                                hati untuk mendapatkan mobil sebagus ini"</p>
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/testimonial-1.png"
                                                class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="col-md-8">
                                            <h5>Cindy Syahriani</h5>
                                            <p>Jakarta, Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end rating">
                                    <i class="fas fa-star text-theme"></i> 4.9
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="testimonials_item">
                            <p>“Bagus pisan mang aslina euy mantap lumayan buat ngajak sang kekasih pergi ke tempat romantis
                                berdua bersamanya “</p>
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/testimonial-2.png"
                                                class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="col-md-8">
                                            <h5>Ali Ahmad Naser</h5>
                                            <p>Tasikmalaya, Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end rating">
                                    <i class="fas fa-star text-theme"></i> 4.9
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="testimonials_item">
                            <p>“Hade mang aslina euy mantap lah lumayan banget kanggo ngopi sareng cees pas doi lagi gamau
                                di ajak keluar buat ketemuan“</p>
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/testimonial-3.png"
                                                class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="col-md-8">
                                            <h5>Andre Odang</h5>
                                            <p>Sukabumi, Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end rating">
                                    <i class="fas fa-star text-theme"></i> 4.9
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="testimonials_item">
                            <p>"Aku seneng banget belanja disini penjualnya ramah banget melayani pembeli dengan sepenuh
                                hati untuk mendapatkan mobil sebagus ini"</p>
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front_assets') }}/images/testimonial-1.png"
                                                class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="col-md-8">
                                            <h5>Cindy Syahriani</h5>
                                            <p>Jakarta, Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end rating">
                                    <i class="fas fa-star text-theme"></i> 4.9
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-5 pt-5 pb-4">
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
                                <p class="mb-0">Want to become member in my community? <a
                                        href="javascript:void(0);" class="text-decoration-none text-theme">Join with us</a>
                                </p>
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
        $("#brand").change(function(e) {
            e.preventDefault();
            var brand_id = $(this).val();
            if (brand_id) {
                $.ajax({
                    type: "get",
                    url: "{{ route('front.cars.get_models') }}",
                    data: {
                        brand_id: brand_id
                    },
                    dataType: "json",
                    success: function(res) {
                        $("#model").removeAttr('disabled', false);
                        $("#model").html(res.html);
                    }
                });
            }
            $("#model").prop('disabled', true);
            $("#model").html('<option><strong>Model</strong></option>');
        });
    </script>

    <script>
        $(".search_filter_data").click(function (e) {
            e.preventDefault();
            var main_category = $("#main_category").val();
            var post_code = $("#post_code").val();
            var make_id = $("#brand").val();
            var model_id = $("#model").val();
            var make_text = $("#brand_id"+make_id).data('value');
            var model_text = $("#model_id"+model_id).data('value');

            var route = '{{ route("front.search_filter") }}?post_code='+post_code+'&category='+main_category;
             if (make_text) {
                route += '&make='+ make_text;
            }if(model_text){
                route += '&model='+ model_text;
            }

            window.location.href = route;

        });
    </script>
@endsection
