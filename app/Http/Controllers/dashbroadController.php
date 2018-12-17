<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Input;
use App\Item;
use DB;
use App\Sinhvien;
use App\Lopmonhoc;
use Excel;
use App\Canbo;

class dashbroadController extends Controller
{
    public function getListSinhvien() 
    {
        $sinhvien = Sinhvien::all();
        return view('pages.sinh-vien', ['sinhvien' => $sinhvien]);
    }
    public function getListCanbo() 
    {
        $canbo = Canbo::all();
        return view('pages.can-bo', ['canbo' => $canbo]);
    }
    public function getListMonhoc() 
    {
        $lopmonhoc = Lopmonhoc::all();
        return view('pages.lop-mon-hoc', ['lopmonhoc' => $lopmonhoc]);
    }
    public function getAddSinhVien(){
        return view('pages.sinh-vien-add');
    }
    public function postAddSinhVien(Request $request){
        $this->validate($request,
        [
            'msv' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
            'hoten' => 'required',
            'email' => 'required',
            'khoahoc' => 'required'
        ],
        [
            'msv.required'=>'Invalid msv',
            'password.required'=>'Invalid password',
            'password.min'=>'Password must have at least 8 character',
            'repassword.required'=>'Invalid repassword',
            'repassword.same'=>'Repassword must have same character as password',
            'hoten.required'=>'Invalid hoten',
            'email.required'=>'Invalid email',
            'khoahoc.required'=>'Invalid khoahoc'
        ]);

        $sinhvien = new Sinhvien;
        $sinhvien->msv = $request->msv;
        $sinhvien->mat_khau = bcrypt($request->password);
        $sinhvien->ho_ten = $request->hoten;
        $sinhvien->vnu_email = $request->email;
        $sinhvien->khoa_hoc = $request->khoahoc;
        $sinhvien->save();

        return redirect('/sinhvien/danhsach/them')->with('thongbao','Them thanh cong');
    }
    public function getEditSinhVien($id){
        $sinhvien = Sinhvien::find($id);
        return view('pages.sinh-vien-edit',['sinhvien'=>$sinhvien]);
    }
    public function postEditSinhVien(Request $request, $id){
        $sinhvien = Sinhvien::find($id);
        $this->validate($request,
        [
            'msv' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
            'hoten' => 'required',
            'email' => 'required',
            'khoahoc' => 'required'
        ],
        [
            'msv.required'=>'Invalid msv',
            'password.required'=>'Invalid password',
            'password.min'=>'Password must have at least 8 character',
            'repassword.required'=>'Invalid repassword',
            'repassword.same'=>'Repassword must have same character as password',
            'hoten.required'=>'Invalid hoten',
            'email.required'=>'Invalid email',
            'khoahoc.required'=>'Invalid khoahoc'
        ]);
        $sinhvien->msv = $request->msv;
        $sinhvien->mat_khau = bcrypt($request->password);
        $sinhvien->ho_ten = $request->hoten;
        $sinhvien->vnu_email = $request->email;
        $sinhvien->khoa_hoc = $request->khoahoc;
        $sinhvien->save();

        return redirect()->back()->with('thongbao','Sua thanh cong');
    }
    public function getDeleteSinhVien($id){
        $sinhvien = Sinhvien::find($id);
        $sinhvien->delete();

        return redirect('/sinhvien/danhsach')->with('thongbao','Xoa thanh cong');
    }
    public function getAddCanBo(){
        return view('pages.can-bo-add');
    }
    public function postAddCanBo(Request $request){
        $this->validate($request,
        [
            'username' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
            'hoten' => 'required',
            'email' => 'required'
        ],
        [
            'username.required'=>'Invalid username',
            'password.required'=>'Invalid password',
            'password.min'=>'Password must have at least 8 character',
            'repassword.required'=>'Invalid repassword',
            'repassword.same'=>'Repassword must have same character as password',
            'hoten.required'=>'Invalid hoten',
            'email.required'=>'Invalid email'
        ]);

        $canbo = new Canbo;
        $canbo->ten_dang_nhap = $request->username;
        $canbo->mat_khau = bcrypt($request->password);
        $canbo->ho_ten = $request->hoten;
        $canbo->vnu_email = $request->email;
        $canbo->save();

        return redirect('/canbo/danhsach/them')->with('thongbao','Them thanh cong');
    }
    public function getEditCanBo($id){
        $canbo = Canbo::find($id);
        return view('pages.can-bo-edit',['canbo'=>$canbo]);
    }
    public function postEditCanBo(Request $request, $id){
        $canbo = Canbo::find($id);
        $this->validate($request,
        [
            'username' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
            'hoten' => 'required',
            'email' => 'required'
        ],
        [
            'username.required'=>'Invalid username',
            'password.required'=>'Invalid password',
            'password.min'=>'Password must have at least 8 character',
            'repassword.required'=>'Invalid repassword',
            'repassword.same'=>'Repassword must have same character as password',
            'hoten.required'=>'Invalid hoten',
            'email.required'=>'Invalid email'
        ]);

        $canbo->ten_dang_nhap = $request->username;
        $canbo->mat_khau = bcrypt($request->password);
        $canbo->ho_ten = $request->hoten;
        $canbo->vnu_email = $request->email;
        $canbo->save();

        return redirect()->back()->with('thongbao','Sua thanh cong');
    }
    public function getDeleteCanBo($id){
        $canbo = Canbo::find($id);
        $canbo->delete();

        return redirect('/canbo/danhsach')->with('thongbao','Xoa thanh cong');
    }
    public function getAddLopMonHoc(){
        return view('pages.lop-mon-hoc-add');
    }
    public function postAddLopMonHoc(Request $request){
        $this->validate($request,
        [
            'idcanbo' => 'required',
            'malop' => 'required',
            'monhoc' => 'required',
            'thoigian' => 'required',
            'giangduong' => 'required'
        ],
        [
            'idcanbo.required'=>'Invalid idcanbo',
            'malop.required'=>'Invalid malop',
            'monhoc.required'=>'Invalid monhoc',
            'thoigian.required'=>'Invalid thoigian',
            'giangduong.required'=>'Invalid giangduong'
        ]);

        $lopmonhoc = new Lopmonhoc;
        $lopmonhoc->id_canbo = $request->idcanbo;
        $lopmonhoc->ma_lop = $request->malop;
        $lopmonhoc->mon_hoc = $request->monhoc;
        $lopmonhoc->thoi_gian = $request->thoigian;
        $lopmonhoc->giang_duong = $request->giangduong;
        $lopmonhoc->save();

        return redirect('/lopmonhoc/danhsach/them')->with('thongbao','Them thanh cong');
    }
    public function getEditLopMonHoc($id){
        $lopmonhoc = Lopmonhoc::find($id);
        return view('pages.lop-mon-hoc-edit',['lopmonhoc'=>$lopmonhoc]);
    }
    public function postEditLopMonHoc(Request $request, $id){
        $lopmonhoc = Lopmonhoc::find($id);
        $this->validate($request,
        [
            'idcanbo' => 'required',
            'malop' => 'required',
            'monhoc' => 'required',
            'thoigian' => 'required',
            'giangduong' => 'required'
        ],
        [
            'idcanbo.required'=>'Invalid idcanbo',
            'malop.required'=>'Invalid malop',
            'monhoc.min'=>'Invalid monhoc',
            'thoigian.min'=>'Invalid thoigian',
            'giangduong.min'=>'Invalid giangduong'
        ]);

        $lopmonhoc->id_canbo = $request->idcanbo;
        $lopmonhoc->ma_lop = $request->malop;
        $lopmonhoc->mon_hoc = $request->monhoc;
        $lopmonhoc->thoi_gian = $request->thoigian;
        $lopmonhoc->giang_duong = $request->giangduong;
        $lopmonhoc->save();

        return redirect()->back()->with('thongbao','Sua thanh cong');
    }
    public function getDeleteLopMonHoc($id){
        $lopmonhoc = Lopmonhoc::find($id);
        $lopmonhoc->delete();

        return redirect('/lopmonhoc/danhsach')->with('thongbao','Xoa thanh cong');
    }
    public function getDangnhapAdmin(){
        return view('login');
    }
    public function postDangnhapAdmin(Request $request){
        $sinhvien = Sinhvien::all();
        $this->validate($request,
        [
            'username'=>'required',
            'password'=>'required|min:3'
        ],
        [
            'username.required'=>'Invalid username',
            'password.required'=>'Invalid password',
            'password.min'=>'Password must have at least 3 characters'
        ]);
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            if(Auth::user()->level == 0) {
                return redirect('/')->with('thongbao', 'dang nhap thanh cong');
            } 
            else
                return redirect('test');
        }
        else {

            return redirect()->back()->with('thongbao', 'dang nhap that bai!!');
        }
    }
    public function getDangXuatAdmin(){
        Auth::logout();
        return redirect('/dangnhap');
    }
}
