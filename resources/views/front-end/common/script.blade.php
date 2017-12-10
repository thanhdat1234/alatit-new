<script src="{!! url('public/home/') !!}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! url('public/home/') !!}/assets/bootstrap/dist/js/tether.min.js"></script>
<script src="{!! url('public/home/') !!}/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{!! url('public/home/') !!}/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{!! url('public/home/') !!}/assets/js/custom.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="{!! url('public/home/') !!}/assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{!! url('public/home/') !!}/assets/js/waves.js"></script>
@yield('script')
<script type="text/javascript" src="{!! url('public/home/') !!}/plugins/bower_components/fancybox/ekko-lightbox.min.js"></script>

        <!--Counter js -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="{!! url('public/home/') !!}/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!--Morris JavaScript -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/raphael/raphael-min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="{!! url('public/home/') !!}/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<script src="{!! url('public/home/') !!}/plugins/bower_components/dropzone-master/dist/dropzone.js"></script>

<script src="{!! url('public/home/') !!}/plugins/bower_components/owl.carousel/owl.carousel.min.js"></script>
<script src="{!! url('public/home/') !!}/plugins/bower_components/owl.carousel/owl.custom.js"></script>
<!-- Magnific popup JavaScript -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="{!! url('public/home/') !!}/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>

<script src="{!! url('public/home/') !!}/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<!--Style Switcher -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!--Wave Effects -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/emojionearea/dist/emojionearea.min.js"></script>
<script src="{!! url('public/home/') !!}/assets/js/myscript.js"></script>
{{--menu--}}
@if(!empty(Auth::user()->id))
    @if($cate_total)
            <script>
                var $cate_total = {!! json_encode($cate_total,true) !!};
                //console.log($cate_total);
            </script>
    @endif
    @if($location_total)
            <script>
                var $location_total = {!! json_encode($location_total,true) !!};
                //console.log($location_total);
            </script>
    @endif
@endif
{{--/menu--}}
<script>
    $(document).ready(function(){
        url     = '{{ route('user.put.post') }}';
        token   = '{{csrf_token()}}';
        createPost(url,token);
        urldrop = '{{ route('user.post.upload_img') }}';
        dropFile(urldrop,token);
    });
</script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1653227008032363',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.11'
        });
        FB.AppEvents.logPageView();
    };
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>