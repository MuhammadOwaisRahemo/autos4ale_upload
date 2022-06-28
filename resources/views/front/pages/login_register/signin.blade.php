@extends('layouts.front_auth')
@section('title')
    Sign In
@endsection
@section('content')
<div class="container-fluid mt-4 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="logintop_content">
					<h1 class="fw-bold">Sign in</h1>
					<p class="text_color mb-2">Sign in to continue where you left off and view your saved adverts and saved searches.</p>
					<p class="text_color">New here? <a href="{{route('front.signup')}}" class="text-theme">Create an account</a></p>
				</div>
			</div>
		</div>

		<div class="social_login">
			<div class="row">
				{{-- <div class="col-md-2">
                </div> --}}
				<div class="col-md-4">
					<a href="{{route('auth.facebook')}}">
						<div class="box">
							<i class="fa-brands fa-facebook-f"></i>
							<p class="text_color">Continue with Facebook</p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="{{route('auth.google')}}">
						<div class="box">
							<i class="fa-brands fa-google"></i>
							<p class="text_color">Continue with Google</p>
						</div>
					</a>
				</div>
                <div class="col-md-4 mx-auto">
					<a href="{{route('front.login')}}">
						<div class="box">
							<i class="fa-regular fa-envelope"></i>
							<p class="text_color">Continue with Email</p>
						</div>
					</a>
				</div>
                {{-- <div class="col-md-2">
                </div> --}}
				<!-- <div class="col-md-4">
					<a href="#">
						<div class="box">
							<i class="fa-brands fa-apple"></i>
							<p class="text_color">Continue with Apple</p>
						</div>
					</a>
				</div> -->
			</div>

			{{-- <div class="col-md-6 mx-auto text-center">
				<div class="or_column">
					<h2 class="or_social text-theme">
						<span>OR</span>
					</h2>
				</div>
			</div> --}}

			{{-- <div class="row">
				<div class="col-md-4 mx-auto">
					<a href="{{route('front.login')}}">
						<div class="box">
							<i class="fa-regular fa-envelope"></i>
							<p class="text_color">Continue with Email</p>
						</div>
					</a>
				</div>
			</div> --}}

		</div>
	</div>
</div>
@endsection
