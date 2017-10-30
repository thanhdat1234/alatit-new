<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 09:34:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite CRM Admin Template - CRM admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('public/admin/assets') !!}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{!! asset('public/admin/assets') !!}/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{!! asset('public/admin/assets') !!}/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="{!! asset('public/admin/assets') !!}/css/colors/gray-dark.css" id="theme"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            @if(count($errors) > 0)
                <div class="col-lg-12 my-alert">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    <hr>
                </div>
            @endif
            <form class="form-horizontal form-material" id="loginform" action="{!! url('admin/login') !!}" method="post">
                <input type="text" hidden name="_token" value="{!! csrf_token()  !!}">
                <h3 class="box-title m-b-20">Đăng nhập</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="username" placeholder="Tên đăng nhập">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" name="userpass" placeholder="Mật khẩu">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Đăng nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="{!! asset('public/admin/') !!}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('public/admin/assets') !!}/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{!! asset('public/admin/') !!}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="{!! asset('public/admin/assets') !!}/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{!! asset('public/admin/assets') !!}/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{!! asset('public/admin/assets') !!}/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="{!! asset('public/admin/') !!}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 09:34:34 GMT -->
</html>
