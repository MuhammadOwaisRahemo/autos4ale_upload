@extends('layouts.front_dashboardlight')
@section('banner-section')
<div class="container-fluid main-bannerbg" style="background-image: url({{ asset('front_assets') }}/images/sell_truckbg.png);">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<ul class="list-inline ps-5">
					<li class="list-inline-item">
						<a href="{{ route('front.trucks.trucks') }}">Trucks</a>
					</li>
                    <li class="list-inline-item">
						<a href="{{ route('front.trucks.trucks_used') }}">Used Truck</a>
					</li>

					<li class="list-inline-item">
						<a href="{{ route('front.trucks.trucks_new') }}">New Truck</a>
					</li>

					<li class="list-inline-item">
						<a href="{{ route('front.trucks.trucks_sell') }}">Sell Your Truck</a>
					</li>

					<li class="list-inline-item">
						<a href="{{ route('front.trucks.trucks_reviews') }}">Truck Reviews</a>
					</li>
				</ul>

				<div class="text-white text-center">
					<h1 class="fw-bold">The latest truck reviews, news and advice from our team</h1>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')
<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Latest Reviews</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/truck_review.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						What it is really like to be a truck driver, featuring Beck..
					</a>
				</h4>
				<p class="mb-0">With the driver shortage being such a hot topic in 2021, we explore the ups and downs of being a truck driver with internet sensation Becky Giles.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/truck_review.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#" class="d-block">
						What it is really like to be a truck driver, featuring Beck..
					</a>
				</h4>
				<p class="mb-0">With the driver shortage being such a hot topic in 2021, we explore the ups and downs of being a truck driver with internet sensation Becky Giles.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/truck_review.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#" class="d-block">
						What it is really like to be a truck driver, featuring Beck..
					</a>
				</h4>
				<p class="mb-0">With the driver shortage being such a hot topic in 2021, we explore the ups and downs of being a truck driver with internet sensation Becky Giles.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row">
				<div class="col-md-5">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/truck_image.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-7">
					<div class="newbest_choice newbest_choicenew pt-5">
						<h1 class="fw-bold">Get free truck checks on Auto4Sale Trucks</h1>
						<p class="text_color">Want free truck checks, to give you peace of mind before you buy? Find out more on how to get one here.</p>

						<a href="#" class="btn btn-theme py-2 px-3">Read More</a>
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
				<!-- <p>Car Reviews</p> -->
				<h2 class="fw-bold">Recent Blogs</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/truck-newimg.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#" class="fs-20 fw-bold">
						Can Unimogs go on motorways?
					</a>
				</h4>
				<p class="mb-0 fs-16">Unimogs are best suited to navigating difficult and supposedly impassable terrain. Whether it’s a rough woodland, snow-covered tracks, or deep mud, Unimogs are revered for their off-road capability - and rightly so! <a href="#" class="text-theme text-decoration-none">Read more</a></p>
				<div class="btm-text">
					<p class="text-theme fw-normal">12 Hours Ago</p>
				</div>
			</div>
            @forelse ($data as $key => $item)
            <div class="col-md-4">
                <div class="blog_item">
                    <a href="{{ route('front.cars.single_car_blog',$item->hashid) }}">
                        <img src="{{ check_file($item->image) }}" class="img-fluid" style="width: 377px; height: 248px;">
                        <h4 class="mt-4">{{ $item->title }}</h4>
                    </a>
                    <p class="text_color">
                        {!! Str::limit($item->description, 200) !!}
                    </p>
                    <p class="text-theme">{{$item->created_at->diffForHumans()}}</p>
                </div>
            </div>
            @empty
            <center><p>Recent Blogs Are Not Available.</p></center>
            @endforelse

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

