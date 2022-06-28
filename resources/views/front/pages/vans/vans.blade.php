@extends('layouts.front')
@section('content')
    <div class="container-fluid guides_section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="text-center top_content">
                    <h2 class="fw-bold">Guides to buying a used car</h2>
                </div>
                <div class="col-12 mt-5">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="text-center guid">
                                <img src="{{ asset('front_assets') }}/images/fuel.svg" class="img-fluid mx-auto d-block">
                                <h4 class="mt-2">Thinking of a part exchange?</h4>
                                <p>We’ll send the details of you and your van to the dealer.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center guid">
                                <img src="{{ asset('front_assets') }}/images/history.svg"
                                    class="img-fluid mx-auto d-block">
                                <h4 class="mt-2">Find a Local Dealer</h4>
                                <p>Read what customers say about buying from a dealer.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center guid">
                                <img src="{{ asset('front_assets') }}/images/finances.svg"
                                    class="img-fluid mx-auto d-block">
                                <h4 class="mt-2">Van Finances and Loans</h4>
                                <p>Learn what to do before, during and after your test drive.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center guid">
                                <img src="{{ asset('front_assets') }}/images/tools.svg" class="img-fluid mx-auto d-block">
                                <h4 class="mt-2">Vehicle check</h4>
                                <p>Use our van history checker to get a detailed and nstant 26 point report.</p>
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
                    <p>Used Van Models</p>
                    <h2 class="fw-bold">Special offers for you</h2>
                </div>

                <div class="tab-content mt-4 cars_content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-newcar" role="tabpanel"
                        aria-labelledby="pills-newcar-tab">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($used_vans as $value)
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
                                {{-- <div class="col-md-4">
								<div class="row">
									<div class="cars">
										<label class="badge bg-theme">£ 256,00</label>
										<div class="car_img">
											<img src="{{ asset('front_assets') }}/images/van-3.png" class="img-fluid mx-auto d-block">
										</div>
										<div class="car_content">
											<h3 class="fw-500 mb-3">Mercedes-Benz Sprinter</h3>
											<p><b>Max. Speed :</b> 56.865 miles</p>
											<p><b>Transmission :</b> Automatic</p>
											<p><b>Exterior :</b> Metal Gold Cars</p>
										</div>
										<a href="#" class="btn btn-theme w-100 mt-2">Show Details</a>
									</div>
								</div>
							</div> --}}
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
                            <img src="{{ asset('front_assets') }}/images/advertis_right.png" class="img-fluid" />
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
                    <a href="#" class="btn btn-theme view_alltest">View All Reviews</a>
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
