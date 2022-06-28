@extends('layouts.front_dashboard')
@section('content')
<div class="logintop_content">
    <h1 class="fw-bold"><i class="fa-solid fa-arrow-left"></i> Vehicles you’re selling</h1>
</div>

<div class="row mt-3">
    <div class="d-flex top_steps align-items-center">
        <div class="content active text-theme">Vehicle Details</div>
        <div class="border_line active"></div>
        <div class="content active">Your advert</div>
        <div class="border_line"></div>
        <div class="content text_color">Package & Payment</div>
    </div>
</div>

<h4 class="black_colored fs-16 mt-3">Contact details</h4>
<p class="text_color fs-12">How would you like buyers to contact you?</p>
<form action="{{ route('front.save_car_contact_details') }}" method="post">
    @csrf
    <input type="hidden" name="ad_id" value="{{ $ad_id }}">
<div class="col-md-9">
    <div class="row mt-3">
        <div class="col-md-6">
            <input type="text" class="form-control" name="trade_name" required placeholder="Trading Name">
        </div>

        <div class="col-md-6">
            <input type="text" class="form-control" name="contact_no" required placeholder="Contact No">
        </div>
    </div>
</div>

<div class="col-md-7 mt-4">
    <div class="main_option">
        <input type="radio"  id="option-1" class="email" checked value="contact">
        <input type="radio"  id="option-2" class="email" value="dont_contact">
        <label for="option-1" class="option option-1 fs-14 fw-500">
            <span>Contact By Email</span>
        </label>
        <label for="option-2" class="option option-2 fs-14 fw-500">
            <span>Dont Contact</span>
        </label>
    </div>
</div>

<div class="col-md-5 mt-4">
    <input type="email" class="form-control" id="email_check" name="email" value="{{ auth('user')->user()->email }}">

    <input type="text" class="form-control mt-3" name="post_code" required placeholder="Location of car (Postcode)">
</div>

<div class="vehicleadd_btm mt-2 text-end">
    <button type="submit" class="btn btn-theme">Continue</a>
</div>
@endsection
@section('page-script')
    <script>
        $(".email").click(function (e) {
                var email = $(this).val();
                if (email == "dont_contact") {
                    $("#email_check").addClass('d-none');
                    $("#email_check").prop('disabled',true);
                    $("#option-1").attr('checked', false);
                    $("#option-2").attr('checked', true);
                }else{
                    $("#email_check").removeClass('d-none');
                    $("#email_check").prop('disabled',false);
                    $("#option-1").attr('checked', true);
                    $("#option-2").attr('checked', false);
                }
        });
    </script>
@endsection
