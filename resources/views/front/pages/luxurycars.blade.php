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

				<div class="row align-items-center mt-4">
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/nissan.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">NISSAN</h4>
							<p>View All 41,567 cars</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/peugeot.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Peugeot</h4>
							<p>View All 41,567 cars</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/audie.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">AUDI</h4>
							<p>View All 41,567 cars</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/tesla.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Tesla</h4>
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
				<p>New Luxury Cars</p>
				<h2 class="fw-bold">Luxury cars for you</h2>
			</div>

			<div class="tab-content cars_content mt-4" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-newcar" role="tabpanel" aria-labelledby="pills-newcar-tab">
					<div class="col-md-12">
						<div class="row">
                            @foreach ($data as $value)
							<div class="col-md-4">
								<div class="row">
									<div class="cars">
										<label class="badge bg-theme">{{ $value->car_details->price }}</label>
										<div class="car_img">
											<img src="{{ check_file($value->car_images[0]->image) }}" class="img-fluid mx-auto d-block" style="width: 237px;
                                            height: 177px;">
										</div>
										<div class="car_content">
											<h3 class="fw-500 mb-3">{{ $value->car_details->ad_title }}</h3>
											{{-- <p><b>Max. Speed :</b> 58.865 miles</p>
											<p><b>Transmission :</b> Automatic</p> --}}
											<p><b>Exterior :</b> {{ $value->color }}</p>
										</div>
										<a href="{{ route('front.cars.single_car_details',$value->hashid) }}" class="btn btn-theme w-100 mt-2">Show Details</a>
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
				<p class="mb-0">3.389 result <a href="#" class="text-theme">Need a car ? choose type car</a></p>
			</div>
			<div class="col-md-6 text-end">
				<a href="#" class="btn btn-theme show_cars">Show All Cars</a>
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

		<div class="row pt-2">
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

