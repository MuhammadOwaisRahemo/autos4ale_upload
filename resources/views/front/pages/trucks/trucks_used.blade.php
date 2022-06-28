@extends('layouts.front')
@section('content')
<div class="container-fluid guides_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Find a truck to suit you</h2>
			</div>
			<div class="col-md-10 mx-auto mt-5">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="text-center guid">
							<h4 class="mt-3">Rigid Trucks</h4>
							<p>Whether you’re after a tipper, curtainside truck, a box truck, or something else, we’ve got you covered.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="text-center guid">
							<h4 class="mt-3">Tractor units</h4>
							<p>Looking for your next tractor unit? You’re in the right place.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="text-center guid">
							<h4 class="mt-3">Trailers</h4>
							<p>Searching for a trailer to carry freight? Browse all our trailers here.</p>
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
						<img src="{{ asset('front_assets') }}/images/truck_left.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-6">
					<div class="madvertise_text used_truckadvert mt-3" style="background-color: #FAFAFA;">
						<h2 class="fw-bold">Free history checks</h2>
						<p class="text_color">Every truck has had a free basic history check. We’ll never advertise a truck that’s recorded as stolen, scrapped or written off beyond repair.</p>

						<!-- <a href="#" class="btn btn-theme py-2 px-3">See Dealers Review</a> -->
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
				<h2 class="fw-bold">Truck manufacturers and their models</h2>
				<!-- <p>Become part of our ever growing community</p> -->
			</div>
			<div class="col-12 mt-4">
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/scania.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Scania</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/volvo.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Volvo</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/mercedes.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Mercedes-Benz</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/daf.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">DAF</h4>
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
				<h2 class="fw-bold">Top picks from Experts</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/middel-first.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						5 Best recovery trucks (car transporters)
					</a>
				</h4>
				<p class="mb-0">Here at Auto4Sale, we have come up with a list of 5 of the best car transporters and recovery trucks in the game. We will highlight some of their resounding features to make your choice easier. Take a look below to</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/middle-review.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#" class="d-block" style="min-height: 56px;">
						5 Best MAN Units
					</a>
				</h4>
				<p class="mb-0" style="min-height: 72px">MAN is a popular manufacturer of trucks and tractor units. There are lots of MAN tractor units to choose from, so we have found 5 of the best to help you.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/last_review.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#" class="d-block" style="min-height: 56px;">
						5 Best buses
					</a>
				</h4>
				<p class="mb-0" style="min-height: 72px">According to the latest government data, there are around 32,000 buses in service on UK roads transporting more than 3 million people every day. Buses are not</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>
		</div>

			<div class="text-center mt-4">
				<a href="#" class="btn btn-theme stock_btn">See All Reviews</a>
			</div>
	</div>
</div>


<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<p>Check out the latest truck reviews from our team</p>
				<h2 class="fw-bold">Need a second opinion?</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/truck_new.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Scania P Series review
					</a>
				</h4>
				<p class="mb-0">As a multi-axle rigid the Scania P-series has no equal; lightweight, desirable and a willing workhorse.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/truck_new.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Scania P Series review
					</a>
				</h4>
				<p class="mb-0">As a multi-axle rigid the Scania P-series has no equal; lightweight, desirable and a willing workhorse.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/truck_new.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Scania P Series review
					</a>
				</h4>
				<p class="mb-0">As a multi-axle rigid the Scania P-series has no equal; lightweight, desirable and a willing workhorse.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid find_carsection py-5" style="background-image: url({{ asset('front_assets') }}/images/truck_bg2.png);">
	<div class="container">
		<div class="find_car py-4">
			<div class="row">
				<div class="col-md-7 mx-auto text-center">
					<div class="findcar_text text-white">
						<h1>4,471</h1>
						<h2>pre-owned trucks <br> ready and waiting</h2>
						<a href="#" class="btn btn-theme findcar_btn">Find your truck</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

