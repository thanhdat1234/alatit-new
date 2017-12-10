<!-- Top Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part">
            <a class="logo" href="{{url('')}}">
                <b><img src="{!! url('public/logo/') !!}/logo1.png" alt="Alatit.com" /></b>
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
            <li>
                <form class="app-search hidden-xs" method="get" action="javascript:void(0)">
                    <input type="text" placeholder="Tìm kiếm..." class="form-control">
                    <a href="#" id="search_page"><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            @if(!empty(Auth::user()->id))
            <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                    <div class="notify">
                        <span class="heartbit"></span><span class="point"></span></div></a>
                <ul class="dropdown-menu mailbox animated flipInY">
                    <li>
                        <div class="message-center">
                            <a href="#">
                                <div class="user-img"> <img src="{!! url('public/home/') !!}/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5>
                                    <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="text-center" href="{{route('user.chat.list')}}"> <strong>Tất cả hòm thư </strong> <i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                    <i class="icon-note"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-tasks animated flipInX">
                    <li>
                        <a href="#">
                            <div>
                                <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    <img src="{{asset('public/upload/users/')}}/{{Auth::user()->avatar}}" alt="user-img" width="36" class="thumb-sm img-circle">
                    <b class="hidden-xs">{!! Auth::user()->name !!}</b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="{{route('user.get.profile')}}"><i class="ti-user"></i> Trang cá nhân</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0)" onclick="if(confirm('Bạn có muốn đăng xuất')){event.preventDefault();document.getElementById('logout-form').submit();}"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                    <form id="logout-form" action="{{ route('user.post.logout') }}" method="POST" style="display: none;"><input type="text" hidden name="_token" value="{{csrf_token()}}"></form>
                </ul>

                <!-- /.dropdown-user -->
            </li>
            @else
                <li>
                    <a class="profile-pic" href="{{ route('user.get.register') }}"><i class="fa fa-lock"></i><font class="hidden-xs"> Đăng ký </font></a>
                    <!-- /.dropdown-user -->
                </li>
                <li>
                    <a class="profile-pic" href="{{ route('user.get.login') }}"><i class="fa fa-unlock-alt"></i><font class="hidden-xs"> Đăng Nhập </font></a>
                </li>
            @endif
            <!-- .Megamenu -->
            <li class="mega-dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                    <span class="hidden-xs">Menu</span> <i class="icon-options-vertical"></i>
                </a>
                <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                    <?php $i=1 ?>
                    @if($cate_top)
                        @foreach($cate_top as $item)
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">{{$item['name']}}</li>
                                    @if($item['child'])
                                        @foreach($item['child'] as $ite)
                                            <li><a href="{{route('post.category',['name'=>$ite['alias']])}}">{{$ite['name']}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            @if($i%4 == 0 )
                                <div class="clearfix"></div>
                            @endif
                            <?php $i++ ?>
                        @endforeach
                    @endif

                    <li class="col-sm-12 m-t-40 demo-box">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="white-box text-center bg-purple">
                                    <a href="#" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>
                                        Các chức năng sắp ra mắt
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="white-box text-center bg-success">
                                    <a href="#" target="_blank" class="text-white">
                                        <i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>
                                        Về chúng tôi
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="white-box text-center bg-info">
                                    <a href="#" target="_blank" class="text-white">
                                        <i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>
                                        Hợp tác và phát triển
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            @if(!empty(Auth::user()->id))
            <!-- /.Megamenu -->
            <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-themify-favicon-alt"></i> Theo dõi</a></li>
            <!-- /.dropdown -->
            @endif
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('front-end.common.nav-left')
<!-- Left navbar-header end -->