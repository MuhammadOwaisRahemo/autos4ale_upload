@extends('layouts.front_auth')
@section('title', 'Reset Password')
@section('page-heading', 'Enter your email to reset your password')
@section('auth_content')

<div class="form">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group mb-2">
            <label for="email">{{ __('Enter Your Valid E-Mail Address') }}</label>

            <div class="email">
                <input id="email" type="email" class="form-control form__field @error('email') input--error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group mb-0">
            <button class="btn login btn-block text-white" type="submit">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
@endsection