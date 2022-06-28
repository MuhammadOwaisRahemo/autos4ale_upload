<div class="container-fluid {{@$banner_name}}">
    <div class="container">
        @include('front.partial.front_navbar')
        <div class="row">
            <div class="col-12">
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close btn btn-danger" onclick="$('.alert-danger').hide();" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('haserror'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close btn btn-danger" onclick="$('.alert-danger').hide();" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="banner-text text-white text-center">
                    <h1 class="fw-bold">{{@$banner_title}}</h1>
                    <p class="fw-normal mt-3 mb-4">
                        {!!@$banner_dec!!}
                    </p>
                </div>
            </div>
        </div>

        @if(@$filter_file_name != false)
            <div class="row">
                <div class="col-md-12">
                    @include('front.partial.filters.'.$filter_file_name)
                </div>
            </div>
        @endif

    </div>
</div>
