<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'products';
    public $timestamps = true;
    public function cate(){
        return $this->belongTo('App\Cate');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function pimages(){
        return $this->hasMany('App\Image');
    }
}
