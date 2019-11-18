<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>ErkCloud</title>
        <link rel="apple-touch-icon" href="{{url('public/images/logo/apple-touch-icon.png')}}">
        <link rel="shortcut icon" href="{{url('public/images/logo/favicon.png')}}">
        <link rel="stylesheet" href="{{url('public/vendor/bootstrap/dist/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{url('public/vendor/PACE/themes/blue/pace-theme-minimal.css')}}" />
        <link rel="stylesheet" href="{{url('public/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" />
        <link href="{{url('public/css/admin/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{url('public/css/admin/themify-icons.css')}}" rel="stylesheet" />
        <link href="{{url('public/css/admin/materialdesignicons.min.css')}}" rel="stylesheet" />
        <link href="{{url('public/css/admin/animate.min.css')}}" rel="stylesheet" />
        <link href="{{url('public/vendor/selectize/dist/css/selectize.default.css')}}" rel="stylesheet">
        <link href="{{url('public/vendor/sweetalert/lib/sweet-alert.css')}}" rel="stylesheet">
        <link href="{{url('public/css/admin/fileupload.css')}}" rel="stylesheet">
        <link href="{{url('public/css/admin/main-style.css')}}" rel="stylesheet">
        <link href="{{url('public/css/admin/theme.css')}}" rel="stylesheet" />
        <link href="{{url('public/css/admin/admin.css')}}" rel="stylesheet" />
    </head>
    <body>
        <div class="app header-info">
            <div class="layout">
                @include('admin.partials.header')
                @include('admin.partials.sidebar')
                <div class="page-container">
                    <div class="main-content">
                        <div class="container-fluid" id="app">
                            @yield('content')
                        </div>
                    </div>
                    @include('admin.partials.footer')
                </div>
            </div>
        </div>
        <script src="{{url('public/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{url('public/js/app.js')}}"></script>
        <script src="{{url('public/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{url('public/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
        <script src="{{url('public/vendor/PACE/pace.min.js')}}"></script>
        <script src="{{url('public/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>     
        <script src="{{url('public/vendor/d3/d3.min.js')}}"></script>
        <script src="{{url('public/js/admin/app-theme.js')}}"></script>
        <script src="{{url('public/js/admin/configurator.js')}}"></script>
        <script src="{{url('public/vendor/nouislider/distribute/nouislider.js')}}"></script>
        <script src="{{url('public/vendor/sweetalert/lib/sweet-alert.js')}}"></script>
        <script src="{{url('public/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js')}}"></script>
        <script src="{{url('public/vendor/selectize/dist/js/standalone/selectize.min.js')}}"></script>
        <script src="{{url('public/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{url('public/js/admin/forms/form-validation.js')}}"></script>
        <script src="{{url('public/vendor/chart.js/dist/Chart.min.js')}}"></script>
        <script src="{{url('public/js/admin/fileupload/input-group-file.js')}}"></script>
        <script src="{{url('public/js/admin/admin-custom.js')}}"></script>
    </body>
</html>

