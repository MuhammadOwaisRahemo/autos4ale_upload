@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-picture card-box">
                <div class="profile-info-name">
                    <img src="{{ check_file($data->image, 'user') ?? '' }}"
                        class="rounded-circle avatar-xl img-thumbnail float-left mr-3" alt="profile-image">

                    <div class="profile-info-detail overflow-hidden">
                        <h4 class="m-0">{{ $data->first_name }}</h4>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!--/ meta -->

            <div class="card-box">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Trade</h4>
                        <p>{{ $data->trade_seller == 1 ? 'Yes' : 'NO' }}</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Trade Name</h4>
                        <p>{{ $data->trade_name ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Location</h4>
                        <p>{{ $data->location ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Address</h4>
                        <p>{{ $data->address ?? '-' }}</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Country</h4>
                        {!! $data->country !!}

                    </div>
                    <div class="col-md-4">
                        <h4>Post Code</h4>
                        <p>{{ $data->postal_code }}</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Phone Number</h4>
                        <p>{{ $data->phone_number }}</p>
                    </div>
                </div>
                <hr><br>
                <div class="row">
                    <div class="col-md-6">
                        <center>
                            <h3>Trade Logo</h3>
                        </center><br>
                        <img src="{{ check_file($data->trade_logo) }}" style="width: 512px; height: 512px;" alt="">
                    </div>

                    <div class="col-md-6">
                        <center>
                            <h3>Insurance Certificate</h3>
                        </center><br>
                        <img src="{{ check_file($data->insurance_certificate) }}" style="width: 512px; height: 512px;" alt="">
                    </div>

                    <br>
                </div>
            </div>

        </div>
    </div>
@endsection
