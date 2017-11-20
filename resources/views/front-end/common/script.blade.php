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
<script src="{!! url('public/home/') !!}/plugins/bower_components/emojionearea/dist/emojionearea.min.js"></script>
<script src="{!! url('public/home/') !!}/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<!--Style Switcher -->
<script src="{!! url('public/home/') !!}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
{{--menu--}}
@if(!empty(Auth::user()->id))
    @if($cate_total)
            <script>
                var $cate_total = {!! json_encode($cate_total,true) !!};
                console.log($cate_total);
            </script>
    @endif
    @if($location_total)
            <script>
                var $location_total = {!! json_encode($location_total,true) !!};
                console.log($location_total);
            </script>
    @endif
@endif
{{--/menu--}}
<script>
    $("#textarea").emojioneArea({
        pickerPosition    : "bottom", // top | bottom | right
        filtersPosition   : "bottom", // top | bottom
        tones:false,
        search:null,
        container: ".content_post"
    });
    $(".comment_post").emojioneArea({
        pickerPosition    : "bottom", // top | bottom | right
        filtersPosition   : "bottom", // top | bottom
        tones:false,
        search:null,
        autocomplete:true,
        events: {
            // events handlers
            // see events below
            keypress: function (editor, event) {
                console.log('event:keypress');
                console.log(event.keyCode);
                console.log(event);
                if(event.keyCode === 13)
                {
                    console.log('ok');
                    return false; // returning false will prevent the event from bubbling up.
                }
            },
        }
    });
    $(document).find(".emojionearea-search").remove();
    $(document).ready(function(){
        $(".change_select").unbind().bind('change',function(){
            var $type = $(this).attr('data-type');
            var $key = $(this).val();
            var $data = [];
            var $child = '';
            var $html = '';
            switch($type){
                case 'category' : $data = $cate_total;$child = 'cate_child';$html = '<option value="0">--Danh mục con--</option>' ; break;
                case 'location' : $data = $location_total;$child = 'location_child';$html = '<option value="0">--Quận (Huyện)--</option>'    ; break;
                default : $data = [];
            }
            if($data == null){
                console.log('fail');
                return;
            }else{
                /*console.log($data[$key].child);*/
                for(var $item in $data[$key].child){
                    var $value = $data[$key].child[$item];
                    $html += '<option value="'+$value['id']+'">'+$value['name']+'</option>';
                }
                $('select#'+$child).html($html);
            }
        });
        $('form[name="submit-post"]').unbind().bind('submit',function(){
            var $data = {};
            var $data ={
                '_token'     : '{{csrf_token()}}',
                'submit'    : $('form[name="submit-post"]').serialize(),
                'data'      : $('form[name="data-post"]').serialize()
            };
            $.ajax({
                url: '{{ route('user.put.post') }}',
                dataType :'JSON',
                data : $('form[name="data-post"]').serialize(),
                type : "POST",
                success : function(res,status){
                    console.log(res);
                    console.log(status);
                }
            });
        });
    });
</script>