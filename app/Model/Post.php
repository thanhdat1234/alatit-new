<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use Illuminate\Support\Facades\DB;

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
        $where = ['p.status'=>1];
        $data = DB::table('posts as p')
            ->join('location as l', 'l.id', '=', 'p.location_id')
            ->join('location as lc', 'lc.id', '=', 'p.l_child')
            ->join('cates as c', 'c.id', '=', 'p.cate_id')
            ->join('cates as cc', 'cc.id', '=', 'p.c_child')
            ->join('users as u', 'u.id', '=', 'p.user_id')
            ->select('p.id as pid','p.location_id as p_local',
                'p.alias as p_alias','p.intro as p_intro',
                'p.content as p_content','p.created_at as p_created_at',
                'u.id as u_id','u.fullname as u_fullname','u.name as u_name','u.avatar as u_avatar',
                'l.name as l_name','l.id as l_id','l.code as l_code','l.parent_id as l_parent',
                'lc.name as lc_name','lc.id as lc_id','lc.code as lc_code','lc.parent_id as lc_parent',
                'c.name as c_name','c.id as c_id','c.alias as c_alias',
                'cc.name as cc_name','cc.id as cc_id','cc.alias as cc_alias'
            )
            ->where($where)
            ->orderBy('p.id','DESC')
            ->limit(10)->get();
        return $data;
    }
}
