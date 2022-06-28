<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{$title ?? 'Dashboard'}} | {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="{{ asset('admin_assets') }}/images/hive.png"> -->
    <link href="{{ asset('admin_assets') }}/libs/custombox/custombox.min.css" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin_assets') }}/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin_assets') }}/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

    {{-- Sweet Alert Css --}}
    <link href="{{ asset('admin_assets') }}/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    {{-- modal css --}}
    @yield('page-css')
</head>
<body>

    <div id="preloader" class="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('components.admin_navbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('components.admin_sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <!-- content Start -->
            @yield('content')
            <!-- content end -->

            <!-- Footer Start -->
            @include('components.admin_footer')
            <!-- end Footer -->
        </div>


        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <script>
        function pageloader(status) {
            if (status == 'hide') {
                $('.preloader').hide();
                $('#status').hide();
                return;
            }
            $('.preloader').show();
            $('#status').show();
            return;
        }
    </script>
    <!-- Vendor js -->
    <script src="{{ asset('admin_assets') }}/js/vendor.min.js"></script>
    <script src="{{ asset('admin_assets') }}/libs/custombox/custombox.min.js"></script>


    <!-- App js -->
    <script src="{{ asset('admin_assets') }}/js/app.min.js"></script>
    {{-- Sweet Alert Css --}}
    <script src="{{ asset('admin_assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('admin_assets') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('admin_assets') }}/sweetalert2/sweetalert2.min.js"></script>
    <!-- Modal-Js -->
    {{-- Custom Js --}}
    <script src="{{ asset('admin_assets') }}/js/daniDev.js"></script>

    <script>
        $(document).ready(function () {
            $('#addProjectLink').click(function(e){
                e.preventDefault()
                $('body #addProjectModel').modal('show');
            });
            validations = $(".addProjectAjaxForm").validate();
            $('.addProjectAjaxForm').submit(function(e) {
                e.preventDefault();
                validations = $(".addProjectAjaxForm").validate();
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
    @yield('page-scripts')

</body>

</html>
