@extends('layouts.front_auth')
@section('title')
    Sign Up
@endsection
@section('content')
<div class="container-fluid mt-4 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="logintop_content">
					<h1 class="fw-bold">Create an account</h1>
					<p class="text_color mt-4">Have an account? <a href="{{route('front.signin')}}" class="text-theme">Sign in</a></p>
				</div>
			</div>
		</div>

		<div class="social_login">
			<div class="row">
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
				{{-- <div class="col-md-4">
					<a href="#">
						<div class="box">
							<i class="fa-brands fa-apple"></i>
							<p class="text_color">Continue with Apple</p>
						</div>
					</a>
				</div> --}}
				<div class="col-md-4 mx-auto">
					<a href="{{route('front.register')}}">
						<div class="box">
							<i class="fa-regular fa-envelope"></i>
							<p class="text_color">Continue with Email</p>
						</div>
					</a>
				</div>
			</div>

			{{-- <div class="col-md-6 mx-auto text-center">
				<div class="or_column">
					<h2 class="or_social text-theme" style="border-color: #999999">
						<span>OR</span>
					</h2>
				</div>
			</div> --}}

			{{-- <div class="row">
				<div class="col-md-4 mx-auto">
					<a href="{{route('front.register')}}">
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
