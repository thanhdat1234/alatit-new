<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>@yield('p_title')</title>
    @include('front-end.common.style')
</head>

<body>
<!-- Preloader -->
@include('front-end.common.loading')
@yield('content')
<!-- /#wrapper -->
<!-- jQuery -->
@include('front-end.common.script')
</body>
</html>
