<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canbo extends Model
{
    protected $table = "can_bo";
    public function lopmonhoc(){
        return $this->hasMany('App\Lopmonhoc', 'id_canbo', 'id');
    }
     public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
