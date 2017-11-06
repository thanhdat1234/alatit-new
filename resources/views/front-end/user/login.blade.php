@extends('front-end.single')
@section('p_title','login page')
@section('content')
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" action="{{route('user.post.login')}}" method="post">
                    <input type="text" hidden name="_token" value="{{ csrf_token() }}">
                    <a href="{{url('')}}" class="text-center db"><img src="{{url('public')}}/logo/logo.png" alt="Home"></a>
                    <hr>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="user_name" value="{{ old('user_name') }}" placeholder="Tên đăng nhập">
                            @if ($errors->has('user_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="user_pass" required="" value="{{ old('user_pass') }}" placeholder="Mật khẩu">
                            @if ($errors->has('user_pass'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('user_pass') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox" required>
                                <label for="checkbox-signup"> Ghi nhớ đăng nhập </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Bạn quên mật khẩu?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Bạn chưa có tài khoản? <a href="{{route('user.get.register')}}" class="text-primary m-l-5"><b>Đăng ký</b></a></p>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="#">
                    <a href="{{url('')}}" class="text-center db"><img src="{{url('public')}}/logo/logo.png" alt="Home"></a>
                    <hr>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <p class="text-muted">Vui lòng nhập Email chúng tôi sẽ gửi mật khẩu mới về email ! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Gửi yêu cầu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection