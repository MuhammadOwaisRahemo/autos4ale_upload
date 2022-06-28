@extends('layouts.front_dashboardlight')
@section('content')
<div class="container-fluid mt-5 blog_view">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="fw-bold">{{ $data->title }}</h1>

				<p class="mt-5">
					{!! substr($data->description, 0, 110)  !!}
				</p>
				<img src="{{ check_file($data->image) }}" class="img-fluid">

				<p class="mt-3">{!! substr($data->description, 110)  !!}</p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid grey_bg py-5 mt-3">
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

