<div class="row">
    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 inbox-panel">
        <div>
            <a href="#" class="btn btn-custom btn-block waves-effect waves-light">Bài đăng mới nhất </a>
            <div class="steamline">
                @for($i=0;$i<5;$i++)
                    <div class="sl-item">
                        <div class="sl-left">
                            <a href="">
                                <img class="img-circle" alt="user" src="{!! url('public/home/') !!}/plugins/images/users/genu.jpg">
                            </a>
                        </div>
                        <div class="sl-right">
                            <div><a href="#">Gohn Doe</a> <span class="sl-date">5 minutes ago</span></div>
                            <a class="text-dark" href="">Contrary to popular belief
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>