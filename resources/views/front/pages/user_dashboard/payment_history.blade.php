@extends('layouts.front_dashboard')
@section('content')
<div class="logintop_content">
    <h1 class="fw-bold">Payment History</h1>
</div>

<div class="user_form subscription mt-4">
    <div class="row">
        <div class="col-md-10">
            <button type="submit" class="btn btn-theme">+ Create an Advert</button>
            <p class="mt-3 mb-0">
                You currently have no orders to view.
            </p>
            <p class="mt-2">
                Your VAT receipts will appear here once you have listed your first advert.
            </p>
        </div>

    </div>
</div>
@endsection
