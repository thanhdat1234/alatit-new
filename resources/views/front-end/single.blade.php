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
@if(Session::has('flash_messages'))
    <script>
        $.toast({
            heading: 'Có lỗi xảy ra !',
            text: '{!! Session::get('flash_messages') !!}.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: '{!! Session::get('flash_level') !!}',
            hideAfter: 3500,
            stack: 6
        })
    </script>
@endif
</body>
</html>
