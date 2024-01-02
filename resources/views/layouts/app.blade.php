<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>takim</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backOffice/assets/media/image/favicon.png') }}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('backOffice/vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="{{ asset('backOffice/vendors/datepicker/daterangepicker.css') }}" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('backOffice/vendors/dataTable/datatables.min.css') }}" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('backOffice/assets/css/app.min.css') }}" type="text/css">
@yield('css')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="rtl">
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->



<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img class="logo" src="https://tasareeh.qa/images/logo-modified.png" alt="logo" style="    max-width: 50px;">
                    </a>
                </div>
            </div>



        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->

        @include('layouts.saidbar')

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">





                @yield('content')

            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2024 - <a href="" target="_blank"></a></div>
                <div>
                    <nav class="nav">

                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{ asset('backOffice/vendors/bundle.js') }}"></script>

<!-- Apex chart -->
<script src="{{ asset('backOffice/vendors/charts/apex/apexcharts.min.js') }}"></script>

<!-- Daterangepicker -->
<script src="{{ asset('backOffice/vendors/datepicker/daterangepicker.js') }}"></script>

<!-- DataTable -->
<script src="{{ asset('backOffice/vendors/dataTable/datatables.min.js') }}"></script>

<!-- Dashboard scripts -->
<script src="{{ asset('backOffice/assets/js/examples/pages/dashboard.js') }}"></script>

<!-- App scripts -->
<script src="{{ asset('backOffice/assets/js/app.min.js') }}"></script>


@yield('js')
</body>
</html>
