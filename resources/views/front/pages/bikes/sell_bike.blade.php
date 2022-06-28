@extends('layouts.front')
@section('content')
<div class="container-fluid choose_section grey_bg">
	<div class="container">
		<div class="row">
			<div class="col-10 mx-auto bg-white py-4 box_shadow">
				<div class="row">
					<div class="col-md-4">
						<div class="row align-items-center">
							<div class="col-md-12">
								<div class="thum_content">
									<h4>Advertise to over a million buyers</h4>
									<p>Deposit & withdraw pound</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row align-items-center">
							<div class="col-md-12">
								<div class="thum_content">
									<h4>Dedicated support team</h4>
									<p>Special offers for you</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row align-items-center">
							<div class="col-md-12">
								<div class="thum_content">
									<h4>Free to list if your bike is under £1000</h4>
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

<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row g-0">
				<div class="col-md-6">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/advertis_right.png" class="img-fluid w-100" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="madvertise_text sellvan_advert mt-3" style="background-color: #FAFAFA;">
						<h2 class="fw-bold">Advertise to millions</h2>
						<p class="text_color">With the UK’s largest audience of car buyers, it’s highly likely someone is currently searching our website for the car that’s sat on your driveway. If you have a popular model, it can sell within 24 hours!</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid guides_section sell_guid mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">How to sell your bike, fast</h2>
			</div>
			<div class="col-12 mt-4">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/camera.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">TAKE GREAT PHOTOS</h4>
							<p>It may sound obvious - but taking good-quality photos can have a huge impact on the time it takes to sell your car. Adverts with good photos sell 3x faster</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/car-insurance.svg" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">KEEP IT SNAPPY</h4>
							<p>Keep your vehicle description short and simple. Call out optional extras that other similar cars may not have. And don’t forget to mention full-service history if you have it.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="text-center guid">
							<img src="{{ asset('front_assets') }}/images/car_search.png" class="img-fluid mx-auto d-block">
							<h4 class="mt-2">BE HONEST</h4>
							<p>It’s important that your vehicle description is accurate. If your car has a small scratch on it - be honest about it. It’ll save time with needless viewings.</p>
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
		<div class="row pb-2">
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

