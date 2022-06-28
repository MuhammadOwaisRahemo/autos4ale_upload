@extends('layouts.front_dashboard')
@section('content')
<div class="logintop_content">
    <h1 class="fw-bold">Vehicles you’re selling</h1>
</div>

<a href="{{ route('front.find_car') }}" class="btn btn-theme mt-3">+ Create an Advert</a>

<div class="vehicle_saleboxes subscription mt-4">
    <h4>Adverts summary</h4>
    <div class="row align-items-center mt-4">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="text_color">Live adverts</h5>
                    <h1 class="numbers">00</h1>
                </div>
                <div class="col-md-3">
                    <h5 class="text_color">Soon to expire</h5>
                    <h1 class="numbers">00</h1>
                </div>
                <div class="col-md-3 p-0">
                    <h5 class="text_color">Incomplete adverts</h5>
                    <h1 class="numbers">00</h1>
                </div>
                <div class="col-md-3">
                    <h5 class="text_color">Advert views</h5>
                    <h1 class="numbers">00</h1>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="vehicle_saleboxes subscription">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="text_color" style="font-size: 16px; color: #333333;">Response</h5>
                        <h1 class="numbers"><i class="fa-solid fa-phone"></i> 00</h1>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text_color text-end" style="font-size: 16px; color: #333333; font-weight: 500;">7 days <img src="{{ asset('front_assets') }}/images/chevron.png" width="10"></h5>
                        <h1 class="numbers"><i class="fa-solid fa-bookmark ms-3"></i> 00</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
