<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svlop extends Model
{
    protected $table = 'sv_lop';
    public function phieudanhgia(){
        return $this->hasOne('App\Phieudanhgia', 'id_svlop', 'id');
    }

}
