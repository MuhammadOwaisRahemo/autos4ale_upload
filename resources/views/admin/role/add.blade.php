@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">{{ isset($edit) ? 'Edit' : 'Add' }} Role</li>
                </ol>
            </div>
            <h4 class="page-title">{{ isset($edit) ? 'Edit' : 'Add' }} Role</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0">{{ isset($edit) ? 'Edit' : 'Add' }} Role</h4>
            <p class="text-muted font-14 m-b-20">
                Here you can {{ isset($edit) ? 'edit' : 'add' }} Role.
            </p>

            <form action="{{ route('admin.roles.save') }}" class="ajaxForm" method="post" enctype="multipart/form-data">
                @csrf

                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="userRoleModal_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="userRoleModal_name" name="name" placeholder="Enter Staff Role Name" value="{{ $edit->name ?? null }}" required="">
                    </div>
                </div>

                <div class="col-12">
                    <fieldset>
                        <legend>Permission</legend>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Read</th>
                                    <th>Write</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5>Dashboard</h5>
                                    </td>

                                    <td>
                                        <div class="col-md-4">
                                            <input type="checkbox" id="permission_1" value="dashboard-read" title="Dashboard Read" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'dashboard-read' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Element Type</h5>
                                    </td>

                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_2" value="element-type-read" title="element type Read" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'element-type-read' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_3" value="element-type-write" title="element type Write" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'element-type-write' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_4" value="element-type-update" title="element type Update" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'element-type-update' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_5" value="element-type-delete" title="element type Delete" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'element-type-delete' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Category</h5>
                                    </td>

                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_6" value="category-read" title="Category Read" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'category-read' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_7" value="category-write" title="Category Write" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'category-write' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_8" value="category-update" title="Category Update" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'category-update' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_9" value="category-delete" title="Category Delete" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'category-delete' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>WireFrame</h5>
                                    </td>

                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_10" value="wireframe-read" title="WireFrame Read" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'wireframe-read' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_11" value="wireframe-write" title="WireFrame Write" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'wireframe-write' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_12" value="wireframe-update" title="WireFrame Update" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'wireframe-update' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_13" value="wireframe-delete" title="WireFrame Delete" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'wireframe-delete' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Customer</h5>
                                    </td>

                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_14" value="customer-read" title="Customer Read" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'customer-read' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_15" value="customer-update" title="Customer Update" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'customer-update' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Staff</h5>
                                    </td>

                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_16" value="staff-read" title="staff Read" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'staff-read' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_17" value="staff-write" title="staff Write" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'staff-write' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_18" value="staff-update" title="staff Update" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'staff-update' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_19" value="staff-delete" title="staff Delete" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'staff-delete' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Role</h5>
                                    </td>

                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_20" value="role-read" title="role Read" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'role-read' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_21" value="role-write" title="role Write" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'role-write' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_22" value="role-update" title="role Update" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'role-update' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-4">

                                            <input type="checkbox" id="permission_23" value="role-delete" title="role Delete" name="permission[]" @if (isset($edit)) @foreach ($user_permissions as $permission) {{ 'role-delete' == $permission->name ? 'checked' : null }} @endforeach @endif>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
                @if (isset($edit))
                <input type="hidden" name="role_id" value="{{ $edit->id }}">
                @endif
                <div class="form-group mb-3 text-right">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('page-scripts')
<script>
    $(document).ready(function() {
        $('.ajaxForm').submit(function(e) {
            e.preventDefault();
            let validations = $(".ajaxForm").validate();
            if (validations.errorList.length != 0) {
                return false;
            }
            var url = $(this).attr('action');
            var param = new FormData(this);
            my_ajax(url, param, 'post', function(res) {

            });
        })
    });
</script>
@endsection
