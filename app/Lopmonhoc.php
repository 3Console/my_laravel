<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lopmonhoc extends Model
{
    protected $table = "lop_mon_hoc";
    public function canbo(){
        return $this->belongsTo('App\Canbo', 'id_canbo', 'id');
    }

    public function sinhvien(){
        return $this->belongsToMany('App\Sinhvien', 'sv_lop', 'id_lop', 'id_sinhvien');
    }

}
