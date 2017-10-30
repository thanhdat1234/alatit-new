@extends('front-end.index')
@section('style')
    <!-- toast CSS -->
    <link href="{!! url('public/home/') !!}/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{!! url('public/home/') !!}/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
@endsection
@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="row row-in">
                    <div class="col-lg-3 col-sm-6 row-in-br">
                        <div class="col-in row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center fcbtn btn btn-danger btn-outline btn-1e">
                                <i data-icon="E" class="linea-icon linea-basic"></i>

                               <p>Hàng triệu <br>sản phẩm được giao bán</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                        <div class="col-in row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center fcbtn btn btn-info btn-outline btn-1e">
                                <i data-icon="E" class="icon-people"></i>

                                <p>Hơn 10.000 <br>Thành viên</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 row-in-br">
                        <div class="col-in row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center fcbtn btn btn-warning btn-outline btn-1e">
                                <i data-icon="E" class="icon-bubble"></i>

                                <p>Chat online <br>cho người bán.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  b-0">
                        <div class="col-in row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center fcbtn btn btn-success btn-outline btn-1e">
                                <i data-icon="E" class="ti-user"></i>
                                <p>Hơn 1000 <br>tin tuyển dụng.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--row -->
    <!-- /.row -->
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
        </div>

        <div class="col-md-5 col-lg-7 col-sm-12 col-xs-12">
            <hr class="m-t-5">
            <div class="white-box">
                <div class="comment-center">
                    <div class="comment-body">
                        <div class="user-img"> <img src="{!! url('public/home/') !!}/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                        <div class="mail-contnet">
                            <h5>Pavan kumar</h5>
                            <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2017</span></div>
                    </div>
                    <div class="comment-body">
                        <div class="user-img"> <img src="{!! url('public/home/') !!}/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> </div>
                        <div class="mail-contnet">
                            <h5>Sonu Nigam</h5>
                            <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span><span class="label label-rounded label-success">APPROVED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2017</span></div>
                    </div>
                    <div class="comment-body">
                        <div class="user-img"> <img src="{!! url('public/home/') !!}/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> </div>
                        <div class="mail-contnet">
                            <h5>Arijit Sinh</h5>
                            <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. </span><span class="label label-rounded label-danger">REJECTED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2017</span></div>
                    </div>
                    <div class="comment-body b-none">
                        <div class="user-img"> <img src="{!! url('public/home/') !!}/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                        <div class="mail-contnet">
                            <h5>Pavan kumar</h5>
                            <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span> <a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2017</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-lg-3 col-sm-16 col-xs-12">
            <div class="row">
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 inbox-panel">
                    <div>
                        <a href="#" class="btn btn-custom btn-block waves-effect waves-light">Top tìm kiếm </a>
                        <div class="list-group mail-list m-t-20">
                            <a href="inbox.html" class="list-group-item active">Iphone</a>
                            <a href="inbox.html" class="list-group-item active">Macbook</a>
                            <a href="inbox.html" class="list-group-item active">Ipad 2</a>
                            <a href="inbox.html" class="list-group-item active">Suface</a>
                        <hr class="m-t-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--row -->
    <!-- row -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                <div class="white-box">
                    <h4 class="box-title">Gửi yêu cầu cho chúng tôi</h4>
                    <form class="form-horizontal form-agent-inq">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="E-Mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-danger btn-rounded pull-right">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="white-box">
                <h4 class="box-title">Tin tức</h4>
                <div class="pro-list">
                    <div class="pro-img p-r-10">
                        <a href="javascript:void(0)">
                            <img src="{!! url('public/home/') !!}/plugins/images/property/prop1.jpeg" alt="property" style="width: 100px; height: 66px;">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h5 class="m-t-0 m-b-5">
                            <a href="javascript:void(0)">4 BHK Avenue Street, Mountain View</a>
                        </h5>
                        <p class="text-muted font-12">Oct 07, 2015 | Jon Doe</p>
                    </div>
                </div>
                <div class="pro-list">
                    <div class="pro-img p-r-10">
                        <a href="javascript:void(0)">
                            <img src="{!! url('public/home/') !!}/plugins/images/property/prop2.jpeg" alt="property" style="width: 100px; height: 66px;">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h5 class="m-t-0 m-b-5">
                            <a href="javascript:void(0)">3 BHK 221B Baker Street, London</a>
                        </h5>
                        <p class="text-muted font-12">Jun 21, 2017 | Jon Doe</p>
                    </div>
                </div>
                <div class="pro-list">
                    <div class="pro-img p-r-10">
                        <a href="javascript:void(0)">
                            <img src="{!! url('public/home/') !!}/plugins/images/property/prop3.jpeg" alt="property" style="width: 100px; height: 66px;">
                        </a>
                    </div>
                    <div class="pro-detail">
                        <h5 class="m-t-0 m-b-5">
                            <a href="javascript:void(0)">5 BHK Manhattan, New York</a>
                        </h5>
                        <p class="text-muted font-12">Jan 11, 2017 | Jon Doe</p>
                    </div>
                </div>
                <div class="text-right">
                    <a href="javascript:void(0);" class="btn btn-sm btn-rounded btn-info m-t-10">xem tất cả...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
@section('script')
    <!--Counter js -->
    <script src="{!! url('public/home/') !!}/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="{!! url('public/home/') !!}/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="{!! url('public/home/') !!}/plugins/bower_components/raphael/raphael-min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{!! url('public/home/') !!}/assets/js/custom.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{!! url('public/home/') !!}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{!! url('public/home/') !!}/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="{!! url('public/home/') !!}/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*$.toast({
                heading: 'Welcome to Elite admin',
                text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'info',
                hideAfter: 3500,

                stack: 6
            })*/
        });
    </script>
@endsection
