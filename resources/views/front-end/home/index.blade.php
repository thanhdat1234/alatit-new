@extends('front-end.index')
@section('p_title','Trang rao vặt - mua bán online -Alatit.com')
@section('style')

    <!-- Popup CSS -->
    <link href="{!! url('public/home/') !!}/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{!! url('public/home/') !!}/plugins/bower_components/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />

    <link href="{!! url('public/home/') !!}/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="{!! url('public/home/') !!}/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="{!! url('public/home/') !!}/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!-- /.row -->
    @include('front-end.wget.top.topHome')
    <!-- /.row -->
    <div class="row">
        @include('front-end.wget.slidebar_left')
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <!-- <hr class="m-t-5"> -->
            @include('front-end.post.item',$post)
            
        </div>
        @include('front-end.wget.slidebar_right')
    </div>
{{--end_content_site--}}

    @include('front-end.wget.slidebar_bottom')
{{--end_content_site--}}

@endsection
@section('script')
@endsection
