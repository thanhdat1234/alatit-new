/**
 * Created by Admin on 11/25/2017.
 */
/*ajax*/
function createPost(url,token){
    /*url: '{{ route('user.put.post') }}',*/
    /*'_token'     : '{{csrf_token()}}',*/
    $('form[name="submit-post"]').unbind().bind('submit',function(){
        var $data = {};
        var $data ={
            '_token'    : token,
            'submit'    : $('form[name="submit-post"]').serialize(),
            'data'      : $('form[name="data-post"]').serialize()
        };
        $.ajax({
            url: url,
            dataType :'JSON',
            data : $('form[name="data-post"]').serialize(),
            type : "POST",
            success : function(res,status){
            console.log(res);
            console.log(status);
        }
        });
    });
}
function dropFile(url,token){
    /*url: '{{ route('user.post.upload_img') }}',*/
    Dropzone.autoDiscover = false;
        $("#file_dropzone").dropzone({
            maxFilesize: 5,
            dictDefaultMessage: 'Drag your images here',
            success: function(file,respons) {
                console.log(file);
                console.log(respons);
                var res = JSON.parse(respons);
                if (file.previewElement) {
                    $("#file_put").append('<input type="text" hidden name="files[]" value="'+res.name+'">');
                    return file.previewElement.classList.add("dz-success");
                }
            },
            removedfile: function(file) {
                $.ajax({
                    url: url,
                    data : {},
                type : "POST",
                    processData: false,
                    contentType: false,
                    success : function(res,status){
                    console.log(res);
                    console.log(status);
                }
            });
            var _ref;
            if (file.previewElement) {
                if ((_ref = file.previewElement) != null) {
                    _ref.parentNode.removeChild(file.previewElement);
                }
            }
            console.log("123");
        },
    });
}
/*animation*/
$(".commentf").click(function () {
    /*$(this).next().slideDown(500);*/
    var commentz = $(this).attr('data-comment');
    $("."+commentz).slideDown(500);
});
$(".commentclose").click(function () {
    $(this).parents('.fb-comment').slideUp(500);
});
/*action*/
$("#textarea").emojioneArea({
    pickerPosition    : "bottom", // top | bottom | right
    filtersPosition   : "bottom", // top | bottom
    tones:false,
    search:null,
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
/*remove search emojiarea*/
$(document).find(".emojionearea-search").remove();
/*action change_select for form post*/
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
$(document).ready(function(){
    $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
        event.preventDefault();
        return $(this).ekkoLightbox({
            onShown: function() {
                if (window.console) {
                    return console.log('Checking our the events huh?');
                }
            },
            onNavigate: function(direction, itemIndex) {
                if (window.console) {
                    return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                }
            }
        });
    });
});