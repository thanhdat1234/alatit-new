<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{!! url('public/home/') !!}/plugins/images/favicon.png">
    <title>@yield('p_title')</title>
    @include('front-end.common.style')
</head>

<body>
<!-- Preloader -->
@include('front-end.common.loading')
<div id="wrapper">
    <!-- Page header -->
@include('front-end.common.header')
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
        <!-- row -->
        @yield('content')
        <!-- /.row -->
            <!-- .right-sidebar -->
        @include('front-end.common.right-sidebar')
        <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        @include('front-end.common.footer')
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
@include('front-end.common.script')
</body>
</html>
