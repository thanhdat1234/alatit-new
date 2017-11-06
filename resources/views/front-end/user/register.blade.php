@extends('front-end.single')
@section('p_title','login page')
@section('content')
<section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" action="{{route('user.post.register')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{url('')}}" class="text-center db"><img src="{{url('public')}}/logo/logo.png" alt="Home"></a>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="name" required="" value="{{ old('name') }}" placeholder="Tên đăng nhập">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="user_email" value="{{ old('user_email') }}" required="" placeholder="Email">
                            @if ($errors->has('user_email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('user_email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" name="user_pass" placeholder="Mật khẩu" value="{{ old('user_pass') }}">
                            @if ($errors->has('user_pass'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('user_pass') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="user_repass" required="" placeholder="Xác nhận mật khẩu" value="{{ old('user_repass') }}">
                            @if ($errors->has('user_repass'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('user_repass') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" type="checkbox" value="1" required>
                                <label for="checkbox-signup"> Tôi chấp nhận <a href="{{route('page.ruler')}}" target="_blank">điều khoản</a> của website</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Đăng ký</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Đã có tài khoản? <a href="{{ route('user.get.login') }}" class="text-primary m-l-5"><b>Đăng nhập</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection