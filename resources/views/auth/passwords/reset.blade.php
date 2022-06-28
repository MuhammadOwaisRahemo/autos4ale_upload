@extends('layouts.front_auth')
@section('title', 'Reset Password')
@section('page-heading', 'Reset your password')
@section('auth_content')

<div class="form">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group  mb-2">
            <label for="email">{{ __('E-Mail Address') }}</label>

            <div class="email">
                <input id="email" type="email" class="form-control form__field @error('email') input--error @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group  mb-2">
            <label for="password">{{ __('Password') }}</label>

            <div class="new_pass">
                <input id="password" type="password" class="form-control form__field @error('password') input--error @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group  mb-2">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>

            <div class="new_password">
                <input id="password-confirm" type="password" class="form-control form__field" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group  mb-2 mb-0">
            <button class="btn login btn-block text-white" type="submit">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</div>
@endsection