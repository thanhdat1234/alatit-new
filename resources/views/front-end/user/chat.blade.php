@extends('front-end.home')
@section('content')
    <div class="chat-main-box">
        <!-- .chat-left-panel -->
        <div class="chat-left-aside">
            <div class="open-panel"><i class="ti-angle-right"></i></div>
            <div class="chat-left-inner">
                <div class="form-material">
                    <input class="form-control p-20" type="text" placeholder="Search Contact">
                </div>
                <ul class="chatonline style-none ">
                    <li>
                        <a href="javascript:void(0)"><img src="{!! url('public/home/') !!}/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="active"><img src="{!! url('public/home/') !!}/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{!! url('public/home/') !!}/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{!! url('public/home/') !!}/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{!! url('public/home/') !!}/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{!! url('public/home/') !!}/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{!! url('public/home/') !!}/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="{!! url('public/home/') !!}/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                    <li class="p-20"></li>
                </ul>
            </div>
        </div>
        <!-- .chat-left-panel -->
        <!-- .chat-right-panel -->
        <div class="chat-right-aside">
            <div class="chat-main-header">
                <div class="p-20 b-b">
                    <h3 class="box-title">Chat Message</h3>
                </div>
            </div>
            <div class="chat-box">
                <ul class="chat-list slimscroll p-t-30">
                    <li>
                        <div class="chat-image"> <img alt="male" src="{!! url('public/home/') !!}/plugins/images/users/ritesh.jpg"> </div>
                        <div class="chat-body">
                            <div class="chat-text">
                                <h4>Ritesh</h4>
                                <p> Hi, Genelia how are you and my son? </p>
                                <b>10.00 am</b> </div>
                        </div>
                    </li>
                    <li class="odd">
                        <div class="chat-image"> <img alt="Female" src="{!! url('public/home/') !!}/plugins/images/users/genu.jpg"> </div>
                        <div class="chat-body">
                            <div class="chat-text">
                                <h4>Genelia</h4>
                                <p> Hi, How are you Ritesh!!! We both are fine sweetu. </p>
                                <b>10.03 am</b> </div>
                        </div>
                    </li>
                    <li>
                        <div class="chat-image"> <img alt="male" src="{!! url('public/home/') !!}/plugins/images/users/ritesh.jpg"> </div>
                        <div class="chat-body">
                            <div class="chat-text">
                                <h4>Ritesh</h4>
                                <p> Oh great!!! just enjoy you all day and keep rocking</p>
                                <b>10.05 am</b> </div>
                        </div>
                    </li>
                    <li class="odd">
                        <div class="chat-image"> <img alt="Female" src="{!! url('public/home/') !!}/plugins/images/users/genu.jpg"> </div>
                        <div class="chat-body">
                            <div class="chat-text">
                                <h4>Genelia</h4>
                                <p> Your movei was superb and your acting is mindblowing </p>
                                <b>10.07 am</b> </div>
                        </div>
                    </li>
                </ul>
                <div class="row send-chat-box">
                    <div class="col-sm-12">
                        <textarea class="form-control" placeholder="Type your message"></textarea>
                        <div class="custom-send"><a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip" title="Insert Emojis"><i class="ti-face-smile"></i></a> <a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip" title="File Attachment"><i class="fa fa-paperclip"></i></a>
                            <button class="btn btn-danger btn-rounded" type="button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .chat-right-panel -->
    </div>
@endsection
@section('script')
    <!-- Custom Theme JavaScript -->
    <script src="{!! url('public/home/') !!}/assets/js/custom.min.js"></script>
    <script src="{!! url('public/home/') !!}/assets/js/chat.js"></script>
@endsection