@extends('layouts.front')
@section('content')
<div class="container-fluid brands_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Popular electric car brands</h2>
				<!-- <p>Become part of our ever growing community</p> -->
			</div>
			<div class="col-12 mt-4">
				<div class="row align-items-center">
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

<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row g-0">
				<div class="col-md-7">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/electric_car.png" class="img-fluid" />
					</div>
				</div>
				<div class="col-md-5">
					<div class="madvertise_text electric_advert mt-3" style="background-color: #FAFAFA;">
						<h2 class="fw-bold">Monthly cost comparison - how much can I save?</h2>
						<p class="text_color">Compare the monthly cost of owning an electric car against their petrol counterparts and see how much you could save by making the switch to electric</p>

						<a href="#" class="btn btn-theme py-2 px-3">Compare Costs</a>
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
				<p>Electric Car Models</p>
				<h2 class="fw-bold">Special offers for you</h2>
			</div>

			<div class="tab-content cars_content electriccars_show mt-4" id="pills-tabContent">
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
							<img src="{{ asset('front_assets') }}/images/charge.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Charging at Home</h4>
							<p>From installing a home charge point to keeping your electric bill under control, here’s our guide to charging at home.what’s right for you.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/range.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Range</h4>
							<p>See why it’s important to check a car’s past before you buy.what’s right for you.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/explained.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Electric Explained</h4>
							<p>Your ultimate guide to electric cars from what’s under the bonnet to how they work and what it’s like to drive one.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/charge_go.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Charging on the Go</h4>
							<p>From HP to PCP, our finance guide has you covered.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/private.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Understanding the Jargon</h4>
							<p>We explain all the electric acronyms and jargon in one place, so you can start shopping in confidence</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/battery.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">Battery life</h4>
							<p>Everything you need to know about electric car batteries. How they work, how to look after them and more.</p>
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

<div class="container-fluid faq_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="text-center top_content">
					<h2 class="fw-bold">Your questions answered</h2>
					<p>Keep your vehicle description short and simple. Call out optional extras that other similar cars may not have. And don’t forget to mention full-service history if you have it.</p>
				</div>

				<div class="mt-4">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									Why sell my car with Auto4sale?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p class="text_color">
										With Auto4sale, you’re twice as likely to sell your car within a week. We also have more options than anywhere else to sell your car, so you are in control: 1. Instant Cash offer – The fastest way to sell your car. Get cash directly from Auto4sale and have the car picked up from your driveway within 48hrs 2. Part Exchange – The easy way to part exchange your old car for new one 3. Create an advert – You are in full control with your own sale. You can create and upload your advert in just three steps, and the size of our audience means you’ll get your car in front of more buyers than on any other site.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What paperwork do I need to sell my car?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p class="text_color">When you sell your car, you’ll need to hand over the car’s handbook, the service logbook (plus receipts) and, if the car is over three years old, the MOT certificate. Buyers may also appreciate older MOT certificates and maintenance receipts. After you’ve sold the car, you’ll need a receipt with the date, price, registration number, make and model featured. You’ll also need your (and the buyer’s) name and address. You’ll need to tell the DVLA the car has been sold. If your car has a V5C (registration document) then fill in the bottom and send this to the DVLA. You’ll need to give the top part to the buyer alongside other paperwork.</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Where can I sell my car?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p class="text_color">
										There are plenty of places to sell your old car. You could sell it directly to a dealership or auction house, or you can sell it online. If you’ve got the time to wait for the right buyer, selling your car privately on a site like Auto4sale can earn you more money. If you’re looking for someone to buy your car for cash, Instant Offer is a great option and one of the fastest ways to sell your car.
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What is my car worth?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p class="text_color">
										If you’ve sold a car before, you’ll know you can get wildly different quotes from competing sites and dealerships. Auto4sale free car valuation tool gives you the right guide price. We combine data from thousands of live adverts and dealer websites, plus values from car auctions, and ex-fleet and leasing vehicles. As our guide price represents the entire market and our data is updated daily, your quote is fair, priced to sell, and accurate. We’ll also give you a part-exchange price, an instant offer and a private sale price, so you can decide how you want to sell your car.
									</p>
								</div>
							</div>
						</div>


						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How much can I sell it for?
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p class="text_color">
										A car valuation will tell you exactly how much you can sell your car for. To get the best price for your car, make sure it’s clean and in good working order. Scuffs and scratches can knock the price down, so be realistic about the car’s condition and see whether it’s worth paying for repairs. A full-service history (where you’ve had a service every year, or within its set mileage) can fetch a higher price too. Other factors can affect a car’s price. Some make models are more desirable than others, and a car’s age and mileage will also affect the final offer. Older cars with higher mileage tend to sell for less, though remember the depreciation curve of new cars means they lose most of their value in the first few years.
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header" id="headingSix">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									Why sell my car with Auto4sale?
								</button>
							</h2>
							<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p class="text_color">
										With Auto4sale, you’re twice as likely to sell your car within a week. We also have more options than anywhere else to sell your car, so you are in control: 1. Instant Cash offer – The fastest way to sell your car. Get cash directly from Auto4sale and have the car picked up from your driveway within 48hrs 2. Part Exchange – The easy way to part exchange your old car for new one 3. Create an advert – You are in full control with your own sale. You can create and upload your advert in just three steps, and the size of our audience means you’ll get your car in front of more buyers than on any other site.
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h2 class="accordion-header" id="headingSeven">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									What paperwork do I need to sell my car?
								</button>
							</h2>
							<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p class="text_color">
										When you sell your car, you’ll need to hand over the car’s handbook, the service logbook (plus receipts) and, if the car is over three years old, the MOT certificate. Buyers may also appreciate older MOT certificates and maintenance receipts.
									</p>

									<p class="text_color">
										After you’ve sold the car, you’ll need a receipt with the date, price, registration number, make and model featured. You’ll also need your (and the buyer’s) name and address.
									</p>

									<p class="text_color">
										You’ll need to tell the DVLA the car has been sold. If your car has a V5C (registration document) then fill in the bottom and send this to the DVLA. You’ll need to give the top part to the buyer alongside other paperwork.
									</p>
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
