@extends('layouts.front_dashboard')
@section('content')
<div class="logintop_content">
    <h1 class="fw-bold">My Vehicle</h1>
</div>

<form>
    <div class="user_form mt-4">
        <div class="row">
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Enter Car Registration">
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Enter Milage">
            </div>
            <div class="col-md-10 text-md-end mt-4">
                <button type="button" class="btn btn-theme">Find Car</button>
            </div>
        </div>
    </div>
</form>
@endsection
