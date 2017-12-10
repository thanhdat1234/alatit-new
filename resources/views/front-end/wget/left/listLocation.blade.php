<div class="row">
    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
        <h4 href="#" class="btn btn-danger btn-block waves-effect waves-light">Địa điểm tìm kiếm </h4>
        <div class="">
            <ul class="list-group">
                {{--Item--}}
                {{--{{pre($location)}}--}}
                @foreach($location as $item)
                    <li class="list-group-item">
                        <i class="ti-plus text-success"></i>
                        <a href="{{route('post.location',[replace($item['name']),$item['id'],$item['code'],$item['parent_id']])}}"> {{$item['name']}}</a>
                    </li>
                @endforeach
                {{--/item--}}
            </ul>
        </div>
        <hr class="m-t-5">
    </div>
</div>