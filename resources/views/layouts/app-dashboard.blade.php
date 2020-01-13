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
    <link href="{{asset('dashboard/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{asset('dashboard/plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{asset('dashboard/plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('dashboard/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="{{asset('dashboard/plugins/waitme/waitMe.css')}}" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="{{asset('dashboard/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('dashboard/css/themes/all-themes.css')}}" rel="stylesheet" />
    <!-- Range Slider Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
    <link href="{{asset('dashboard/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="{{asset('dashboard/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

</head>
<body class="theme-lime ls-opened">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{route('halaman-utama')}}">SIMAK - SDN 2 LANDUNGSARI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <div class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">person</i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Informasi Pengguna</li>
                            <li class="body">
                                <ul class="menu">
                                        <div class="clearfix">
                                            <div class="circle-image">
                                                <img src="{{ url('/img-guru/' . Auth::user()->guru->foto_guru) }}" alt="User" />           
                                            </div>
                                            <div class="text-info">
                                                {{ Auth::user()->guru->nama }}
                                                <div>{{ Auth::user()->email }}</div>
                                                <div>{{ Auth::user()->nip }}</div>
                                            </div>
                                        </div>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Detail informasi Pengguna</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->

                    <li><a href="{{route('logout')}}" class="js-search" data-close="true"><i class="material-icons">input</i></a></li>
                    <!-- Notifications -->
                </div>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <!-- Pembagian Sidebar ke User -->
    @can('admin-access')
        @include('layouts.sidebar-admin')
    @endcan
    @can('operator-access')
        @include('layouts.sidebar-operator')
    @endcan
    @can('gurukelas-access')
        @include('layouts.sidebar-gurukelas')
    @endcan
    @can('gurumapel-access')
        @include('layouts.sidebar-gurumapel')
    @endcan
    @can('kepalasekolah-access')
        @include('layouts.sidebar-kepalasekolah')
    @endcan
    <section class="content">
    @yield('content')
    </section>
    <!-- Jquery Core Js -->
    <script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Select Plugin Js -->
    <script src="{{asset('dashboard/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('dashboard/plugins/node-waves/waves.js')}}"></script>
    <!-- Autosize Plugin Js -->
    <script src="{{asset('dashboard/plugins/autosize/autosize.js')}}"></script>
    <!-- Moment Plugin Js -->
    <script src="{{asset('dashboard/plugins/momentjs/moment.js')}}"></script>
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('dashboard/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('dashboard/js/admin.js')}}"></script>
    <script src="{{asset('dashboard/js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="{{asset('dashboard/js/helpers.js')}}"></script>
    <script src="{{asset('dashboard/js/pages/widgets/infobox/infobox-5.js')}}"></script>
    <script src="{{asset('dashboard/js/pages/ui/modals.js')}}"></script>
    <script src="{{asset('dashboard/js/pages/forms/advanced-form-elements.js')}}"></script>
     <script src="{{asset('dashboard/js/pages/ui/tooltips-popovers.js')}}"></script>
    <script src="{{asset('dashboard/js/pages/ui/notifications.js')}}"></script>
        <!-- Input Mask Plugin Js -->
        <script src="{{asset('dashboard/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

        <!-- Multi Select Plugin Js -->
        <script src="{{asset('dashboard/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
    <!-- RangeSlider Plugin Js -->
    <script src="{{asset('dashboard/plugins/ion-rangeslider/js/ion.rangeSlider.js')}}"></script>
    <!-- Dropzone Plugin Js -->
    <script src="{{asset('dashboard/plugins/dropzone/dropzone.js')}}"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('dashboard/plugins/jquery-countto/jquery.countTo.js')}}"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('dashboard/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{asset('dashboard/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="{{asset('dashboard/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{asset('dashboard/js/demo.js')}}"></script>
        <!-- Custom Js -->
        <script src="{{asset('dashboard/js/admin.js')}}"></script>
        <script src="{{asset('dashboard/js/pages/ui/range-sliders.js')}}"></script>
        <script src="{{asset('dashboard/js/pages/tables/jquery-datatable.js')}}"></script>
    <!-- Popper -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
    <script>
        $(function () {
        $('[toggle="tooltip"]').tooltip({
        container: 'row'
    });
    $('#datetimepicker').datetimepicker({
    format: 'yyyy-mm-dd'
    });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@yield('scripts')
@yield('scriptski4')
</body>
</html>