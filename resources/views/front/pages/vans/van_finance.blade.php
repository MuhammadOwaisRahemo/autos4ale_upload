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
									<h4>Prices upfront</h4>
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
									<h4>Customise your terms</h4>
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
									<h4>Apply online</h4>
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


<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row g-0">
				<div class="col-md-6">
					<div class="right_img van_finance text-center text-white">
						<img src="{{ asset('front_assets') }}/images/left-vanadvert.png" class="img-fluid w-100">
						<div class="vanfinance_content">
							<h1>13,486</h1>
							<h2>vans available today on finance</h2>
							<a href="#" class="btn btn-theme px-4 py-3">Find your van now</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="madvertise_text sellvan_advert mt-3 pt-4 pb-3" style="background-color: #FAFAFA;">
						<h2 class="fw-bold mb-3">How finance works on Auto4sale</h2>
						<p class="text_color">Simply shop for your next van on Auto4Sale and use the calculator on our adverts to quickly work out your monthly payments. <br> We act as a credit broker which means we don’t offer finance ourselves, but we make it easy for you to apply directly with the retailer. <br> If you haven’t found the right van yet and want to understand how much you can borrow, use our calculator or get a finance quote with our finance partner Zuto</p>

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
				<h2 class="fw-bold">Types of finance available</h2>
			</div>
			<div class="col-12 mt-4">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="guid">
							<h4 class="mt-2">PERSONAL CONTRACT PURCHASE (PCP)</h4>
							<p style="font-size: 16px;">With PCP finance, you pay an initial deposit, followed by monthly instalments, but a large portion of the loan is deferred until the end of the agreement. You can pay that final sum to own the car, hand it back or start another agreement.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="guid">
							<h4 class="mt-2">HIRE PURCHASE (HP)</h4>
							<p style="font-size: 16px;">With HP, you pay a deposit up front, and then pay off the rest of the balance – plus the interest - in equal monthly instalments. You’ll pay an ‘option to purchase’ fee, then the car is yours at the end of the agreement.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="guid">
							<h4 class="mt-2">PERSONAL CONTRACT HIRE (PCH)</h4>
							<p style="font-size: 16px;">PCH is another way to finance a car. It’s technically a method of leasing a car rather than buying it. You pay a deposit and monthly instalments, which may be lower than some other finance agreements, but you never own the car.</p>
						</div>
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
				<p>Van finance reviews</p>
				<h2 class="fw-bold">Still confused? Check out our van finance guides</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/finance_blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Van Finance Explained
					</a>
				</h4>
				<p class="mb-0">If you’re starting a new business and need to have trusty transport to make it work, a van is a great option. Whether you’ve been eyeing up a used Ford Transit or a brand new shiny Vauxhall Vivaro, you have the option to spread the cost. Here we explain the different types of finance available for vans.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/finance_blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Van Finance Explained
					</a>
				</h4>
				<p class="mb-0">If you’re starting a new business and need to have trusty transport to make it work, a van is a great option. Whether you’ve been eyeing up a used Ford Transit or a brand new shiny Vauxhall Vivaro, you have the option to spread the cost. Here we explain the different types of finance available for vans.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/finance_blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Van Finance Explained
					</a>
				</h4>
				<p class="mb-0">If you’re starting a new business and need to have trusty transport to make it work, a van is a great option. Whether you’ve been eyeing up a used Ford Transit or a brand new shiny Vauxhall Vivaro, you have the option to spread the cost. Here we explain the different types of finance available for vans.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
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

