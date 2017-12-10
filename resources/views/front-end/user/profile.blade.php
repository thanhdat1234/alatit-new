@extends('front-end.home')
@section('p_title','Thông tin cá nhân')
@section('page.title','Trang cá nhân')
@section('page.child',(string)Auth::user()->name)
@section('style')

        <!-- Popup CSS -->
<link href="{!! url('public/home/') !!}/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
<!-- morris CSS -->
<link href="{!! url('public/home/') !!}/plugins/bower_components/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />

<link href="{!! url('public/home/') !!}/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<link href="{!! url('public/home/') !!}/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('public/home/') !!}/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
<!-- toast CSS -->
<link href="{!! url('public/home/') !!}/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
@endsection
@section('content')
        <!-- .row -->
<div class="row">
    <div class="col-md-2 col-xs-12">
        <div class="white-box">
            <div class="user-bg">
                <div class="overlay-box">
                    <div class="user-content">

                        <a href="javascript:void(0)">
                            <img src="{{asset('public/upload/users/')}}/{{Auth::user()->avatar}}" class="thumb-lg img-circle" alt="img">
                        </a>
                        <h4 class="text-white">{{Auth::user()->fullname == ''?Auth::user()->name:Auth::user()->fullname}}</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 col-xs-12">
        <div class="white-box">
            <ul class="nav customtab nav-tabs" role="tablist">
                <li role="presentation" class="nav-item"><a href="#home" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-home"></i></span><span class="hidden-xs"> Dòng thời gian</span></a></li>

                <li role="presentation" class="nav-item"><a href="#settings" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Cài đặt</span></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left"> <img src="{{url('public')}}/home/plugins/images/users/genu.jpg" alt="user" class="img-circle" /> </div>
                            <div class="sl-right">
                                <div class="m-l-40"><a href="#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                    <p>assign a new task <a href="#"> Design weblayout</a></p>
                                    <div class="m-t-20 row"><img src="{{url('public')}}/home/plugins/images/img1.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="{{url('public')}}/home/plugins/images/img2.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="{{url('public')}}/home/plugins/images/img3.jpg" alt="user" class="col-md-3 col-xs-12" /></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="tab-pane" id="settings">
                    <form class="form-horizontal form-material" action="{{ route('user.updateInfo') }}" method="post" enctype="multipart/form-data">
                        <input type="text" hidden name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label class="col-md-12">Tên đăng nhập</label>
                            <div class="col-md-12">
                                <input type="text" readonly name="name" placeholder="{{$user_info->name}}" value="{{$user_info->name}}" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Ảnh đại diện</label>
                            <div class="col-sm-12">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <input type="file" name="avatar">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Họ và tên (tên hiển thị)</label>
                            <div class="col-md-12">
                                <input type="text" name="fullname" placeholder="{{$user_info->fullname}}" value="{{$user_info->fullname}}" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" name="email" placeholder="{{$user_info->email}}" value="{{$user_info->email}}" class="form-control form-control-line" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Mật khẩu</label>
                            <div class="col-md-12">
                                <input type="password" name="password" placeholder="**********" class="form-control form-control-line">
                                <input type="password" name="old_password" hidden value="{{$user_info->password}}" placeholder="**********" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Số điện thoại</label>
                            <div class="col-md-12">
                                <input type="text" name="phone" placeholder="{{$user_info->phone}}" value="{{$user_info->phone}}" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
