<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phieudanhgia extends Model
{
    protected $table = "phieu_danh_gia";
    public function svlop(){
        return $this->belongTo('App\Svlop', 'id_svlop', 'id');
    }
}
