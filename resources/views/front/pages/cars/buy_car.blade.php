@extends('layouts.front')
@section('content')
<div class="container-fluid grey_bg py-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<p>New Car Models</p>
				<h2 class="fw-bold">Brand new car deals</h2>
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
							{{-- <div class="col-md-4">
								<div class="row">
									<div class="cars">
										<label class="badge bg-theme">£ 234,00</label>
										<div class="car_img">
											<img src="{{ asset('front_assets') }}/images/car-2.png" class="img-fluid mx-auto d-block">
										</div>
										<div class="car_content">
											<h3 class="fw-500 mb-3">2019 Dark Grey Cars</h3>
											<p><b>Max. Speed :</b> 54.456 miles</p>
											<p><b>Transmission :</b> Automatic</p>
											<p><b>Exterior :</b> Dark Grey Cars</p>
										</div>
										<a href="#" class="btn btn-theme w-100 mt-2">Show Details</a>
									</div>
								</div>
							</div> --}}
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

<div class="container-fluid guides_section sell_guid mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">How to sell your car, fast</h2>
			</div>
			<div class="col-12 mt-4">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/search-bar.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">SEARCH FROM ANYWHERE</h4>
							<p>Search for your next car anywhere, anytime. From the comfort of your home or on your break, our marketplace is open.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/car-insurance.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">FIND YOUR MATCH</h4>
							<p>View thousands of options to find the perfect vehicle. Use our price indicator to ensure you’re getting the best deal.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/delivery.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">ARRANGE YOUR DELIVERY</h4>
							<p>Get your car delivered to your doorstop by adding your postcode and ‘home delivery’ to your search.</p>
						</div>
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
					<h4 class="fw-bold">Join thousands of happy sellers</h4>
					<p class="mb-0">Our happy customers on Trustpilot</p>
					<img src="{{ asset('front_assets') }}/images/trust.png" class="img-fluid mt-1">
				</div>
			</div>
			<div class="col-md-6 text-md-end mt-3 mt-md-0">
				<a href="#" class="btn btn-theme view_alltest">Read more Trust Pilot reviews</a>
			</div>
		</div>

		<div class="row">
			<div class="testimonials">
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
	</div>
</div>


<div class="container-fluid blogs_section mt-5 mb-5 pb-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Learn more about buying a car online</h2>
			</div>
			<div class="col-12 mt-4">
				<div class="row">
					<div class="col-md-4">
						<div class="blog_item">
							<a href="blog-sinle.html">
								<img src="{{ asset('front_assets') }}/images/blog-1.png" class="img-fluid">
								<h4 class="mt-4">Easter travel tips</h4>
							</a>
							<p class="text_color">
								Record traffic is expected over Easter, so here’s how you can survive the travel chaos – especially if you’ll be driving an electric car.
							</p>
							<p class="text-theme">12 Hours Ago</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="blog_item">
							<a href="blog-sinle.html">
								<img src="{{ asset('front_assets') }}/images/blog-2.png" class="img-fluid">
								<h4 class="mt-4">Maserati MC20 Coupe (2022 - ) review</h4>
							</a>
							<p class="text_color">
								Record traffic is expected over Easter, so here’s how you can survive the travel chaos – especially if you’ll be driving an electric car.
							</p>
							<p class="text-theme">37 Minutes Ago</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="blog_item">
							<a href="blog-sinle.html">
								<img src="{{ asset('front_assets') }}/images/blog-2.png" class="img-fluid">
								<h4 class="mt-4">Why aren’t women buying electric cars?</h4>
							</a>
							<p class="text_color">
								More than 2 billion humans on earth have finally been confirmed vaccinated, and we can finally start a normal life . . .
							</p>
							<p class="text-theme">45 Minutes Ago</p>
						</div>
					</div>

					<div class="col-md-4 mt-4">
						<div class="blog_item">
							<a href="blog-sinle.html">
								<img src="{{ asset('front_assets') }}/images/blog-1.png" class="img-fluid">
								<h4 class="mt-4">Easter travel tips</h4>
							</a>
							<p class="text_color">
								Record traffic is expected over Easter, so here’s how you can survive the travel chaos – especially if you’ll be driving an electric car.
							</p>
							<p class="text-theme">12 Hours Ago</p>
						</div>
					</div>

					<div class="col-md-4 mt-4">
						<div class="blog_item">
							<a href="blog-sinle.html">
								<img src="{{ asset('front_assets') }}/images/blog-2.png" class="img-fluid">
								<h4 class="mt-4">Maserati MC20 Coupe (2022 - ) review</h4>
							</a>
							<p class="text_color">
								Record traffic is expected over Easter, so here’s how you can survive the travel chaos – especially if you’ll be driving an electric car.
							</p>
							<p class="text-theme">37 Minutes Ago</p>
						</div>
					</div>

					<div class="col-md-4 mt-4">
						<div class="blog_item">
							<a href="blog-sinle.html">
								<img src="{{ asset('front_assets') }}/images/blog-2.png" class="img-fluid">
								<h4 class="mt-4">Why aren’t women buying electric cars?</h4>
							</a>
							<p class="text_color">
								More than 2 billion humans on earth have finally been confirmed vaccinated, and we can finally start a normal life . . .
							</p>
							<p class="text-theme">45 Minutes Ago</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container-fluid grey_bg py-5">
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

