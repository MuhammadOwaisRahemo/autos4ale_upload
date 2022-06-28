@extends('layouts.front_dashboard')
@section('content')
    <div class="logintop_content">
        <h1 class="fw-bold"><i class="fa-solid fa-arrow-left"></i> Vehicles you’re selling</h1>
    </div>

    <div class="row mt-3">
        <div class="d-flex top_steps align-items-center">
            <div class="content active text-theme">Vehicle Details</div>
            <div class="border_line active"></div>
            <div class="content text_color">Your advert</div>
            <div class="border_line"></div>
            <div class="content text_color">Package & Payment</div>
        </div>
    </div>

    <h4 class="black_colored fs-16 mt-3">Now tell us your price and some more about the car</h4>
    <p class="text_color fs-12">Our recommended selling price is:</p>
    <form action="{{ route('front.vehicle_save_price') }}" id="car_price_form" method="post" class="car_price_form">
        @csrf
        <input type="hidden" name="car_ad_id" value="{{ $ad_id }}">
        <div class="user_form mt-4 mb-2">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-6 input-group mb-3">
                        <select name="category_id" id="category" class="form-control" required>
                            <option value=""> --Select Category-- </option>
                            @foreach ($categories as $category)
                                <option value="{{ @$category->id }}">{{ Str::ucfirst(@$category->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <select name="condition_type" id="condition_type" class="form-control" required>
                            <option value="">--Select Type--</option>
                            <option value="new">New</option>
                            <option value="used">Used</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <h6><strong>Fuel </strong> : </h6>
                        <label for="">&nbsp; &nbsp; Electric</label>
                        <input type="radio" name="fuel" class="fuel" id="fuel_1" value="electric" checked>
                        <label for="">Other</label>
                        <input type="radio" name="fuel" class="fuel" id="fuel_2" value="other">
                        <input type="hidden" name="fuel" disabled id="default_fuel" value="other">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group mb-3 price_field">
                        <input type="text" class="form-control" name="price" value="" id="price_field"
                            placeholder="Price" required>
                        <span class="input-group-text position-relative">
                            <button type="button" class="btn plus btn_plus">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <button type="button" class="btn minus btn_minus">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="fs-16 mb-0">Personal Details:</h4>
        <p class="fs-16 fw-500 text_color">Please enter your title, first name and last name.</p>

        <div class="row">
            <div class="col-md-2">
                <div class="mdropdown-carlist2 mt-2 position-relative text-start">
                    <select name="name_title" id="" class="form-control">
                        <option value="Dr">Dr</option>
                        <option value="Mr">Mr</option>
                        <option value="Sir">Sir</option>
                        <option value="Miss">Miss</option>
                    </select>
                    <img src="{{ asset('front_assets') }}/images/chevron.png" class="arrow_down">
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="row mt-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                </div>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                </div>
            </div>
        </div>

        <div class="col-md-7 mt-4">
            <div class="main_option">
                <input type="radio" name="trade_seller" id="option-1" value="trade" checked class="seller">
                <input type="radio" name="trade_seller" id="option-2" value="private" class="seller">
                <label for="option-1" class="option option-1">
                    <span>Trade Seller</span>
                </label>
                <label for="option-2" class="option option-2">
                    <span>Private Seller</span>
                </label>
            </div>
        </div>
        <div class="trade_seller_div">
            <div class="row mt-4">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="trade_name" placeholder="Trading Name"
                        id="trade_name">
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" name="address_1" placeholder="Address 1" id="address_1">
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" name="address_2" placeholder="Address 2" id="address_2">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="city" placeholder="Town / City" id="city">
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" name="country" placeholder="Country" id="country">
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" name="post_code" placeholder="Postcode" id="post_code">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="telephone" placeholder="Telephone" id="telephone">
                </div>
            </div>
        </div>
        <div class="vehicleadd_btm mt-4">
            <button type="submit" class="btn btn-theme">Continue</button>
        </div>
    </form>
@endsection
@section('page-script')
    <script>
        $("#category").change(function(e) {
            e.preventDefault();
            var cat_id = $(this).val();
             if (cat_id == "1" || cat_id == "2" || cat_id == "3") {
                    $(".fuel").prop('disabled',false);
                    $("#default_fuel").prop('disabled',true);
                    $("#fuel_1").prop('checked',true);

             }else{
                    $("#default_fuel").prop('disabled',false);
                    $(".fuel").prop('disabled',true);
                    $("#fuel_2").prop('checked',true);
             }

        });

        $(".seller").click(function(e) {
            var seller_type = $(this).val();
            if (seller_type == "private") {
                // $(".trade_seller_div").addClass('d-none');
                $(".trade_seller_div").hide('d-none');
                $("#trade_name").prop('disabled', true);
                $("#address_1").prop('disabled', true);
                $("#address_2").prop('disabled', true);
                $("#city").prop('disabled', true);
                $("#country").prop('disabled', true);
                $("#post_code").prop('disabled', true);
                $("#telephone").prop('disabled', true);

            } else {
                $(".trade_seller_div").show('d-none');
                $("#trade_name").prop('disabled', false);
                $("#address_1").prop('disabled', false);
                $("#address_2").prop('disabled', false);
                $("#city").prop('disabled', false);
                $("#country").prop('disabled', false);
                $("#post_code").prop('disabled', false);
                $("#telephone").prop('disabled', false);
            }
        });

        var value = 0;
        $(".btn_plus").click(function(e) {
            var value = Number($("#price_field").val());
            $("#price_field").val(value + 1);
        });
        $(".btn_minus").click(function(e) {
            var value = Number($("#price_field").val());
            $("#price_field").val(value - 1);
        });
    </script>
@endsection
