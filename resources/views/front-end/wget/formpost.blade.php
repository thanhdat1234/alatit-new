@if(!empty(Auth::user()->id))
    <div class="white-box">
        <div class="row">
            <a class="popup-with-form fcbtn btn btn-outline btn-success btn-1e text-center" style="width: 100%;text-transform: uppercase" href="#test-form"><i class="fa fa-star fa-spin" aria-hidden="true"></i> Đăng tin</a>
            <!-- form itself -->
            <!-- /.row -->
            <div id="test-form" class="mfp-hide white-popup-block lys-popup">
                <form action="javascript:void(0)" class="horizontal" name="data-post" id="file_put">
                    <input type="text" hidden name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control change_select" data-type="location" name="location_parent">
                                                <option value="0">--Tất cả tỉnh thành--</option>
                                                @if($location_total)
                                                    @foreach($location_total as $item)
                                                        <option value="{{$item['id']}}">{!! $item['name'] !!}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control" name="location_child" id="location_child">
                                                <option value="0">--Quận (Huyện)--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control change_select" data-type="category" data-child="cate_child" name="cate_parent">
                                                <option value="0">--Tất cả thể loại--</option>
                                                @if($cate_total)
                                                    @foreach($cate_total as $item)
                                                        <option value="{{$item['id']}}">{!! $item['name'] !!}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control" name="cate_child" id="cate_child">
                                                <option value="01">--Danh mục con--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control " id="textarea" name="content_post" placeholder="Bạn đăng gì ?"></textarea>
                        </div>
                    </div>
                </form>
                <form action="{{ route('user.post.upload_img') }}" data-ac="{{ route('user.post.upload_img') }}" method="POST" data-method="POST" class="dropzone" id="file_dropzone" name="images-post" enctype="multipart/form-data">
                    <input type="text" hidden name="_token" value="{{ csrf_token() }}">
                    <div class="fallback">
                        <input name="file[]" type="file" id="test_filez" multiple data-dz-remove/>
                    </div>
                </form>
                <form action="javascript:void(0)" class="horizontal" name="submit-post">
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <br>
                                        <button type="submit" class="btn btn-success pull-right"> <i class="fa fa-check"></i> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif