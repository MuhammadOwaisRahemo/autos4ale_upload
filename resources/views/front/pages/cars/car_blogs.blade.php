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
                    @forelse  ($data as $key => $item)
                    @if ($key < 3 )
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
                    @endif
                    @empty
                    <center><p>Latest Blogs Are Not Available.</p></center>
                    @endforelse
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
								<img src="{{ check_file($item->image) }}" class="img-fluid" style="width: 377px; height: 248px;">
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

