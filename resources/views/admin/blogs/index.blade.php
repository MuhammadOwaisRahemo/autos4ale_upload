@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="header-title">All Blogs</h4>
                <a href="{{route('admin.blog.add')}}" class="btn btn-sm btn-success">Add Blog</a>
            </div>
            <p class="sub-header">Following is the list of all the Blogs.</p>
            <table id="responsive-datatable" class="table table-bordered dt-responsive nowrap">
                <thead class="">
                    <tr>
                        <th width="20">S.No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($all_blogs) && count($all_blogs) > 0)
                    @foreach ($all_blogs as $key => $value)
                    <tr>
                        <td class="text-center align-middle">{{ $key+1 }}</td>
                        <td class="align-middle">{{ $value->title }}</td>
                        <td class="align-middle">{{ ucfirst($value->category->name) }}</td>
                       <td>@if ($value->status == 'draft')
                        <span class="badge badge-danger">draft</span>
                        @endif @if ($value->status == 'publish')
                        <span class="badge badge-success">publish</span>
                        @endif @if ($value->status == 'unpublish')
                        <span class="badge badge-warning">unpublish</span>
                        @endif</td>
                        <td class="text-center align-middle">
                            <a href="javascript:void(0);" class="btn btn-sm  btn-primary" title="Edit"> <i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.blog.edit',$value->hashid)}}" class="btn btn-sm  btn-warning" title="Edit"> <i class="fas fa-edit"></i></a>
                            <button type="button" onclick="ajaxRequest(this)" data-url="{{route('admin.blog.delete',$value->hashid)}}" class="btn btn-sm  btn-danger" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="12" align="center">NO Blogs Found</td>
                    </tr>
                    @endif

                </tbody>
            </table>
            {{@$all_blogs->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
</div>
@endsection
