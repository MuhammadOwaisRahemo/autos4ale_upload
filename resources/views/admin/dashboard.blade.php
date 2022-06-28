@php
use Carbon\Carbon;
$last_three_month = Carbon::now()
    ->now()
    ->subMonth(3);
$this_month = Carbon::now();
$start = $last_three_month->format('Y-m-d');
$end = $this_month->format('Y-m-d');
$default_date = $start . ' to ' . $end;
@endphp
@extends('layouts.admin')
@section('page-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form class="row align-items-end justify-content-end" id="filter_search" method="get">
                        <div class="form-group col-md-5">
                            <label>Search By Date</label>
                            <div class="input-daterange input-group " id="date-range">
                                <input type="text" class="form-control date_range" name="date_range"
                                    value="{{ isset($request->date_range) ? $request->date_range : $default_date }}"
                                    autocomplete="off" placeholder="Start Date" />

                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-sm btn-primary" style="margin-bottom: 18px;">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>Filtered Data For {{ $date_diff > 1 ? $date_diff . ' Days' : $date_diff . ' Day' }}</h5>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="font-weight-normal text-primary" data-plugin="counterup">{{ count($all_users) }}
                            </h2>
                            <h5>Users</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid -->

    </div>
@endsection
@section('page-scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(".date_range").flatpickr({
            mode: "range",
            dateFormat: "Y-m-d",
        });
    </script>
@endsection
