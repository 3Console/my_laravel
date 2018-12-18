<?php

//use Illuminate\Routing\Route;

// use Illuminate\Routing\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashbroad');
});
Route::get('/sinhvien/danhsach', 'dashbroadController@getListSinhvien');
Route::get('/canbo/danhsach', 'dashbroadController@getListCanbo');
Route::get('/lopmonhoc/danhsach', 'dashbroadController@getListMonhoc');
Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
Route::get('/test', 'MaatwebsiteDemoController@getTest');

Route::get('/sinhvien/danhsach/them', 'dashbroadController@getAddSinhVien');
Route::post('/sinhvien/danhsach/them', 'dashbroadController@postAddSinhVien');

Route::get('/sinhvien/danhsach/sua/{id}', 'dashbroadController@getEditSinhVien');
Route::post('/sinhvien/danhsach/sua/{id}', 'dashbroadController@postEditSinhVien');

Route::get('/sinhvien/danhsach/xoa/{id}', 'dashbroadController@getDeleteSinhVien');

Route::get('/canbo/danhsach/them', 'dashbroadController@getAddCanBo');
Route::post('/canbo/danhsach/them', 'dashbroadController@postAddCanBo');

Route::get('/canbo/danhsach/sua/{id}', 'dashbroadController@getEditCanBo');
Route::post('/canbo/danhsach/sua/{id}', 'dashbroadController@postEditCanBo');

Route::get('/canbo/danhsach/xoa/{id}', 'dashbroadController@getDeleteCanBo');

Route::get('/lopmonhoc/danhsach/them', 'dashbroadController@getAddLopMonHoc');
Route::post('/lopmonhoc/danhsach/them', 'dashbroadController@postAddLopMonHoc');

Route::get('/lopmonhoc/danhsach/sua/{id}', 'dashbroadController@getEditLopMonHoc');
Route::post('/lopmonhoc/danhsach/sua/{id}', 'dashbroadController@postEditLopMonHoc');

Route::get('/lopmonhoc/danhsach/xoa/{id}', 'dashbroadController@getDeleteLopMonHoc');

Route::get('/dangnhap', 'dashbroadController@getDangnhapAdmin');
Route::post('/dangnhap', 'dashbroadController@postDangnhapAdmin');

Route::get('/dangxuat', 'dashbroadController@getDangXuatAdmin');

Route::get('/maukhaosat', 'SurveyController@getMaubaocao')->name('mks');
Route::get('/maukhaosat/edit', 'SurveyController@getEditMaubaocao')->name('edit');
Route::get('/maukhaosat/save', 'SurveyController@getSaveMaubaocao')->name('save-mks');
Route::post('/changestatus', 'SurveyController@postChangeStatus');
