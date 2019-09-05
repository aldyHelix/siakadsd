<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>SIMAK SDN 2 Landungsari</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- CSS -->
    <link href="{{url('white_pro/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('white_pro/css/flexslider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('white_pro/css/animate.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('white_pro/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('white_pro/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('white_pro/css/colors/')}}" rel="stylesheet" type="text/css" id="colors" />

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- SCRIPTS -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->

    <script src="{{url('white_pro/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/superfish.min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/owl.carousel.js')}}"></script>
    <script src="{{url('white_pro/js/animate.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/myscript.js')}}" type="text/javascript"></script>

    <!--gentella cross theme back-end -->

    <!-- Font Awesome -->
    <link href="{{url('front-end/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('front-end/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('front-end/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('front-end/build/css/custom.min.css')}}" rel="stylesheet">

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

</head>

<body>

    <!-- PRELOADER -->
    <img id="preloader" src="{{url('white_pro/images/preloader.gif')}}" alt="" />
    <!-- //PRELOADER -->
    <div class="preloader_hide">

        <!-- PAGE -->
        <div id="page" class="single_page">

            @include('front/front_header')


            <!-- BREADCRUMBS -->
            <section class="breadcrumbs_block clearfix parallax">
                <div class="container center">
                    <h2><b>Hasil</b> Pembelajaran Siswa</h2>
                    <p>Rekam Jejak pembelajaran siswa mulai dari siswa masuk hingga siswa telah lulus.</p>
                    <br>
                    <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
                        <div id="fields">
                            <form id="contact-form-face" class="clearfix" action="#">
                                <input type="text" name="name" placeholder="Cari Nama Siswa atau NIS . . ."/>
                                <input class="contact_btn" type="submit" value="Cari" />
                            </form>
                        </div>
                    </div>
                </div>
            </section><!-- //BREADCRUMBS -->


            <!-- PORTFOLIO -->
            <section id="portfolio">

                <!-- CONTAINER -->
                <div class="container">
                    @include('front/front_content')
                </div>
            </section><!-- //PORTFOLIO -->
        </div><!-- //PAGE -->

        <!-- FOOTER -->
        @include('front/front_footer')
    </div>
</body>

</html>