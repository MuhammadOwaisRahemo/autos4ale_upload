@extends('layouts.front')
@section('content')
<div class="container-fluid blogs_section mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<h2 class="fw-bold">Latest Blogs</h2>
			</div>
			<div class="col-12">
				<div class="row">
					{{-- <div class="col-md-4">
						<div class="blog_item">
							<a href="blog-single.html">
								<img src="{{ asset('front_assets') }}/images/blog-img.png" class="img-fluid">
								<h4 class="mt-4">Sunra MIKU SUPER Scooter (2021 - ) Electric review</h4>
							</a>
							<p class="text_color">
								A van is a fantastically useful vehicle, and whether you’re going to use it primarily for personal or for work purposes, it’ll become an integral…
							</p>
							<p class="text-theme">12 Hours Ago</p>
						</div>
					</div> --}}
                    @forelse  ($data as $key => $item)
                    @if ($key < 3 )
                    <div class="col-md-4">
						<div class="blog_item">
							<a href="{{ route('front.cars.single_car_blog',$item->hashid) }}">
								<img src="{{ check_file($item->image) }}" class="img-fluid" style="width: 415px; height: 271px;">
								<h4 class="mt-4">{{ $item->title }}</h4>
							</a>
							<p class="text_color">
								{!! Str::limit($item->description, 200) !!}
							</p>
							<p class="text-theme">{{$item->created_at->diffForHumans()}}</p>
						</div>
					</div>
                    @endif
                    @empty
                    <center><p>Latest Blogs Are Not Available.</p></center>
                    @endforelse
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container-fluid py-5">
	<div class="container">
		<div class="advertise">
			<div class="row g-0">
				<div class="col-md-5">
					<div class="right_img">
						<img src="{{ asset('front_assets') }}/images/left-bike.png" class="img-fluid w-100" />
					</div>
				</div>
				<div class="col-md-7">
					<div class="madvertise_text van_blogadvert">
						<h2 class="fw-bold">Royal Enfield Himalayan adventure/retro (2018-) review</h2>
						<p class="text_color">After 50 years on our roads, the beloved Honda Civic is receiving the electric treatment. Find out how hybrid technology has transformed one of Honda’s best-selling cars.</p>
						<a href="#" class="btn btn-theme py-2 px-4">Read More</a>
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
				<h2 class="fw-bold">Recent Blogs</h2>
			</div>
			<div class="col-12 mt-4">
				<div class="row">
                    @forelse ($data as $key => $item)
                    @if ($key > 2 )
                    <div class="col-md-4">
						<div class="blog_item">
							<a href="{{ route('front.cars.single_car_blog',$item->hashid) }}">
								<img src="{{ check_file($item->image) }}" class="img-fluid" style="width: 415px; height: 271px;">
								<h4 class="mt-4">{{ $item->title }}</h4>
							</a>
							<p class="text_color">
								{!! Str::limit($item->description, 200) !!}
							</p>
							<p class="text-theme">{{$item->created_at->diffForHumans()}}</p>
						</div>
					</div>
                    @endif
                    @empty
                    <center><p>Recent Blogs Are Not Available.</p></center>
                    @endforelse
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

