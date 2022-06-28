<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front_assets/vendor/img/favicon.png')}}">

    <title> @yield('code') - @yield('title') | {{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mada:400,500,600,700&amp;display=swap" />
    <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/bundled.min.css')}}">
</head>

<body class="error-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="error-box">
            <h1>@yield('code')</h1>
            <h3 class="h2 mb-3">@yield('title')</h3>
            <p class="h4 font-weight-normal">@yield('message')</p>
            <a href="{{route('admin.home')}}" class="btn bgblue">Back to Home</a>
        </div>

    </div>

    <script src="{{asset('front_assets/js/bundled.min.js')}}"></script>
    <script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('front_assets/js/custom.js')}}"></script>
</body>

</html>
