@extends('layouts.front_dashboard')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('front_assets/plugin/imageupload/src/image-uploader.css') }}">
@endsection
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

    <h4 class="black_colored fs-16 mt-3">Photos of your car</h4>
    <p class="text_color fs-12">Your advert can contain up to 100 photos. Free adverts are limited to the first 5 photos.
    </p>
    <form action="{{ route('front.save_car_images') }}" enctype="multipart/form-data" method="post" class="ajaxForm">
        @csrf
        <input type="hidden" name="ad_id" value="{{ $ad_id }}">
        <div class="form-group mb-3 input-field">
            <label>Upload Car Images</label>
            <div class="input-images-1" style="padding-top: .5rem;"></div>
            @if ($errors->has('images'))
                <div class="error text-danger">{{ $errors->first('images') }}</div>
            @endif
        </div>

        <div class="vehicleadd_btm mt-2 text-end">
            <button type="submit" class="btn btn-theme">Continue</button>
        </div>
    </form>
@endsection
@section('page-script')
    <script src="{{ asset('front_assets/plugin/imageupload/src/image-uploader.js') }}"></script>
    <script>
        $('.input-images-1').imageUploader({
            imagesInputName: 'images',
            required: true,
            minFiles: 5,
            maxFiles: 20,
        });
        $(document).ready(function() {
        $('.ajaxForm').submit(function(e) {
            e.preventDefault();
            var url = $(this).attr('action');
            var param = new FormData(this);
            my_ajax(url, param, 'post', function(res) {
            });
        })
    });
    </script>
@endsection
