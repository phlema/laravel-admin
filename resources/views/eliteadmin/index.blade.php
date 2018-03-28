<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Admin::title() }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap Core CSS -->
    <link href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css") }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css") }}" rel="stylesheet">
    <!-- vector map CSS -->
    <link href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css") }}" rel="stylesheet" >
    <link href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/css-chart/css-chart.css") }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/css/animate.css") }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/css/style.css") }}" rel="stylesheet">

    {!! Admin::css() !!}
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/laravel-admin/laravel-admin.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/nprogress/nprogress.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/sweetalert/dist/sweetalert.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/nestable/nestable.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/toastr/build/toastr.min.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/bootstrap3-editable/css/bootstrap-editable.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/google-fonts/fonts.css") }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/css/colors/" . config('admin.eliteadmin.skin') .".css") }}">


    <!-- jQuery -->
    <script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap Core JavaScript -->

    <script src="{{ admin_asset ("/vendor/laravel-admin/jquery-pjax/jquery.pjax.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/laravel-admin/nprogress/nprogress.js") }}"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>

<div id="wrapper" class="wrapper">

    @include('admin::partials.header')

    @include('admin::partials.sidebar')

    <div id="page-wrapper">
        <div  id="pjax-container" class="container-fluid">
            @yield('content')
            {!! Admin::script() !!}
        </div>
        @include('admin::partials.footer')
    </div>



</div>

<!-- ./wrapper -->

<script>
    function LA() {}
    LA.token = "{{ csrf_token() }}";
</script>



<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/bootstrap/dist/js/tether.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js") }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js") }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/js/jquery.slimscroll.js") }}"></script>
<!--Wave Effects -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/js/waves.js") }}"></script>
<!-- Flot Charts JavaScript -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/flot/jquery.flot.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js") }}"></script>
<!-- google maps api -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
<!-- Sparkline charts -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
<!-- EASY PIE CHART JS -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js") }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/js/custom.min.js") }}"></script>
{{--<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/js/dashboard2.js") }}"></script>--}}
<!--Style Switcher -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js") }}"></script>
<!--Style Switcher -->
<script src="{{ admin_asset ("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js") }}"></script>
<!-- REQUIRED JS SCRIPTS -->
<script src="{{ admin_asset ("/vendor/laravel-admin/nestable/jquery.nestable.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/toastr/build/toastr.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/bootstrap3-editable/js/bootstrap-editable.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/sweetalert/dist/sweetalert.min.js") }}"></script>
{!! Admin::js() !!}
<script src="{{ admin_asset ("/vendor/laravel-admin/laravel-admin/laravel-admin.js") }}"></script>

</body>
</html>
