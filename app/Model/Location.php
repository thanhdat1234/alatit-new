<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table='location';
    public $timestamp=true;
    static public function getList(){

        $location = Location::where('type','<>','Phường')->where('type','<>','Xã')->where('type','<>','Thị Trấn')
            ->orderBy('name','ASC')->get();
        if($location){
            return $location;
        }else{
            return null;
        }
    }
    static public function getListFollowParent($parent_id = false){
        $parent = '00';
        if($parent_id){
           $parent = $parent_id;
        }
        $location = Location::where(['parent_id'=>$parent])->orderBy('name','ASC')->get()->toArray();
        if($location){
            return $location;
        }else{
            return null;
        }
    }
    static public function orderCategory(){
        $parent = Location::getListFollowParent('00');
        $i=0;
        foreach ($parent as $item){
            $parent[$i]['child'] = Location::getListFollowParent($item['code']);
            $i++;
        }
        return $parent;
    }


}
