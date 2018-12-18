<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phantieuchi extends Model
{
    protected $table = "phan_tieu_chi";
    public function phieudanhgia()
    {
    	return $this->belongsTo('App\Phieudanhgia', 'id_phieu', 'id');
    }
    public function tieuchi()
    {
    	return $this->hasMany('App\Tieuchi', 'id_phantieuchi', 'id');
    }
}
