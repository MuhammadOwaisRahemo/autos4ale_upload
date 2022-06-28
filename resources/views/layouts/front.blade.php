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

    <input type="hidden" name="main_category" id="main_category" value="{{ @$main_category }}">


    {{-- banner code html  --}}

    @include('front.partial.front_banner')

    {{-- end banner code html  --}}



    <!-- mobile navbar -->
    @include('front.partial.front_mobile_nav')
    <!-- end mobile navbar -->

    @yield('content')


    <!-- Footer  -->
    @include('front.partial.front_footer')

    <!-- End Footer -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('front_assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front_assets') }}/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{ asset('front_assets') }}/js/daniDev.js"></script>
    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->
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

            $('.side_barbtn').click(function() {
                $('.sidebar_mobile').css('right', 0);
                $('.body').addClass('mbody');
            });
            $('.inner_side_barbtn').click(function() {
                $('.sidebar_mobile').css('right', -1500);
                $('.body').removeClass('mbody');
            })

            const trustbox = document.getElementById('trustbox');
            window.Trustpilot.loadFromElement(trustbox);
        })


    </script>

    @yield('page-script')

</body>

</html>
