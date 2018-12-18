<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Phieudanhgia;
use App\Phantieuchi;
use App\Tieuchi;

class SurveyController extends Controller
{
	public function getMaubaocao()
	{
		$phantieuchi = Phantieuchi::all();
		return view('pages.mau-bao-cao', ['phantieuchi' => $phantieuchi]);
	}
	public function getEditMaubaocao()
	{	
		$phantieuchi = Phantieuchi::all();
		$tieuchi = Tieuchi::all();
		return view('pages.edit-mau-bao-cao', ['phantieuchi' => $phantieuchi, 'tieuchi' => $tieuchi]);
	}
	public function postChangeStatus(Request $request)
	{
		$tieuchi = Tieuchi::where('id', $request->id); 
		if($request->active == 1) {
			$tieuchi->update(['active' => 0]);
			return response()->json([
				'error' => false,
				'active' => 0
			], 200);
		}
		else if($request->active == 0) {
			$tieuchi->update(['active' => 1]);
			return response()->json([
				'error' => false,
				'active' => 1
			], 200);
		}
	}
}
