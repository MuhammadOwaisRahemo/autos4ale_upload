@extends('layouts.front')
@section('content')
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
							<img src="{{ asset('front_assets') }}/images/mercedes.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Mercedes-Benz</h4>
							<p>View All 41,567 cars</p>
						</div>
					</div>
				</div>

				<div class="text-center mt-4">
					<a href="#" class="btn btn-theme brand_btn mb-3">See All Brands</a>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container-fluid grey_bg py-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<p>Used Car Models</p>
				<h2 class="fw-bold">Special offers for you</h2>
			</div>

			<div class="mx-auto d-flex mt-4 specialcar_tabs">

				<ul class="nav nav-pills mb-3 mx-auto" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="pills-newcar-tab" data-bs-toggle="pill" data-bs-target="#pills-newcar" type="button" role="tab" aria-controls="pills-newcar" aria-selected="true">New Cars</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-usercar-tab" data-bs-toggle="pill" data-bs-target="#pills-usercar" type="button" role="tab" aria-controls="pills-usercar" aria-selected="false">Used Cars</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-sportcar-tab" data-bs-toggle="pill" data-bs-target="#pills-sportcar" type="button" role="tab" aria-controls="pills-sportcar" aria-selected="false">Sport Cars</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="pills-luxury-tab" data-bs-toggle="pill" data-bs-target="#pills-luxury" type="button" role="tab" aria-controls="pills-luxury" aria-selected="false">Luxury Cars</button>
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
                <div class="tab-pane fade" id="pills-sportcar" role="tabpanel" aria-labelledby="pills-sportcar-tab">
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
                <div class="tab-pane fade" id="pills-luxury" role="tabpanel" aria-labelledby="pills-luxury-tab">
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

		<div class="row results mt-4 align-items-center">
			<div class="col-md-6">
				<p class="mb-0">3.389 result <a href="#" class="text-theme">Need a car ? choose type car</a></p>
			</div>
			<div class="col-md-6 text-end">
				<a href="#" class="btn btn-theme show_cars">Show All Cars</a>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid guides_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Guides to buying a used car</h2>
			</div>
			<div class="col-12 mt-5">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/fuel.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Choosing a car fuel type</h4>
							<p>Petrol, diesel, electric or hybrid? Discover what’s right for you.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/history.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Check its History</h4>
							<p>See why it’s important to check a car’s past before you buy.what’s right for you.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/testdrive.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Get a test drive before buying</h4>
							<p>Learn what to do before, during and after your test drive.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/finance.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Check Finance Option</h4>
							<p>From HP to PCP, our finance guide has you covered.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/private.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Paying a private seller</h4>
							<p>Learn which payment options are more secure than others.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/paperwork.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Sorting the paperwork</h4>
							<p>All the documents you need to buy your next car.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid find_carsection py-5">
	<div class="container">
		<div class="find_car py-4">
			<div class="row">
				<div class="col-md-7 mx-auto text-center">
					<div class="findcar_text text-white">
						<h1>429,819</h1>
						<h2>pre-owned cars ready and waiting</h2>
						<a href="#" class="btn btn-theme findcar_btn">Find your car now</a>
					</div>
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
			<div class="testimonials testimonials_usedcar">
				<div>
					<div class="testimonials_item">
						<p>"Aku seneng banget belanja disini penjualnya ramah banget melayani pembeli dengan sepenuh hati untuk mendapatkan mobil sebagus ini"</p>
						<div class="row align-items-center">
							<div class="col-md-8">
								<div class="row g-0">
									<div class="col-md-4">
										<img src="{{ asset('front_assets') }}/images/testimonial-1.png" class="img-fluid mx-auto d-block">
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
						<p>“Bagus pisan mang aslina euy mantap lumayan buat ngajak sang kekasih pergi ke tempat romantis berdua bersamanya “</p>
						<div class="row align-items-center">
							<div class="col-md-8">
								<div class="row g-0">
									<div class="col-md-4">
										<img src="{{ asset('front_assets') }}/images/testimonial-2.png" class="img-fluid mx-auto d-block">
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
						<p>“Hade mang aslina euy mantap lah lumayan banget kanggo ngopi sareng cees pas doi lagi gamau di ajak keluar buat ketemuan“</p>
						<div class="row align-items-center">
							<div class="col-md-8">
								<div class="row g-0">
									<div class="col-md-4">
										<img src="{{ asset('front_assets') }}/images/testimonial-3.png" class="img-fluid mx-auto d-block">
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
						<p>"Aku seneng banget belanja disini penjualnya ramah banget melayani pembeli dengan sepenuh hati untuk mendapatkan mobil sebagus ini"</p>
						<div class="row align-items-center">
							<div class="col-md-8">
								<div class="row g-0">
									<div class="col-md-4">
										<img src="{{ asset('front_assets') }}/images/testimonial-1.png" class="img-fluid mx-auto d-block">
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
							<p class="mb-0">Want to become member in my community? <a href="#" class="text-decoration-none text-theme">Join with us</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection
