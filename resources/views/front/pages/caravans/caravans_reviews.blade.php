@extends('layouts.front')
@section('content')
<div class="container-fluid py-4">
	<div class="container">
		<div class="row">
			<div class="text-center top_content">
				<!-- <p>Check out the latest motorhome reviews from our team</p> -->
				<h2 class="fw-bold">Latest Reviews</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/review_carvna.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Coachman Lusso Caravan Review
					</a>
				</h4>
				<p class="mb-0">With a single-axle and twin-axle option, the Lusso offers luxury living pitch-perfect practicality.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/review_carvna.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Coachman Lusso Caravan Review
					</a>
				</h4>
				<p class="mb-0">With a single-axle and twin-axle option, the Lusso offers luxury living pitch-perfect practicality.</p>
				<div class="btm-text text-end mt-2">
					<p>Expert review | 10 days ago</p>
				</div>
			</div>

			<div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/review_carvna.png" class="img-fluid mx-auto d-block">
				</a>
				<h4 class="mt-3">
					<a href="#">
						Coachman Lusso Caravan Review
					</a>
				</h4>
				<p class="mb-0">With a single-axle and twin-axle option, the Lusso offers luxury living pitch-perfect practicality.</p>
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
						<img src="{{ asset('front_assets') }}/images/automob.png" class="img-fluid">
					</div>
				</div>
				<div class="col-md-7">
					<div class="newbest_choice newbest_choicenew">
						<h1 class="fw-bold">Why should you get a pre-purchase inspection on your next caravan?</h1>
						<p class="text_color">With an Approved Workshop Scheme (AWS) Pre-Owned Pre-Purchase Inspection, you will get a detailed report on the visual and/or operational condition of the caravan you are looking to purchase before you commit to buy.</p>

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
				<h2 class="fw-bold">Recent Blogs</h2>
			</div>
		</div>

		<div class="row cars_reviews mt-4">
			{{-- <div class="col-md-4">
				<a href="#">
					<img src="{{ asset('front_assets') }}/images/van-review.png" class="img-fluid mx-auto d-block w-100">
				</a>
				<h4 class="mt-3">
					<a href="#" class="fs-20">
						Auto-Sleepers Ford Air Campervan Review
					</a>
				</h4>
				<p class="mb-0 fs-16">After practical holidays that up the style stakes on the road? Meet the Auto-Sleepers’ Ford Air campervan.</p>
				<div class="btm-text mt-3">
					<p class="text-theme fa-16 fw-normal">12 Hours Ago</p>
				</div>
			</div> --}}
            @forelse ($data as $key => $item)
            {{-- @if ($key > 2 ) --}}
            <div class="col-md-4">
                <div class="blog_item">
                    <a href="{{ route('front.cars.single_car_blog',$item->hashid) }}">
                        <img src="{{ check_file($item->image) }}" class="img-fluid" style="width: 416px; height: 237px;">
                        <h4 class="mt-4">{{ $item->title }}</h4>
                    </a>
                    <p class="text_color">
                        {!! Str::limit($item->description, 200) !!}
                    </p>
                    <p class="text-theme">{{$item->created_at->diffForHumans()}}</p>
                </div>
            </div>
            {{-- @endif --}}
            @empty
            <center><p>Recent Blogs Are Not Available.</p></center>
            @endforelse
		</div>

	</div>
</div>

<div class="container-fluid grey_bg py-5 pt-3 mt-5">
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

