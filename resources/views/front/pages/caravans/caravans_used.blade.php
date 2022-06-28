@extends('layouts.front')
@section('content')
<div class="container-fluid guides_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Find a caravan to suit your lifestyle</h2>
			</div>
			<div class="col-12 mt-5">
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="text-center guid">
							<h4 class="mt-5">2 Berth Caravans</h4>
							<p>Fit two people in, making them perfect for romantic getaways.</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="text-center guid">
							<h4 class="mt-5">4 Berth Caravans</h4>
							<p>Are suitable for up to four people, making them great for families.</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="text-center guid">
							<h4 class="mt-5">6 Berth Caravans</h4>
							<p>Sleep up to six people, allowing for extra visitors to tag along.</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="text-center guid">
							<h4 class="mt-5">Campervans</h4>
							<p>Great for anyone who has found their perfect site.</p>
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
						<img src="{{ asset('front_assets') }}/images/carvan_left.png" class="img-fluid" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="madvertise_text motohomes_advert mt-3" style="background-color: #FAFAFA;">
						<h2 class="fw-bold">Sellers you can trust</h2>
						<p class="text_color">Read dealer reviews from like-minded caravan buyers so you can feel confident you’re buying from someone you trust.</p>

						<a href="#" class="btn btn-theme py-2 px-3">See Dealers Review</a>
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
				<h2 class="fw-bold">Browse by brand</h2>
				<!-- <p>Become part of our ever growing community</p> -->
			</div>
			<div class="col-12 mt-4">
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/swift.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Swift</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/volk.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Volkswagen</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/lunar.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Lunar</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/eiddis.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Elddis</h4>
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

<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<p>Check out the latest motorhome reviews from our team</p>
				<h2 class="fw-bold">Need a second opinion?</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/review_carvna.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Coachman Lusso Caravan Review
					</a>
				</h4>
				<p class="mb-0">With a single-axle and twin-axle option, the Lusso offers luxury living pitch-perfect practicality.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/review_carvna.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Coachman Lusso Caravan Review
					</a>
				</h4>
				<p class="mb-0">With a single-axle and twin-axle option, the Lusso offers luxury living pitch-perfect practicality.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/review_carvna.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Coachman Lusso Caravan Review
					</a>
				</h4>
				<p class="mb-0">With a single-axle and twin-axle option, the Lusso offers luxury living pitch-perfect practicality.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="container-fluid find_carsection py-5" style="background-image: url({{ asset('front_assets') }}/images/bg_mob.png);">
	<div class="container">
		<div class="find_car py-4">
			<div class="row">
				<div class="col-md-7 mx-auto text-center">
					<div class="findcar_text text-white">
						<h1>2,067</h1>
						<h2>pre-owned caravans <br> ready and waiting</h2>
						<a href="#" class="btn btn-theme findcar_btn">Find your caravan</a>
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

