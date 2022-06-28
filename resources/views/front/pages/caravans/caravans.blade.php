@extends('layouts.front')
@section('content')
<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row g-0">
				<div class="col-md-7 bg-theme">
					<div class="madvertise_text text-white">
						<h3>Place an advert on <br> Auto4sale</h3>
						<p>Get the price you deserve</p>
						<form class="row">
							<div class="col-md-6">
								<label class="form-label">Regestration</label>
								<input type="text" class="form-control" placeholder="e.g LL58 JFK">
							</div>
							<div class="col-md-6">
								<label class="form-label">Current Milage</label>
								<input type="text" class="form-control" placeholder="e.g 50094">
							</div>

							<div class="col-12 mt-3">
								<button type="submit" class="btn btn-theme bg-white text-black">Create Advert</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-5">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/advertis_right.png" class="img-fluid" />
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
				<p>Berth Reviews</p>
				<h2 class="fw-bold">The latest from Auto4sale</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/carvan.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Everything you need to know about trailer tents
					</a>
				</h4>
				<p class="mb-0">If sleeping in a tent is too basic for you, a trailer tent could be the answer to your touring problems. Read on for all the information you will need if you’re looking</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/carvan.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Everything you need to know about trailer tents
					</a>
				</h4>
				<p class="mb-0">If sleeping in a tent is too basic for you, a trailer tent could be the answer to your touring problems. Read on for all the information you will need if you’re looking</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/carvan.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Everything you need to know about trailer tents
					</a>
				</h4>
				<p class="mb-0">If sleeping in a tent is too basic for you, a trailer tent could be the answer to your touring problems. Read on for all the information you will need if you’re looking</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>
		</div>

			<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/carvan.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Everything you need to know about trailer tents
					</a>
				</h4>
				<p class="mb-0">If sleeping in a tent is too basic for you, a trailer tent could be the answer to your touring problems. Read on for all the information you will need if you’re looking</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/carvan.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Everything you need to know about trailer tents
					</a>
				</h4>
				<p class="mb-0">If sleeping in a tent is too basic for you, a trailer tent could be the answer to your touring problems. Read on for all the information you will need if you’re looking</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/carvan.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Everything you need to know about trailer tents
					</a>
				</h4>
				<p class="mb-0">If sleeping in a tent is too basic for you, a trailer tent could be the answer to your touring problems. Read on for all the information you will need if you’re looking</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<p>All the latest news for you</p>
				<h2 class="fw-bold">The latest from Auto4sale</h2>
			</div>
		</div>

		<div class="row">
			<div class="social_icons mb-5">
				<div class="icons">
					<ul class="list-inline mb-0">
						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-facebook-f"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</li>

						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-youtube"></i>
								<span>Youtube</span>
							</a>
						</li>

						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>

						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-tiktok"></i>
								<span>Tiktok</span>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid faq_section mt-3 mb-5">
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

