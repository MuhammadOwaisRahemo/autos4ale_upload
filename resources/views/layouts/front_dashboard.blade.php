<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets') }}/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('front_assets') }}/css/slick.min.css" rel="stylesheet">
    <link href="{{ asset('front_assets') }}/css/slick-theme.min.css" rel="stylesheet">
    <link href="{{ asset('front_assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets') }}/css/style.css">
    <link href="{{ asset('front_assets') }}/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    @yield('page-css')
    <script src="https://kit.fontawesome.com/57da570e25.js" crossorigin="anonymous"></script>
    <title>Auto4sale {{ isset($title) ? ' | ' . $title : null }}</title>
</head>

<body>
    <div id="overlayer"></div>

    <span class="loader" id='preloader'>
        <span class="loader-inner">
            <img src="{{ asset('front_assets') }}/images/loading.gif" class="img-fluid mx-auto d-block">
        </span>
    </span>

    <div class="container-fluid header">
        <div class="container">
            @include('front.partial.front_navbar_light')
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
        </div>
    </div>

    <!-- mobile navbar -->
    @include('front.partial.front_mobile_nav')
    <!-- end mobile navbar -->

    <div class="container-fluid mt-5 mb-5 pb-5">
        <div class="container">
            <div class="row">
                @include('front.partial.sidebar')
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <!-- Footer  -->
    @include('front.partial.front_footer')

    <!-- End Footer -->
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('front_assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front_assets') }}/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{ asset('admin_assets') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('front_assets') }}/js/daniDev.js"></script>
    <script>
        // website loader
        $(window).on('load', function() {
            var timing = 500; // replace with your want
            $('#overlayer').delay(timing).fadeOut();
            $('#preloader').delay(timing).fadeOut('slow');
            $('body').delay(timing).css({});
        });

        function page_loader(status) {
            var timing = 500; // replace with your want
            if (status == 'hide') {
                $('#preloader').hide();
                $('#overlayer').hide();
                return;
            }
            $('#preloader').show();
            $('#overlayer').show();
            return;
        }
    </script>
    @yield('page-script')

</body>

</html>
