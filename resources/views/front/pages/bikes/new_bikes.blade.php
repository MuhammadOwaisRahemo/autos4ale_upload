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
									<h4>Pre-haggled prices</h4>
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
									<h4>Available now</h4>
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
									<h4>Flexible finance options</h4>
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
				<h2 class="fw-bold">Search by brand</h2>
				<p>Become part of our ever growing community</p>
			</div>
			<div class="col-12 mt-4">
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/honda.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Honda</h4>
							<p>View All 41,567 cars</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/yamaha.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Yamaha</h4>
							<p>View All 41,567 cars</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/kawasaki.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Kawasaki</h4>
							<p>View All 41,567 cars</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/suzuki.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Suzuki</h4>
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

<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row g-0">
				<div class="col-md-6">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/bike_img.png" class="img-fluid" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="madvertise_text electric_advertvan mt-3 grey_bg">
						<h2 class="fw-bold">Not sure what you can afford?</h2>
						<p class="text_color">Rory Reid covers the basics of car leasing, including: Most new bikes are available to buy on finance. Work out how much you can afford every month with our handy finance calculator.</p>
						<!-- <a href="" class="btn brand_btn btn-theme px-3"></a> -->
						<a href="bikefinance.html" class="btn btn-theme py-2 px-3">Go to bike finance</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid guides_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">New bikes come with great benefits</h2>
			</div>
			<div class="col-12 mt-5">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/cutting.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">CUTTING-EDGE TECHNOLOGY</h4>
							<p>New bikes come equipped with the latest technology and fuel efficiency systems, to help you keep costs down in the long run.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/history.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">MANUFACTURER WARRANTY</h4>
							<p>New bikes come with full manufacturer warranty, so in the unlikely event anything goes wrong – you’re covered.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/finance.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">FLEXIBLE FINANCE OPTIONS</h4>
							<p>Most new bikes are available to buy on finance, to help you break your costs down into affordable monthly payments.</p>
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
				<p>Bike Models</p>
				<h2 class="fw-bold">Find deals on popular models</h2>
			</div>

			<div class="tab-content mt-4 cars_content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-newcar" role="tabpanel" aria-labelledby="pills-newcar-tab">
					<div class="col-md-12">
						<div class="row">
                            @foreach ($new_bikes as $value)
                            <div class="col-md-4">
								<div class="row">
									<div class="cars">
										<label class="badge bg-theme">£ 200,00</label>
										<div class="car_img">
											<img src="{{ check_file($value->car_images[0]->image) }}"
                                            class="img-fluid mx-auto d-block" style="width: 311px;
                                            height: 226px;">
										</div>
										<div class="car_content">
											<h3 class="fw-500 mb-3">{{$value->car_details->ad_title}}</h3>
										</div>
										<a href="{{ route('front.cars.single_car_details', $value->hashid) }}" class="btn btn-theme w-100 mt-2">Show Details</a>
									</div>
								</div>
							</div>
                        @endforeach
						</div>
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
				<p>Check out the latest bike reviews from our team.</p>
				<h2 class="fw-bold">Need a second opinion?</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/bike-blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Sunra MIKU SUPER Scooter (2021 - ) Electric review
					</a>
				</h4>
				<p class="mb-0">If you’re starting a new business and need to have trusty transport to make it work, a van is a great option. Whether you’ve been eyeing up a used Ford Transit or a brand new shiny Vauxhall Vivaro, you have the option to spread the cost. Here we explain the different types of finance available for vans.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/bike-blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Sunra MIKU SUPER Scooter (2021 - ) Electric review
					</a>
				</h4>
				<p class="mb-0">If you’re starting a new business and need to have trusty transport to make it work, a van is a great option. Whether you’ve been eyeing up a used Ford Transit or a brand new shiny Vauxhall Vivaro, you have the option to spread the cost. Here we explain the different types of finance available for vans.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/bike-blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Sunra MIKU SUPER Scooter (2021 - ) Electric review
					</a>
				</h4>
				<p class="mb-0">If you’re starting a new business and need to have trusty transport to make it work, a van is a great option. Whether you’ve been eyeing up a used Ford Transit or a brand new shiny Vauxhall Vivaro, you have the option to spread the cost. Here we explain the different types of finance available for vans.</p>
				<div class="btm-text text-end mt-2">
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
							<p class="mb-0">Want to become member in my community? <a href="#" class="text-decoration-none text-theme">Join with us</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection

