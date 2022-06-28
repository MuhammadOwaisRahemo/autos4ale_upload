@extends('layouts.front_auth')
@section('title')
    Regsiter
@endsection
@section('content')
<div class="container-fluid mt-4 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logintop_content">
                    <h1 class="fw-bold">
                        <a href="javascript:void(0)" class="text-decoration-none" style="color: #333333"><i class="fa-solid fa-arrow-left"></i></a> Sign Up
                    </h1>
                    <p class="text_color mb-2">Verify your email which you provided so you can set up password.</p>
                </div>
            </div>
        </div>

        <div class="login_frm">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="{{route('register.saveUser')}}" method="post" class="ajaxForm">
                        @csrf

                        <p class="text-muted mb-2 mt-3">Email verification Link sent to email mentioned below</p>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="row mb-4 mt-4">
                            <div class="col">
                                <a href="javascript:void(0)">Forgot password?</a>
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn btn-theme px-5 py-2">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-script')
<script>
    $(document).ready(function () {
        $('.ajaxForm').submit(function(e){
            e.preventDefault();
            let parms = new FormData(this);
            let url = $(this).attr('action');
            my_ajax(url,parms,'post',null,true)
        })
    });
</script>
@endsection
