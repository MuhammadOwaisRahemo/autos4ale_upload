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
                    <h1 class="fw-bold">
                        <a href="{{url('/register')}}" class="text-decoration-none" style="color: #333333"><i class="fa-solid fa-arrow-left"></i></a> Sign in
                    </h1>
                    <p class="text_color mb-2">Sign in to continue where you left off and view your saved adverts and saved searches.</p>
                    <p class="text_color">New here? <a href="{{url('/register')}}" class="text-theme">Create an account</a></p>
                </div>
            </div>
        </div>

        <div class="login_frm">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="{{route('front.login')}}" method="POST" class="ajaxForm">
                        @csrf
                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email" required>

                        <div class="input-group mb-3 mt-3 position-relative">
                            <input type="password" class="form-control" placeholder="Enter Your Password" name="password" required>
                            <span class="input-group-text" >
                                <button type="button" class="btn">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </span>
                        </div>

                        <div class="row mb-4">
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
