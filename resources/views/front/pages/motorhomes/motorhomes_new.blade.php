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
							<img src="{{ asset('front_assets') }}/images/auto-trail.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Auto-Trail</h4>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-center brands">
							<img src="{{ asset('front_assets') }}/images/auto-sleerps.png" class="pt-3 img-fluid mx-auto d-block">
							<h4 class="mt-2">Auto-Sleepers</h4>
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
						<img src="{{ asset('front_assets') }}/images/left-motohomes.png" class="img-fluid" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="madvertise_text motohomes_advert mt-3" style="background-color: #FAFAFA;">
						<h2 class="fw-bold">Not sure what you can afford?</h2>
						<p class="text_color">Most new motorhomes are available to buy on finance. Work out how much you can afford every month with our handy finance calculator.</p>

						<a href="#" class="btn btn-theme py-2 px-3">Go to Finance</a>
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
							<img src="{{ asset('front_assets') }}/images/car.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">CUTTING-EDGE TECHNOLOGY</h4>
							<p>New motorhomes come equipped with the latest technology and fuel efficiency systems, to help you keep costs down in the long run.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/history.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">MANUFACTURER WARRANTY</h4>
							<p>New motorhomes come with full manufacturer warranty, so in the unlikely event anything goes wrong ??? you???re covered.</p>
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

<div class="container-fluid faq_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="text-center top_content">
					<h2 class="fw-bold">Your questions answered</h2>
					<p>Keep your vehicle description short and simple. Call out optional extras that other similar cars may not have. And don???t forget to mention full-service history if you have it.</p>
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
										With Auto4sale, you???re twice as likely to sell your car within a week. We also have more options than anywhere else to sell your car, so you are in control: 1. Instant Cash offer ??? The fastest way to sell your car. Get cash directly from Auto4sale and have the car picked up from your driveway within 48hrs 2. Part Exchange ??? The easy way to part exchange your old car for new one 3. Create an advert ??? You are in full control with your own sale. You can create and upload your advert in just three steps, and the size of our audience means you???ll get your car in front of more buyers than on any other site.
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
									<p class="text_color">When you sell your car, you???ll need to hand over the car???s handbook, the service logbook (plus receipts) and, if the car is over three years old, the MOT certificate. Buyers may also appreciate older MOT certificates and maintenance receipts. After you???ve sold the car, you???ll need a receipt with the date, price, registration number, make and model featured. You???ll also need your (and the buyer???s) name and address. You???ll need to tell the DVLA the car has been sold. If your car has a V5C (registration document) then fill in the bottom and send this to the DVLA. You???ll need to give the top part to the buyer alongside other paperwork.</p>
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
										There are plenty of places to sell your old car. You could sell it directly to a dealership or auction house, or you can sell it online. If you???ve got the time to wait for the right buyer, selling your car privately on a site like Auto4sale can earn you more money. If you???re looking for someone to buy your car for cash, Instant Offer is a great option and one of the fastest ways to sell your car.
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
										If you???ve sold a car before, you???ll know you can get wildly different quotes from competing sites and dealerships. Auto4sale free car valuation tool gives you the right guide price. We combine data from thousands of live adverts and dealer websites, plus values from car auctions, and ex-fleet and leasing vehicles. As our guide price represents the entire market and our data is updated daily, your quote is fair, priced to sell, and accurate. We???ll also give you a part-exchange price, an instant offer and a private sale price, so you can decide how you want to sell your car.
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
										A car valuation will tell you exactly how much you can sell your car for. To get the best price for your car, make sure it???s clean and in good working order. Scuffs and scratches can knock the price down, so be realistic about the car???s condition and see whether it???s worth paying for repairs. A full-service history (where you???ve had a service every year, or within its set mileage) can fetch a higher price too. Other factors can affect a car???s price. Some make models are more desirable than others, and a car???s age and mileage will also affect the final offer. Older cars with higher mileage tend to sell for less, though remember the depreciation curve of new cars means they lose most of their value in the first few years.
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
										With Auto4sale, you???re twice as likely to sell your car within a week. We also have more options than anywhere else to sell your car, so you are in control: 1. Instant Cash offer ??? The fastest way to sell your car. Get cash directly from Auto4sale and have the car picked up from your driveway within 48hrs 2. Part Exchange ??? The easy way to part exchange your old car for new one 3. Create an advert ??? You are in full control with your own sale. You can create and upload your advert in just three steps, and the size of our audience means you???ll get your car in front of more buyers than on any other site.
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
										When you sell your car, you???ll need to hand over the car???s handbook, the service logbook (plus receipts) and, if the car is over three years old, the MOT certificate. Buyers may also appreciate older MOT certificates and maintenance receipts.
									</p>

									<p class="text_color">
										After you???ve sold the car, you???ll need a receipt with the date, price, registration number, make and model featured. You???ll also need your (and the buyer???s) name and address.
									</p>

									<p class="text_color">
										You???ll need to tell the DVLA the car has been sold. If your car has a V5C (registration document) then fill in the bottom and send this to the DVLA. You???ll need to give the top part to the buyer alongside other paperwork.
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

		<div class="row pb-4">
			<div class="top_content text-center">
				<h4 class="fw-bold">Get The Latest Updates</h4>
				<p>We???ll send you some updates and special offers</p>
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

