<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="{{ asset('admin_assets') }}/images/hive.png"> -->


    <!-- Bootstrap Css -->
    <link href="{{ asset('admin_assets') }}/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin_assets') }}/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

    <style>
        body.authentication-bg {
            background-image: url('{{asset("admin_assets")}}'/images/big/bg-light-img.jpg);
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="authentication-bg">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <!-- <a href="index.html" class="logo">
                            <img src="{{ asset('admin_assets') }}/images/hive.png" alt="" height="22"
                                class="logo-light mx-auto">
                            <img src="{{ asset('admin_assets') }}/images/hive.png" alt="" height="22"
                                class="logo-dark mx-auto">
                        </a> -->
                        <p class="text-muted mt-2 mb-4">Admin Dashboard</p>
                    </div>
                    @yield('content')
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <!-- end page -->


    <!-- Vendor js -->
    <script src="{{ asset('admin_assets') }}/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('admin_assets') }}/js/app.min.js"></script>
</body>

</html>
