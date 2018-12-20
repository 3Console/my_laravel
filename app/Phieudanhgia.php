<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phieudanhgia extends Model
{
    protected $table = "phieu_danh_gia";
    public function phantieuchi()
    {
    	return $this->hasMany('App\Phantieuchi', 'id_phieu', 'id');
    }
    public function tieuchi(){
        return $this->hasManyThrough('App\Tieuchi', 'App\Phantieuchi', 'id_phantieuchi', 'id_phieu', 'id');
    }
}
