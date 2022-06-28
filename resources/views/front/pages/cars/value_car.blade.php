@extends('layouts.front')
@section('content')
<div class="container-fluid brands_section mt-5 mb-5">
	<div class="container">
		<div class="row">

			<div class="col-12 mt-4">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/certified.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">FAST, EASY VALUATIONS YOU CAN ACTUALLY TRUST</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/car-ser.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">POWERED BY DATA FROM MILLIONS OF VEHICLES</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/exchange.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">COMPLETELY FREE AND PROVIDED IN SECONDS</h4>
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
				<div class="col-md-7">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/car_img.JPG" class="img-fluid" />
					</div>
				</div>
				<div class="col-md-5">
					<div class="madvertise_text electric_advert mt-3 pb-4" style="background-color: #FAFAFA;">
						<h2 class="fw-bold">Valuations you can trust</h2>
						<p class="text_color">Our valuations are powered by data from millions of vehicles each day, so you get an accurate price that reflects the current market. It’s completely free and can be done online in minutes.</p>
						<p class="text_color">They are 100% data-driven using a smart, innovative algorithm that considers numerous factors such as the vehicle’s age, mileage, spec and optional extras. Awarded Used Car Valuations Provider of the Year in 2019, you can rely on us to give you an accurate valuation you can trust.</p>

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
					<h2 class="fw-bold">Factors that can affect a car’s value</h2>
					<p>The following factors are not included in our valuations but <br> can increase or decrease the car’s value.</p>
				</div>
			</div>

			<div class="row btm_faq">

				<div class="col-md-6">
					<div class="grey_bg">
						<h4>Adding post-factory features like alloy <br> wheels can add to a vehicles’ value</h4>
						<p class="text_color">Things that can increase a car’s value</p>

						<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									Modifications
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
									Full Service History
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
									Good Condition
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
									No Damage
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

					</div>



					</div>
				</div>

				<div class="col-md-6">
					<div class="grey_bg">
						<h4>Adding post-factory features like alloy <br> wheels can add to a vehicles’ value</h4>
						<p class="text_color">Things that can increase a car’s value</p>

						<div class="accordion" id="accordionExamplenew">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#signifi" aria-expanded="false" aria-controls="signifi">
										Significant wear and tear
									</button>
								</h2>
								<div id="signifi" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExamplenew">
									<div class="accordion-body">
										<p class="text_color">
											With Auto4sale, you’re twice as likely to sell your car within a week. We also have more options than anywhere else to sell your car, so you are in control: 1. Instant Cash offer – The fastest way to sell your car. Get cash directly from Auto4sale and have the car picked up from your driveway within 48hrs 2. Part Exchange – The easy way to part exchange your old car for new one 3. Create an advert – You are in full control with your own sale. You can create and upload your advert in just three steps, and the size of our audience means you’ll get your car in front of more buyers than on any other site.
										</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#parts" aria-expanded="false" aria-controls="parts">
										Parts not working
									</button>
								</h2>
								<div id="parts" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExamplenew">
									<div class="accordion-body">
										<p class="text_color">When you sell your car, you’ll need to hand over the car’s handbook, the service logbook (plus receipts) and, if the car is over three years old, the MOT certificate. Buyers may also appreciate older MOT certificates and maintenance receipts. After you’ve sold the car, you’ll need a receipt with the date, price, registration number, make and model featured. You’ll also need your (and the buyer’s) name and address. You’ll need to tell the DVLA the car has been sold. If your car has a V5C (registration document) then fill in the bottom and send this to the DVLA. You’ll need to give the top part to the buyer alongside other paperwork.</p>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#previous" aria-expanded="false" aria-controls="previous">
										Lots of previous owners
									</button>
								</h2>
								<div id="previous" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExamplenew">
									<div class="accordion-body">
										<p class="text_color">
											There are plenty of places to sell your old car. You could sell it directly to a dealership or auction house, or you can sell it online. If you’ve got the time to wait for the right buyer, selling your car privately on a site like Auto4sale can earn you more money. If you’re looking for someone to buy your car for cash, Instant Offer is a great option and one of the fastest ways to sell your car.
										</p>
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gap_mot" aria-expanded="false" aria-controls="gap_mot">
										Gaps in service history and/or no MOT
									</button>
								</h2>
								<div id="gap_mot" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExamplenew">
									<div class="accordion-body">
										<p class="text_color">
											If you’ve sold a car before, you’ll know you can get wildly different quotes from competing sites and dealerships. Auto4sale free car valuation tool gives you the right guide price. We combine data from thousands of live adverts and dealer websites, plus values from car auctions, and ex-fleet and leasing vehicles. As our guide price represents the entire market and our data is updated daily, your quote is fair, priced to sell, and accurate. We’ll also give you a part-exchange price, an instant offer and a private sale price, so you can decide how you want to sell your car.
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
</div>


<div class="container-fluid find_carsection py-5 mt-5">
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
