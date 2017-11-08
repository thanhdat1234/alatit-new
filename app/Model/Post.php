<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
}
