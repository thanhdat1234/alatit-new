<script src="{!! url('public/home/') !!}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! url('public/home/') !!}/assets/bootstrap/dist/js/tether.min.js"></script>
<script src="{!! url('public/home/') !!}/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{!! url('public/home/') !!}/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="{!! url('public/home/') !!}/assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{!! url('public/home/') !!}/assets/js/waves.js"></script>
@yield('script')
<script src="{!! url('public/home/') !!}/plugins/bower_components/emojionearea/dist/emojionearea.min.js"></script>
<!--Style Switcher -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script>
    $("#textarea").emojioneArea({
        pickerPosition    : "bottom", // top | bottom | right
        filtersPosition   : "bottom", // top | bottom
        tones:false,
        search:null
    });
    $(document).find(".emojionearea-search").remove();
    $(document).ready(function(){
        $('form[name="submit-post"]').unbind().bind('submit',function(){
            var $data = {};
            /*var $data ={
                'submit' : $('form[name="submit-post"]').serialize(),
                'file' : $('form[name="file-post"]').serialize(),
                'data' : $('form[name="data-post"]').serialize()
            };*/

            var fd = new FormData();
            fd.append("abc", "abc");
            //var test = $('form[name="submit-post"]').serialize();
            fd.append('_token','{{ csrf_token() }}');
            fd.append('file',$('form[name="file-post"]').serialize());
            fd.append('data',$('form[name="data-post"]').serialize());
            fd.append('submit',$('form[name="submit-post"]').serialize());

            fd.append('filez',$("#test_file")[0].files[0]);
            fd.append('filezzzz',$("#test_filez")[0].files[0]);
            $data = fd;
            $.ajax({
                url: '{{ route('user.post') }}',
                data : $data,
                type : "POST",
                processData: false,
                contentType: false,
                success : function(res,status){
                    console.log(res);
                    console.log(status);
                }
            });
        });

        /*$('form[name="file-post"]').unbind().bind('submit',function(){
            var $data = {};
            /!*var $data ={
                'submit' : $('form[name="submit-post"]').serialize(),
                'file' : $('form[name="file-post"]').serialize(),
                'data' : $('form[name="data-post"]').serialize()
            };*!/

            var fd = new FormData();
            fd.append("abc", "abc");
            //var test = $('form[name="submit-post"]').serialize();
            fd.append('_token','{{ csrf_token() }}');
            fd.append('filezzzz',$("#test_filez")[0].files[0]);
            $data = fd;
            $.ajax({
                url: '{{ route('user.post') }}',
                data : $data,
                type : "POST",
                processData: false,
                contentType: false,
                success : function(res,status){
                    console.log(res);
                    console.log(status);
                }
            });
        });*/
    });
</script>