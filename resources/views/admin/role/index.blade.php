@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Roles</li>
                </ol>
            </div>
            <h4 class="page-title">All Roles</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="header-title">All Roles</h4>
                @can('role-write')
                <a href="{{ route('admin.role.add') }}" class="btn btn-sm btn-primary">Add Role</a>
                @endcan
            </div>
            <p class="sub-header">Following is the list of all the Roles.</p>
            <table class="table dt_table table-bordered w-100 nowrap" id="laravel_datatable">
                <thead>
                    <tr>
                        <th width="20">S.No</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $k => $role)
                    <tr>
                        <td>
                            <p class="m-0 text-center">{{ $k + 1 }}</p>
                        </td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @can('role-update')
                            <a href="{{route('admin.role.edit', $role->hashid)}}" class="btn btn-warning btn-xs waves-effect waves-light">
                                <i class="fa fa-edit"></i>
                            </a>
                            @endcan
                            @can('role-delete')
                            <button type="button" onclick="ajaxRequest(this)" data-url="{{ route('admin.role.delete', $role->hashid) }}" class="btn btn-danger btn-xs waves-effect waves-light">
                                <i class="fa fa-trash"></i>
                            </button>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            @if (!empty($roles))
            {{$roles->withQueryString()->links('vendor.pagination.bootstrap-4')}}
            @endif
        </div>
    </div>
</div>
@endsection

@section('page-scripts')
@include('admin.partials.datatable')
@endsection
