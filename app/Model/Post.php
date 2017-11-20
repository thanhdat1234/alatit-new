<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model {

    protected $table='posts';
    public $timestamp=true;
    public function cate()
    {
        return $this->belongstoMany('App\Cate');
    }
    static public function getList($wheres = false){
        $where = [['status', '=', '1']];
        if(!empty($wheres) && is_array($wheres) && $wheres != null){
            $where = array_merge($where,$wheres);
        }
        $data = Service::where($where)
            ->orderBy('id','DESC')
            ->paginate(12);
        return $data;
    }
    static public function insertData($request){
        //echo $request['content_post'];
        //echo htmlspecialchars($request['content_post']);
        //pre($request);
        $item = new Post();
        $item->user_id          = Auth::user()->id;
        $item->location_id      = $request['location_parent'];
        $item->l_child          = $request['location_child'];
        $item->alias            = strtotime("now");
        $item->status           = 1;
        $item->cate_id          = $request['cate_parent'];
        $item->c_child          = $request['cate_child'];
        $item->content          = trim($request['content_post']);
        $item->intro            = (string)json_encode($request['files']);
        $item->save();
        return $item->id;
    }
    static public function getRow($id){
        //echo $request['content_post'];
        //echo htmlspecialchars($request['content_post']);
        //pre($request);
        $item = Post::findOrFail((int)$id);
        if($item){
            return $item;
        }else{
            return false;
        }
    }
    static public function getListNew(){
        $where = ['status'=>1];
        $data = Post::where($where)
            ->orderBy('id','DESC')
            ->limit(10)->get();
        return $data;
    }
}
