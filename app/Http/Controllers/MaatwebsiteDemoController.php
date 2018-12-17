<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Item;
use DB;
use App\Sinhvien;
use App\Lopmonhoc;
use Excel;
use App\Canbo;
use App\Phieudanhgia;
use App\Svlop;

class MaatwebsiteDemoController extends Controller
{
    public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel($type)
	{
		$data = Item::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function importExcel(Request $request)
	{
		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['ten' => $value->ten];
				}
				if(!empty($insert)){
					DB::table('phieu_danh_gia')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}
	public function getTest(Request $request) {
		$canbo = Canbo::all();
		$phieudanhgia = Phieudanhgia::all();
		$sv_lop = Svlop::all();
		$lopmonhoc= Lopmonhoc::where('id', 2)->get();
		$sinhvien = Sinhvien::where('id', 4)->get();
		return view('test', ['canbo' => $canbo, 'lopmonhoc' => $lopmonhoc, 'sv_lop' => $sv_lop, 'sinhvien' => $sinhvien, 'phieudanhgia' => $phieudanhgia]);
	}

}
