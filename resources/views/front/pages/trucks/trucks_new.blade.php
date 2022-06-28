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

<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row g-0">
				<div class="col-md-6">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/truck_leftnew.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-6">
					<div class="madvertise_text new_truckadvert mt-3" style="background-color: #FAFAFA;">
						<h2 class="fw-bold">In stock and available now</h2>
						<p class="text_color">There’ll be no need to wait months for your new truck to be built and shipped to you. On Auto4Sale, you’ll see which brand-new trucks are in stock, so you can find and buy it today.</p>
						<a href="#" class="btn btn-theme py-2 px-4">Go to Stock</a>
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
				<h2 class="fw-bold">New trucks come with great benefits</h2>
			</div>
			<div class="col-12 mt-5">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/car.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">CUTTING-EDGE TECHNOLOGY</h4>
							<p>New motorhomes come equipped with the latest technology and fuel efficiency systems, to help you keep costs down in the long run.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/history.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">MANUFACTURER WARRANTY</h4>
							<p>New motorhomes come with full manufacturer warranty, so in the unlikely event anything goes wrong – you’re covered.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/finance.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">FLEXIBLE FINANCE OPTIONS</h4>
							<p>Most new motorhomes are available to buy on finance, to help you break your costs down into affordable monthly payments.</p>
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

