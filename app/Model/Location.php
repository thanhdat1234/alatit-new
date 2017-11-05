<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table='location';
    public $timestamp=true;
    static public function getList(){
        $location = Location::where(['parent_id'=>'00'])->orderBy('name','ASC')->get();
        if($location){
            return $location;
        }else{
            return null;
        }
    }
}
