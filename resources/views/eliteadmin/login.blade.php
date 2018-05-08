<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{config('admin.title')}} | {{ trans('admin.login') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/bootstrap/dist/css/bootstrap.min.css") }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css") }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/css/animate.css") }}">
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/css/style.css") }}">
  <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/css/custom.css") }}">
  <link rel="stylesheet" id="theme" href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/css/colors/blue.css") }}">
  {{--<link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/icheck/skins/square/blue.css") }}">--}}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
  <section id="wrapper" class="login-register">
    <div class="login-box">
      <div class="white-box login-box2">

        {!! config('admin.logo', config('admin.name')) !!}
        <h3 class="text-center">
          <a href="{{ admin_base_path('/') }}"><b>{{config('admin.name')}}</b></a>
        </h3>

        <form class="form-horizontal form-material" id="loginform" action="{{ admin_base_path('login') }}" method="post">
          <h3 class="box-title m-b-20">{{ trans('admin.login') }}</h3>
          <div class="form-group has-feedback {!! !$errors->has('username') ?: 'has-error' !!}">
            <div class="col-xs-12">
              @if($errors->has('username'))
                @foreach($errors->get('username') as $message)
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                @endforeach
              @endif
              <input class="form-control" type="text" name="username" required="" placeholder="{{ trans('admin.username') }}" value="{{ old('username') }}" >
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              @if($errors->has('password'))
                @foreach($errors->get('password') as $message)
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
                @endforeach
              @endif
              <input class="form-control" type="password" name="password" required="" placeholder="{{ trans('admin.password') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="checkbox checkbox-primary pull-left p-t-0">
                <input id="checkbox-signup" type="checkbox">
                <label for="checkbox-signup"> Remember me </label>
              </div>
              <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ trans('admin.login') }}</button>
            </div>
          </div>
        </form>

        <form class="form-horizontal" id="recoverform" action="{{ admin_base_path('password/email') }}" method="post">
          <div class="form-group ">
            <div class="col-xs-12">
              <h3>Recover Password</h3>
              <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" required="" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </section>
{{--<div class="login-box">--}}

  {{--<!-- /.login-logo -->--}}
  {{--<div class="login-box-body">--}}
  {{--</div>--}}
  {{--<!-- /.login-box-body -->--}}
{{--</div>--}}
<!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/jquery/dist/jquery.min.js")}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/bootstrap/dist/js/tether.min.js")}}"></script>
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js")}}"></script>
  <!-- Menu Plugin JavaScript -->
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js")}}"></script>
  <!--slimscroll JavaScript -->
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/js/jquery.slimscroll.js")}}"></script>
  <!--Wave Effects -->
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/js/waves.js")}}"></script>
  <!-- Custom Theme JavaScript -->
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/js/custom.min.js")}}"></script>
  <!--Style Switcher -->
  <script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js")}}"></script>

<!-- iCheck -->
{{--<script src="{{ admin_asset("/vendor/laravel-admin/EliteAdmin/plugins/bower_components/icheck/icheck.js")}}"></script>--}}
{{--<script>--}}
  {{--$(function () {--}}
    {{--$('input').iCheck({--}}
      {{--checkboxClass: 'icheckbox_square-blue',--}}
      {{--radioClass: 'iradio_square-blue',--}}
      {{--increaseArea: '20%' // optional--}}
    {{--});--}}
  {{--});--}}
{{--</script>--}}
</body>
</html>
