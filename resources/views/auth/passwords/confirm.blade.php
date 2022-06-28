@extends('layouts.front_auth')
@section('title', 'Confirm Password')
@section('page-heading', 'Please confirm your password before continuing')
@section('auth_content')
<div class="title">{{ __('Confirm Password') }}</div>

<div class="form">
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-group mb-2">
            <label for="password">{{ __('Password') }}</label>

            <div class="current_pass">
                <input id="password" type="password" class="form-control form__field @error('password') input--error @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group mb-0">
            <button class="btn login btn-block text-white" type="submit">
                {{ __('Confirm Password') }}
            </button>
        </div>
    </form>
</div>
@endsection

@section('after-page')
<div class="row mt-3">
    <div class="col-12 text-center">
        @if (Route::has('password.request'))
        <a class="text-dark ml-1" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </div> <!-- end col -->
</div>
@endsection