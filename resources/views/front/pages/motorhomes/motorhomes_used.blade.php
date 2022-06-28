@extends('layouts.front')
@section('content')
<div class="container-fluid guides_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Find a motorhome to suit your lifestyle</h2>
			</div>
			<div class="col-12 mt-5">
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="text-center guid">
							<h4 class="mt-5">2 Berth Motorhomes</h4>
							<p>2 berth motorhomes are perfect for two people.</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="text-center guid">
							<h4 class="mt-5">4 Berth Motorhomes</h4>
							<p>4 berth motorhomes suit a family of up to four.</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="text-center guid">
							<h4 class="mt-5">6 Berth Motorhomes</h4>
							<p>6 berth motorhomes sleep up to 6, allowing for people to tag along.</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="text-center guid">
							<h4 class="mt-5">Campervans</h4>
							<p>Discovered a new sense of adventure? Browse campervans.</p>
						</div>
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
				<h2 class="fw-bold">Here to help, every step of the way</h2>
			</div>
			<div class="col-12 mt-5">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="guid" style="height: 160px;">
							<h4 class="mt-2">FREE HISTORY CHECKS</h4>
							<p>Every motorhome has passed a free basic history check. We’ll never advertise a motorhome that’s recorded as stolen, scrapped or written off beyond repair</p>
						</div>
					</div>

					<div class="col-md-6">
						<div class="guid" style="height: 160px;">
							<h4 class="mt-2">SELLERS YOU CAN TRUST</h4>
							<p>Read dealer reviews from like-minded motorhome buyers so you can feel confident you’re buying from someone you trust.</p>
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
				<h2 class="fw-bold">Top picks from the experts</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/motohome-blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						5 Best campervans under £5,000
					</a>
				</h4>
				<p class="mb-0">If you are considering buying a used campervan this year, there are a number of things you need to consider, especially if you are looking for a low-cost model.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/motohome-blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Fiat Ducato Panel Van (2022 - ) Review
					</a>
				</h4>
				<p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a tried and tested platform.from a dealer. tech onto a tried and tested platform.from a dealer.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/motohome-blog.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Fiat Ducato Panel Van (2022 - ) Review
					</a>
				</h4>
				<p class="mb-0">A notable update to the Fiat Ducato brings welcome and modern tech onto a tried and tested platform.from a dealer. tech onto a tried and tested platform.from a dealer.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
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


<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<p class="text_color fs-14">Check out the latest motorhome reviews from our team</p>
				<h2 class="fw-bold">Need a second opinion?</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/van-review.png" class="img-fluid mx-auto d-block w-100">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Auto-Sleepers Ford Air Campervan Review
					</a>
				</h4>
				<p class="mb-0">After practical holidays that up the style stakes on the road? Meet the Auto-Sleepers’ Ford Air campervan.</p>
				<div class="btm-text text-end mt-3">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/van-review.png" class="img-fluid mx-auto d-block w-100">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Auto-Sleepers Ford Air Campervan Review
					</a>
				</h4>
				<p class="mb-0">After practical holidays that up the style stakes on the road? Meet the Auto-Sleepers’ Ford Air campervan.</p>
				<div class="btm-text text-end mt-3">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/van-review.png" class="img-fluid mx-auto d-block w-100">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Auto-Sleepers Ford Air Campervan Review
					</a>
				</h4>
				<p class="mb-0">After practical holidays that up the style stakes on the road? Meet the Auto-Sleepers’ Ford Air campervan.</p>
				<div class="btm-text text-end mt-3">
					<p>Expert review | 10 days ago</p>
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
					<h4 class="fw-bold">What My Clients Say</h4>
					<p class="mb-0">Testimonials from our best clients</p>
				</div>
			</div>
			<div class="col-md-6 text-end">
				<a href="#" class="btn btn-theme view_alltest">View All Reviews</a>
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

		<div class="row mt-5 pt-5 pb-4">
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

