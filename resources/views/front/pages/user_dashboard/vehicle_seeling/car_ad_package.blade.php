@extends('layouts.front_dashboard')
@section('page-css')
    <style>
        .ad_package{
            cursor: pointer;
        }
    </style>
@endsection
@section('content')
    <div class="logintop_content">
        <h1 class="fw-bold"><i class="fa-solid fa-arrow-left"></i> Vehicles you’re selling</h1>
    </div>

    <div class="row mt-3">
        <div class="d-flex top_steps align-items-center">
            <div class="content active text-theme">Vehicle Details</div>
            <div class="border_line active"></div>
            <div class="content active text-theme">Your advert</div>
            <div class="border_line"></div>
            <div class="content text_color">Package & Payment</div>
        </div>
    </div>

    <h4 class="black_colored fs-16 mt-4">Choose your ad package</h4>
    <form action="{{ route('front.save_car_ad_package') }}" id="pkg_form" method="post">
        @csrf
        <input type="hidden" name="ad_id" value="{{ $ad_id }}">
        <input type="hidden" name="price" id="price" value="">

            <div class="row mt-3 private_seller_pkgs">
                @if (isset($packages) && count($packages) > 0)
                    @foreach ($packages as $val)
                    <div class="col-md-4">
                        <div class="ad_package package" data-price="{{ $val['price']}}">
                            <div class="ad_packageheader text-center">
                                <h2 class="text-white">{{ $val['pakg_name'] }}</h2>
                                <h5 class="text-white">{{ $val['weeks'] }}</h5>
                            </div>

                            <div class="ad_packagecontent">
                                <div class="text-center">
                                    <h2> {{$val['price']}}£ </h2>
                                    <p>{{isset($val['desc']) ? $val['desc'] : ''}}</p>
                                    {{-- <p class="photos">Uptown 100 Photos</p> --}}
                                </div>

                                <h4 class="fw-bold">Promote Your Car</h4>
                                <ul class="list-unstyled">
                                    @foreach ($val['featured'] as $feature)
                                    <li>
                                        {{$feature}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif


                {{-- <div class="col-md-4">
                    <div class="ad_package package" data-price="10">
                        <div class="ad_packageheader text-center">
                            <h2 class="text-white">4 Weeks</h2>
                        </div>

                        <div class="ad_packagecontent">
                            <div class="text-center">
                                <h2> 10£ </h2>
                                <p>Attract buyers - show off your car’s best features with</p>
                                <p class="photos">Uptown 100 Photos</p>
                            </div>

                            <h4 class="fw-bold">Promote Your Car</h4>
                            <ul class="list-unstyled">
                                <li>
                                    Get your car seen more by Being in the top tier of search
                                </li>

                                <li>
                                    Show off your car’s best feat ures with a YouTube video
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>

        <div class="vehicleadd_btm mt-2 text-end">
            <button type="submit" class="btn btn-theme">Go to Payment</button>
        </div>
    </form>
@endsection
@section('page-script')
    <script>
        $("body").on('click', '.package', function(e) {
            $('.package').not(this).removeClass('active')
            $(this).addClass('active')
            var price = $(this).data('price');
            $("#price").val(price);
        });

        $("#pkg_form").submit(function(e) {
            e.preventDefault();
            var price = $("#price").val();
            if (price) {
                var form = document.getElementById('pkg_form');
                form.submit();
            } else {
                alert('Please select one package required.');
            }
        });
    </script>
@endsection
