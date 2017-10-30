<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model {
    protected $table='cates';
    public $timestamp=true;
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
