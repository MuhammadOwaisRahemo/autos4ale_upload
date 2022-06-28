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
                        <a href="javascript:void(0)" class="text-decoration-none" style="color: #333333"><i class="fa-solid fa-arrow-left"></i></a> Create Password
                    </h1>
                    <p class="text_color mb-2">Define a secure passward for your email</p>
                </div>
            </div>
        </div>

        <div class="login_frm">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="{{route('register.setUserPassword')}}" method="post" class="ajaxForm">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$id ?? null}}">
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                            <label for="password">Type Your Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password" name="password" id="password" required>
                            </div>
                        </div>
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                            <label for="confirmed">Re-Type your Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your confirmed Password" name="confirmed" id="confirmed" required>
                            </div>
                        </div>
                        <div class="row mb-4 mt-4">
                            <div class="col text-end">
                                <button type="submit" class="btn btn-theme px-5 py-2">Set Password</button>
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
