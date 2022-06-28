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

    <h4 class="black_colored fs-16 mt-3">Now tell us your price and some more about the car</h4>
    <p class="text_color fs-12">Our recommended selling price is:</p>
    <form action="{{ route('front.save_car_details') }}" method="post">
        @csrf
        <div class="user_form mt-4 mb-2">
            <div class="row">
                <div class="col-md-5">
                    <div class="input-group mb-3 price_field">
                        <input type="text" class="form-control" id="price_field" name="price" value="{{ $price }}" required>
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
        <input type="hidden" name="detail_id" value="{{ $detail_id }}">

        <h4 class="fs-16 mb-0">About your car::</h4>
        <p class="fs-16 fw-500 text_color">Change or add to your car’s details. You can see how your ad will look on the
            right.</p>

        <div class="row vehicleadd_details">
            <div class="col-md-12">
                <input type="text" class="form-control active" name="ad_title" placeholder="Title"
                    value="{{ $title }}" readonly>


                <div class="position-relative edit">
                    <input type="text" class="form-control mt-3" maxlength="30" placeholder="Subtittle i.e Full service history" name="subtitle">
                    <i class="text_color fs-14">0/30</i>
                </div>


                <p class="text_color fs-12 mt-2">Use this to grab buyers’ attention from the search results page.</p>

                <div class="position-relative edit active">
                    <textarea class="form-control" id="feature_des" name="feature" required>3D Connected Navigation, 18in Alloy Wheels - Detroit - Diamond Cut, Bluetooth Telephone Facility, Dark Tinted Rear Side and Tailgate Windows, Front and Rear Parking Sensors, Full LED Headlights, LED Foglamps including Static Cornering Function, Lane Departure Warning System, Mirror Screen, Programmable Cruise Control and Speed Limiter, Smartphone Charging Plate, Visio Park 1 - 180 Degree Colour Reversing Camera and Front Parking Sensors, Voice Recognition - Radio-Navigation-Telephony Features, Airbags - Driver and Front Passenger Side, Airbags - Front and Rear Curtain, Alarm, DSCS - Dynamic Stability Control and ASR - Electronic Anti-Skid System, Electric Parking Brake includes Hill Assist, Mistral Full-Grain Perforated Leather Steering Wheel with Aikinite Stitch Detail and Satin Chrome GT Line Emblem, Rear LED Peugeot Signature Claw Effect Lights - With Daylight Function</textarea>
                    <i class="fa-regular fa-pen-to-square"></i>
                </div>
                <p class="text_color fs-12 mt-2">These will appear in your ad. You can change them using the Add/Remove
                    option.</p>

                <div class="position-relative edit active">
                    <input type="text" class="form-control" value="2 Owners, Full service history, MOT Due: 29/04/2022" name="history_maintenance">
                    <i class="fa-regular fa-pen-to-square"></i>
                </div>
                <p class="text_color fs-12 mt-2">Tell buyers about your car’s history and MOT.</p>

                <div class="position-relative edit">
                    <input type="text" class="form-control" placeholder="Advert Text" maxlength="1000" name="advert_text" required>
                    <i class="text_color fs-14">0/1000</i>
                </div>
                <p class="text_color fs-12 mt-2">This will appear at the top of your ad. Use it to persuade buyers to read
                    further.</p>
                    <div class="position-relative ">
                        <textarea class="form-control"  id="specification_des" name="specification" placeholder="Specification"></textarea>
                    </div>
                    <p class="text_color fs-12 mt-2">Tell buyers about your car’s specification .</p>
                    <div class="position-relative">
                        <textarea class="form-control"  id="running_cost_des" name="running_cost" placeholder="Running Cost"></textarea>
                    </div>
                    <p class="text_color fs-12 mt-2">Tell buyers about your car’s running cost .</p>
                    <div class="position-relative">
                        <textarea class="form-control"  id="basic_history_des" name="basic_history" placeholder="Basic History"></textarea>
                    </div>
                    <p class="text_color fs-12 mt-2">Tell buyers about your car’s basic history .</p>
                <div class="position-relative edit">
                    <input type="url" name="video_url" class="form-control"
                        placeholder="e.g. https://www.youtube.com/watch?v=-JnHT5fTOnQ">
                    <i class="text_color fs-14">0/100</i>
                </div>

                <p class="text_color fs-12 mt-2">This will enable you to show a YouTube video on your advert when purchasing
                    the premium or ultimate packages</p>

            </div>
        </div>

        <div class="vehicleadd_btm mt-2 text-end">
            <button type="submit" class="btn btn-theme">Continue</button>
        </div>
    </form>
@endsection
@section('page-script')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('specification_des');
        CKEDITOR.replace('running_cost_des');
        CKEDITOR.replace('basic_history_des');
        CKEDITOR.replace('feature_des');
       var value = 0;
        $(".btn_plus").click(function (e) {
           var value = Number($("#price_field").val());
           $("#price_field").val(value+1);
        });
        $(".btn_minus").click(function (e) {
           var value = Number($("#price_field").val());
           $("#price_field").val(value-1);
        });
    </script>
@endsection
