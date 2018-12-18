<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tieuchi extends Model
{
	protected $table = "tieu_chi";
    public function phantieuchi()
    {
    	return $this->belongsTo('App\Phantieuchi', 'id_phantieuchi', 'id');
    }
}
