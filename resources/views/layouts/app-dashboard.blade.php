<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIMAK - Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{url('dashboard/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{url('dashboard/plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{url('dashboard/plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{url('dashboard/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="{{url('dashboard/plugins/waitme/waitMe.css')}}" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="{{url('dashboard/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{url('dashboard/css/style.css')}}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('dashboard/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>
<body class="theme-lime ls-opened">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">SIMAK - SDN 2 LANDUNGSARI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <div class="nav navbar-nav navbar-right">
                    <li><a href="#" class="js-search" data-close="true"><i class="material-icons">input</i></a></li>
                </div>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    @include('layouts.sidebar')
    <section class="content">
    @yield('content')
    </section>
    <!-- Jquery Core Js -->
    <script src="{{url('dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{url('dashboard/plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Select Plugin Js -->
    <script src="{{url('dashboard/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="{{url('dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{url('dashboard/plugins/node-waves/waves.js')}}"></script>
    <!-- Autosize Plugin Js -->
    <script src="{{url('dashboard/plugins/autosize/autosize.js')}}"></script>
    <!-- Moment Plugin Js -->
    <script src="{{url('dashboard/plugins/momentjs/moment.js')}}"></script>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{url('dashboard/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{url('dashboard/js/admin.js')}}"></script>
    <script src="{{url('dashboard/js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="{{url('dashboard/js/helpers.js')}}"></script>
    <script src="{{url('dashboard/js/pages/widgets/infobox/infobox-5.js')}}"></script>
    <script src="{{url('dashboard/js/pages/ui/modals.js')}}"></script>
    <script src="{{url('dashboard/js/pages/forms/advanced-form-elements.js')}}"></script>
        <!-- Input Mask Plugin Js -->
        <script src="{{url('dashboard/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

        <!-- Multi Select Plugin Js -->
        <script src="{{url('dashboard/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
    <!-- Dropzone Plugin Js -->
    <script src="{{url('dashboard/plugins/dropzone/dropzone.js')}}"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{url('dashboard/plugins/jquery-countto/jquery.countTo.js')}}"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="{{url('dashboard/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{url('dashboard/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{url('dashboard/js/demo.js')}}"></script>
</body>
</html>