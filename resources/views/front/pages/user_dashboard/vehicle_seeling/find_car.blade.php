@extends('layouts.front_dashboard')
@section('page-css')
    <style>
        .error{
            color: red;
        }
    </style>
@endsection
@section('content')
    <div class="logintop_content">
        <h1 class="fw-bold"><i class="fa-solid fa-arrow-left"></i> Vehicles you’re selling</h1>
    </div>

    <div class="row mt-3">
        <div class="d-flex top_steps align-items-center">
            <div class="content active">Vehicle Details</div>
            <div class="border_line active"></div>
            <div class="content text_color">Your advert</div>
            <div class="border_line"></div>
            <div class="content text_color">Package & Payment</div>
        </div>
    </div>
    <form class="car_details_findClas" method="post">
        @csrf
        <div class="user_form mt-4 mb-2">
            <div class="row">
                <div class="col-md-10">
                    <center><span class="text-danger text-center vehicle_error"></span></center>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" required id="reg" placeholder="Enter Car Registration" name="reg">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="milage" name="milage" required placeholder="Enter Milage" >
                </div>

            </div>
        </div>
        <div class="vehicleadd_btm">
            <p class="text_color mb-0">Please make sure the mileage is accurate.</p>
            <button class="btn btn-theme px-3" id="car_details_find">Find Car Details
                <div class="spinner-border ml-5 btn_loader d-none" style="margin-left: 10px; width:20px; height:20px;"
                    role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </button>
        </div>
    </form>

    <form  action="{{ route('front.save_car_ad') }}"  method="post">
        @csrf
        <div class="vehicle_details"></div>
    </form>

    <input type="hidden" id="reg_web" value="{{ $data->reg }}">
    <input type="hidden" id="milage_web" value="{{ $data->milage }}">
    {{-- <div class="vehicle_saleaddbox mt-4">
        <div class="row vehicle_detail">
            <div class="col-md-6">
                <h4>Vehicle details found:</h4>
                <h4 class="mt-3 vehicle_title"></h4>
                <p class="text_color">1.2 PureTech GT Line Euro 6 (s/s) 5dr</p>
            </div>
            <div class="col-md-6 car_details">
                <div class="car_details">
                    <div class="row">
                        <div class="col">
                            <h4 class="fw-normal">Fuel type</h4>
                        </div>
                        <div class="col">
                            <h4 class="text-theme">Petrol</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4 class="fw-normal">Engine size</h4>
                        </div>
                        <div class="col">
                            <h4 class="text-theme">1199cc</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="fw-normal">Body type</h4>
                        </div>
                        <div class="col">
                            <h4 class="text-theme">SUV</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="fw-normal">Colour</h4>
                        </div>
                        <div class="col">
                            <h4 class="text-theme">Bronze</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="fw-normal">Transmission</h4>
                        </div>
                        <div class="col">
                            <h4 class="text-theme">Manual</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="fw-normal">Date of first registration</h4>
                        </div>
                        <div class="col">
                            <h4 class="text-theme">26/01/2018</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-end vehicleadd_btm me-md-5 pe-md-4">
        <a href="vehicleadd_price.html" class="btn btn-theme">Continue</a>
    </div> --}}
@endsection
@section('page-script')
    <script>
        $(document).ready(function() {
            validations = $(".car_details_findClas").validate();
            $(".car_details_findClas").submit(function(e) {
                e.preventDefault();
                validations = $(".car_details_findClas").validate();
                if (validations.errorList.length != 0) {
                    return false;
                }
                var reg = $("#reg").val();
                var milage = $("#milage").val();

                $(".btn_loader").removeClass('d-none');
                $("#car_details_find").attr('disabled', true);
                $(".vehicle_error").html('');
                $(".vehicle_details").html('');
                $.ajax({
                    type: "get",
                    url: "{{ route('front.find_car_details') }}",
                    data: {
                        reg: reg,
                        milage: milage
                    },
                    dataType: "json",
                    success: function(res) {
                        if (res.status == 200) {
                            $(".vehicle_details").html(res.html);
                        } else if (res.status == 404) {
                            $(".vehicle_error").html(res.error);
                        }
                        $(".btn_loader").addClass('d-none');
                        $("#car_details_find").attr('disabled', false);
                    }
                });
            });
        });

        @if (isset($data->reg) && isset($data->milage))
            $(document).ready(function() {
                var reg_web = $("#reg_web").val();
                var milage_web = $("#milage_web").val();
                $("#reg").val(reg_web);
                $("#milage").val(milage_web);
                $("#car_details_find").trigger('click');
            });
        @endif
    </script>
@endsection
