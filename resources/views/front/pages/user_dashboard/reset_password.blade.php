@extends('layouts.front_dashboard')
@section('content')
    <div class="logintop_content">
        <h1 class="fw-bold">Personal details</h1>
    </div>
    @error('error')
    <div class="alert alert-danger">
        <span>{{ $message }}</span>
    </div>
    @enderror
    <div class="person_detform subscription mt-4">
        <div class="row">
            <div class="col-12">
                <h4>Sign in details</h4>
                <form action="{{ route('front.save_password') }}">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" placeholder="Enter New Password" name="new_password">
                            @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <input type="password" class="form-control @error('confrim_password') is-invalid @enderror" placeholder="Enter Confrim Password" name="confrim_password">
                            @error('confrim_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('front.personal_details') }}" class="btn btn-primary">
                                Cancel
                            </a>
                        </div><br><br><br>
                        <div class="col-md-10">
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror" placeholder="Enter Old Password" name="old_password">
                            @error('old_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div><br><br><br>
                        <div class="col-md-10">
                            <button class="btn btn-primary">Save Change</button>
                        </div>
                    </div>
                </form>
                <h4 class="mt-3">Personal details</h4>
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <label for="name">Name : </label>
                        <span name="name"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->first_name ?? '' }}</strong>
                        </span><br><br>
                        <label for="dname">Display Name : </label>
                        <span name="dname"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->display_name ?? '' }}</strong>
                        </span>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('front.edit_personal_details') }}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                    </div>
                </div>
                <hr>
                @if (auth('user')->user()->trade_seller == 0)
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="trade_checkBox">
                            <label class="form-check-label" for="flexCheckDefault">
                              &nbsp; Trade Seller (If you would like to be a trade seller, tick this box)
                            </label>
                          </div>
                    </div>
                    <hr>
                    <div class="trade_seller d-none">
                        <h4 class="mt-3">Trade seller details</h4>
                        <form action="{{ route('front.save_trade_details') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <input type="text" class="form-control @error('trade_name') is-invalid @enderror"
                                        placeholder="Trade Name" value="{{ auth('user')->user()->trade_name ?? '' }}"
                                        name="trade_name">
                                    @error('trade_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control  @error('location') is-invalid @enderror"
                                        placeholder="Location" value="{{ auth('user')->user()->location ?? '' }}"
                                        name="location">
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('front.personal_details') }}" class="btn btn-primary">
                                        Cancel
                                    </a>
                                </div>

                                <div class="col-md-10 mt-3">
                                    <input type="text" class="form-control  @error('address') is-invalid @enderror"
                                        value="{{ auth('user')->user()->address ?? '' }}" placeholder="Address"
                                        name="address">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-5 mt-3">
                                    <input type="text" class="form-control  @error('country') is-invalid @enderror"
                                        placeholder="Your Country" value="{{ auth('user')->user()->country ?? '' }}"
                                        name="country">
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5 mt-3">
                                    <input type="text" class="form-control  @error('post_code') is-invalid @enderror"
                                        placeholder="Your Post Code" value="{{ auth('user')->user()->post_code ?? '' }}"
                                        name="post_code">
                                    @error('post_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-5 mt-3">
                                    <input type="text" class="form-control  @error('phone_number') is-invalid @enderror"
                                        placeholder="Your Phone" value="{{ auth('user')->user()->phone_number ?? '' }}"
                                        name="phone_number">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5 mt-3 upload_file">
                                    <label for="certificate">Upload Insurance Certificate</label>
                                    <input type="file"
                                        class="form-control  @error('insurance_certificate') is-invalid @enderror"
                                        id="certificate" name="insurance_certificate">
                                    @error('insurance_certificate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-5 mt-3 upload_file">
                                    <label for="trade_logo">Upload Trade Logo</label>
                                    <input type="file" class="form-control  @error('trade_logo') is-invalid @enderror"
                                        id="trade_logo" name="trade_logo">
                                    @error('trade_logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-5 mt-3">
                                    <div class="input-group url_group">
                                        <input type="url" class="form-control  @error('website_url') is-invalid @enderror"
                                            placeholder="Your Website" value="{{ auth('user')->user()->website_url ?? '' }}"
                                            name="website_url">
                                        <span class="input-group-text">
                                            <button type="button" class="btn">
                                                <img src="{{ asset('front_assets') }}/images/copy.svg">
                                            </button>
                                        </span>
                                        @error('website_url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><br><br><br><br>

                                <div class="col-md-10">
                                    <button class="btn btn-primary">Save Change</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif

                @if (auth('user')->user()->trade_seller == 1)
                <div class="trade_seller">
                    <h4 class="mt-3">Trade seller details</h4>
                    <div class="row align-items-center">

                        <div class="col-md-10">
                            <label for="trade_name">Trade Name : </label>
                            <span name="trade_name"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->trade_name ?? '' }}</strong> </span><br><br>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('front.edit_trade_seller') }}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </div>
                        <div class="col-md-10">
                            <label for="address">Address : </label>
                            <span name="address"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->address ?? '' }}</strong> </span><br><br>
                        </div>

                        <div class="col-md-10">
                            <label for="location">Location : </label>
                            <span name="location"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->location ?? '' }}</strong> </span><br><br>
                        </div>
                        <div class="col-md-10">
                            <label for="country">Country : </label>
                            <span name="country"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->country ?? '' }}</strong> </span><br><br>
                        </div>
                        <div class="col-md-10">
                            <label for="postal_code">Post Code : </label>
                            <span name="postal_code"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->postal_code ?? '' }}</strong> </span><br><br>
                        </div>
                        <div class="col-md-10">
                            <label for="phone_number">Phone Number : </label>
                            <span name="phone_number"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->phone_number ?? '' }}</strong> </span><br><br>
                        </div>
                        <div class="col-md-10">
                            <label for="website_url">Website Url : </label>
                            <span name="website_url"> &nbsp; &nbsp; <strong>{{ auth('user')->user()->website_url ?? '' }}</strong> </span><br><br>
                        </div>



                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script>
        $("#trade_checkBox").click(function (e) {
            e.preventDefault();
                var check = $("#trade_checkBox").val();
                if (check == 1) {
                    $("#trade_checkBox").attr("checked",true)
                    $("#trade_checkBox").val("0");
                    $(".trade_seller").removeClass('d-none');
                }else{
                    $("#trade_checkBox").attr("checked",false)
                    $("#trade_checkBox").val("1");
                    $(".trade_seller").addClass('d-none');
                }
        });
    </script>
@endsection
