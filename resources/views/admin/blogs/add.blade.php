@extends('layouts.admin')
@section('page-css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2-search.select2-search--inline {
        margin-top: -15px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
        cursor: default !important;
        padding-left: 5px !important;
        padding-right: 5px !important;
        color: black !important;
        height: auto;
    }

    .error{
        color: red;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.blogs') }}">Blogs</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="header-title m-t-0">{{$title}}</h4>
            <p class="text-muted font-14 m-b-20">
                Here you can {{$title}}.
            </p>

            <form action="{{route('admin.blog.save')}}" class="ajaxForm" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row">
                    <div class="form-group mb-3 col-md-6">
                        <label for="title">Title<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="title" value="{{ $edit->title ?? '' }}" placeholder="Enter Blog Title" required>
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="category_id">Category<span class="text-danger">*</span></label>
                        <select class="form-control" name="category_id" id="category_id" required>
                            <option value=""> --Select Category-- </option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" @if (!empty($edit))
                                {{ $category->id == $edit->category_id ? 'selected' : '' }}
                                @endif>
                                {{$category->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="permissions">Tags</label>
                        <select class="form-control select2" multiple name="tags[]" id="tags">
                            @foreach ($tags as $tag)
                            <option value="{{$tag->name}}" @if (!empty($edit)) @foreach ($edit->blog_tag as $blogTags)
                                {{ $tag->id == $blogTags->tag_id ? 'selected' : '' }}
                                @endforeach
                                @endif>{{$tag->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="title">Status<span class="text-danger">*</span></label>
                        <select name="status" class="form-control">
                            <option value="draft" @if (!empty($edit))
                                {{ $edit->status == 'draft' ? 'selected' : ''  }}
                            @endif>Draft</option>
                            <option value="publish" @if (!empty($edit))
                                {{ $edit->status == 'publish' ? 'selected' : ''  }}
                            @endif>Publish</option>
                            <option value="unpublish" @if (!empty($edit))
                                {{ $edit->status == 'unpublish' ? 'selected' : ''  }}
                            @endif>Unpublish</option>
                        </select>
                    </div>

                    <div class="form-group mb-3 col-md-12">
                        <label for="description">Blog Description<span class="text-danger">*</span></label>
                        <textarea class="form-control" name="description" id="description" cols="10" rows="5" required>{{ $edit->description ?? '' }}</textarea>
                    </div>
                    @if(isset($edit) && $edit->image)
                    <div class="form-group col-md-12">
                        <img src="{{check_file($edit->image, 'user')}}" alt="{{ $edit->image ?? 'No Image' }}" class="img-fluid fit-image avatar-xl rounded-circle">
                    </div>
                    @endif
                    <div class="form-group mb-3 col-md-12">
                        <label>Blog Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                {{-- {{!empty($edit) ? " " : "required"}} --}}
                                <input type="file" class="custom-file-input"  name="blog_img" id="blog_img" accept=".gif, .jpg, .png">
                                <label class="custom-file-label blog_img_label" for="blog_img">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $edit->hashid ?? '' }}">
                <div class="form-group mb-3 text-right">
                    <button class="btn btn-success waves-effect waves-light" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('page-scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>

    CKEDITOR.replace('description');
    $(document).ready(function() {
        if ($('.select2').length > 0) {
            $('.select2').select2({
                placeholder: 'Select Tags',
                tags: true,
            })
        }
    });
    $('#blog_img').change(function() {
        var filename = $('#blog_img').val();
        if (filename.substring(3, 11) == 'fakepath') {
            filename = filename.substring(12);
        }
        if (filename && filename != '') {
            $('.blog_img_label').html(filename);
        } else {
            $('.blog_img_label').html('Choose file');
        }
    });

    $(document).ready(function() {
        validations = $(".ajaxForm").validate();
        $('.ajaxForm').submit(function(e) {
            e.preventDefault();
            validations = $(".ajaxForm").validate();
            if (validations.errorList.length != 0) {
                return false;
            }
            var Content = CKEDITOR.instances['description'].getData();
            var url = $(this).attr('action');
            var param = new FormData(this);
            var files = $('#blog_img')[0].files[0];
            param.append('blog_img', files);
            param.append('description', Content);
            my_ajax(url, param, 'post', function(res) {

            });
        })
    });
</script>
@endsection
