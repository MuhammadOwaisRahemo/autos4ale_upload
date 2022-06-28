@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{ $title }}</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="header-title">{{ $title }}</h4>
                </div>
                <p class="sub-header">Following is the list of all the all users.</p>
                <table class="table dt_table table-bordered w-100 nowrap">
                    <thead>
                        <tr>
                            <th width="20">S.No</th>
                            <th>First Name</th>
                            <th>SurName</th>
                            <th>Display Name</th>
                            <th>Email</th>
                            <th>Trade Seller</th>
                            <th>Signup Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $k => $user)
                            <tr>
                                <td>
                                    <p class="m-0 text-center">{{ $k + 1 }}</p>
                                </td>
                                <td>{{ $user->first_name ?? '-' }}</td>
                                <td>{{ $user->sur_name ?? '-' }}</td>
                                <td>{{ $user->display_name ?? '-' }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->trade_seller == 1 ? 'Yes' : 'No' }}</td>
                                <td>{{ $user->signup_method }}</td>
                                <td>
                                    @if ($user->trade_seller == 1)
                                        <a href="{{ route('admin.seller_details',$user->hashid) }}" class="btn btn-primary btn-sm waves-effect waves-light">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if (!empty($data))
                    {{ $data->withQueryString()->links('vendor.pagination.bootstrap-4') }}
                @endif
            </div>
        </div>
    </div>

@endsection
