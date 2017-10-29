<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $table='Posts';
    public $timestamp=true;
    public function cate()
    {
        return $this->belongstoMany('App\Cate');
    }

}
