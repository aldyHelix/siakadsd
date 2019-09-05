<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{url('front-end/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('front-end/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('front-end/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('front-end/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('front-end/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            @include('front/front_content')

            <!-- footer -->
            @include('front/front_footer')
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{url('front-end/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('front-end/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('front-end/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{url('front-end/vendors/nprogress/nprogress.js')}}"></script>
    <!-- morris.js -->
    <script src="{{url('front-end/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{url('front-end/vendors/morris.js/morris.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('front-end/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('front-end/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{url('front-end/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{url('front-end/build/js/custom.min.js')}}"></script>

</body>

</html>