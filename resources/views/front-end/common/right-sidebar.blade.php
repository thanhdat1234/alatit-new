@if(!empty(Auth::user()->id))
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Thành viên bạn theo dõi <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
            <ul class="m-t-20 chatonline">
                <li>
                    <a href="javascript:void(0)"><img src="{!! url('public/home/') !!}/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif