<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    protected $table = 'sinh_vien';
    public function lopmonhoc(){
        return $this->belongsToMany('App\Lopmonhoc', 'sv_lop', 'id_sinhvien', 'id_lop');
    }
    public function phieudanhgia(){
        return $this->hasManyThrough('App\Phieudanhgia', 'App\Svlop', 'id_sinhvien', 'id_svlop', 'id');
    }
    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public $fillable = ['msv', 'mat_khau', 'ho_ten', 'vnu_email', 'khoa_hoc'];
}
