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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
    <link href="{{ asset('front_assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets') }}/css/style.css">
    <link href="{{ asset('front_assets') }}/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    @yield('page-css')
    <script src="https://kit.fontawesome.com/57da570e25.js" crossorigin="anonymous"></script>
    <title>Auto4sale {{isset($title) ? ' | '.$title : null}}</title>
</head>

<body class="body">
    <div id="overlayer"></div>

    <span class="loader" id='preloader'>
        <span class="loader-inner">
            <img src="{{ asset('front_assets') }}/images/loading.gif" class="img-fluid mx-auto d-block">
        </span>
    </span>

    <div class="container-fluid header">
        <div class="container">
            <div class="rows">
                <nav class="navbar navbar-expand-lg navbar-light bg-light main-navbar">
                    <div class="container-fluid p-0">
                        <a class="navbar-brand" href="{{route('front.home')}}">
                            <img src="{{ asset('front_assets') }}/images/logo-black.svg" class="img-fluid">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('front.home') ? 'active' : null }}" aria-current="page" href="{{route('front.home')}}">Cars</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('front.luxury') ? 'active' : null }}" href="{{route('front.luxury')}}">Luxury Cars</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('front.vans') ? 'active' : null }}" href="{{ route('front.vans.vans') }}">Vans</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('front.bikes.bikes') ? 'active' : null }}" href="{{ route('front.bikes.bikes') }}">Bikes</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('front.motorhomes.motorhomes') ? 'active' : null }}" href="{{ route('front.motorhomes.motorhomes') }}">Motorhomes</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('front.caravans.caravans') ? 'active' : null }}" href="{{ route('front.caravans.caravans') }}">Caravans</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('front.trucks.trucks') ? 'active' : null }}" href="{{ route('front.trucks.trucks') }}">Trucks</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <ul class="list-inline">
                                    @if (auth('user')->check())
                                        <li class="list-inline-item">
                                            <a href="saved_search.html" class="nav-link fw-500 btn btn-theme px-3">
                                                <i class="fa-solid fa-heart"></i> Saved
                                            </a>
                                        </li>
                                        <li class="list-inline-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                My Account
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="{{route('front.my_vehicle')}}">My Vehicle</a></li>
                                                <li><a class="dropdown-item" href="{{ route('front.vehacle_sale_summary') }}">Vehicles you’re Selling</a></li>
                                                <li><a class="dropdown-item" href="{{ route('front.subscription') }}">Subscription</a></li>
                                                <li><a class="dropdown-item" href="{{ route('front.personal_details') }}">Personal Details</a></li>
                                                <li><a class="dropdown-item" href="{{ route('front.payment_history') }}">Payment History</a></li>
                                                <li><a class="dropdown-item" href="{{ route('front.payment_method') }}">Payment Method</a></li>
                                                <li><a class="dropdown-item" href="{{route('front.logout')}}">Sign Out</a></li>
                                            </ul>
                                        </li>
                                    @else
                                    <li class="list-inline-item">
                                        <a href="{{route('front.signup')}}" class="nav-link fw-500 btn btn-theme px-3">
                                            Register
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{route('front.signin')}}" class="nav-link fw-500 btn btn-theme px-3">
                                            Sign In
                                        </a>
                                    </li>
                                    @endif

                                </ul>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>    <!-- mobile navbar -->

    @yield('banner-section')

    <!-- mobile navbar -->
    @include('front.partial.front_mobile_nav')
    <!-- end mobile navbar -->

    @yield('content')


    <!-- Footer  -->
    @include('front.partial.front_footer')
    <!-- End Footer -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{ asset('admin_assets') }}/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('front_assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front_assets') }}/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{ asset('front_assets') }}/js/daniDev.js"></script>

    <script>
        $(document).ready(function() {

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


            $('.testimonials').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 700,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        })

        $('.side_barbtn').click(function() {
            $('.sidebar_mobile').css('right', 0);
            $('.body').addClass('mbody');
        });
        $('.inner_side_barbtn').click(function() {
            $('.sidebar_mobile').css('right', -1500);
            $('.body').removeClass('mbody');
        })
    </script>

    @yield('page-script')

</body>

</html>
