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
									<h4>Sell your van from £9.95</h4>
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
									<h4>Advertise to over 1.6 million buyers</h4>
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
									<h4>Dedicated support team</h4>
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
<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row g-0">
				<div class="col-md-6">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/van-leftimg.png" class="img-fluid" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="madvertise_text electric_advertvan mt-3 grey_bg">
						<h2 class="fw-bold">Is an electric van right for me?</h2>
						<p class="text_color">Owning an electric van will result in some lifestyle changes. They may be minor, they may be for the better, but knowing exactly what to expect means you’ll be even more confident when you come to buy your first electric van.</p>
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
				<div class="tab-pane fade show active" id="pills-newcar" role="tabpanel" aria-labelledby="pills-newcar-tab">
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
				<p class="mb-0">3.389 result <a href="#" class="text-theme">Need a car ? choose type car</a></p>
			</div>
			<div class="col-md-6 text-end">
				<a href="#" class="btn btn-theme show_cars">Show All Cars</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<p>Van finance reviews</p>
				<h2 class="fw-bold">More about electric vans</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/finance_blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Van Finance Explained
					</a>
				</h4>
				<p class="mb-0">If you’re starting a new business and need to have trusty transport to make it work, a van is a great option. Whether you’ve been eyeing up a used Ford Transit or a brand new shiny Vauxhall Vivaro, you have the option to spread the cost. Here we explain the different types of finance available for vans.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/finance_blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Van Finance Explained
					</a>
				</h4>
				<p class="mb-0">If you’re starting a new business and need to have trusty transport to make it work, a van is a great option. Whether you’ve been eyeing up a used Ford Transit or a brand new shiny Vauxhall Vivaro, you have the option to spread the cost. Here we explain the different types of finance available for vans.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/finance_blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Van Finance Explained
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

<div class="container-fluid blogs_section mt-5 mb-5 pb-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Need a second opinion?</h2>
			</div>
			<div class="col-12 mt-4">
				<div class="row">
					<div class="col-md-4">
						<div class="blog_item">
							<a href="blog-single.html">
								<img src="{{ asset('front_assets') }}/images/van-secondblog.png" class="img-fluid">
								<h4 class="mt-4">VOLKSWAGEN VW ID. BUZZ PANEL VAN (2022 - ) REVIEW</h4>
							</a>
							<p class="text_color">
								A van is a fantastically useful vehicle, and whether you’re going to use it primarily for personal or for work purposes, it’ll become an integral…
							</p>
							<p class="text-theme">12 Hours Ago</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="blog_item">
							<a href="blog-single.html">
								<img src="{{ asset('front_assets') }}/images/van-secondblog2.png" class="img-fluid">
								<h4 class="mt-4">Toyota Proace Electric Panel Van (2021 - ) review</h4>
							</a>
							<p class="text_color">
								A van is a fantastically useful vehicle, and whether you’re going to use it primarily for personal or for work purposes, it’ll become an integral…
							</p>
							<p class="text-theme">12 Hours Ago</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="blog_item">
							<a href="blog-single.html">
								<img src="{{ asset('front_assets') }}/images/van-secondblog3.png" class="img-fluid">
								<h4 class="mt-4">Vauxhall Combo-e Panel Van (2021 - ) review</h4>
							</a>
							<p class="text_color">
								A van is a fantastically useful vehicle, and whether you’re going to use it primarily for personal or for work purposes, it’ll become an integral…
							</p>
							<p class="text-theme">12 Hours Ago</p>
						</div>
					</div>

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

