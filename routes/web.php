
<?php

//login
use Illuminate\Support\Facades\Route;

Route::get('/login/','COLogin@index');
Route::post('/onLoginClicked/','COLogin@store');

//logout
Route::get('/logout/', 'COHome@logout');

//Home
Route::get('/home','COHome@index');

//Pegawai (Admin)
Route::get('/formpegawai','COTambahPegawai@index');
Route::post('/tambahpegawai','COTambahPegawai@store');

Route::get('/lihatpegawai','COPegawai@index');

Route::resource('editpegawai','COPegawai');
Route::get('/updatepegawai/{id}','COPegawai@show');
Route::post('/editpegawai/{id}','COPegawai@update');


//Password
Route::get('/updatepassword/{id}','COGantiPassword@show');
Route::post('/editpassword/{id}','COGantiPassword@update');
Route::resource('/editpassword','COGantiPassword');


//Nasabah
Route::get('/formnasabah','COTambahNasabah@index');
Route::post('/tambahnasabah','COTambahNasabah@store');
Route::get('/lihatnasabah', 'COTampilNasabah@index');

Route::resource('editnasabah','COEditNasabah');
Route::get('/updatenasabah/{id}/', 'COEditNasabah@show');
Route::post('/editnasabah/{Id_Nasabah}','COEditNasabah@update');


Route::get('/detailnasabah/{id}','COTampilNasabah@show');


//pembiayaan

Route::get('/formpembiayaan','COTambahPembiayaan@index');

Route::post('/tambahpembiayaan','COTambahPembiayaan@store');
Route::get('/lihatpembiayaan', 'COTampilPembiayaan@index');
Route::get('/detailpembiayaan/{id}','COTampilPembiayaan@show');
Route::get('/checkrek/{id}', 'COLihatRekening@checkrek');
Route::get('/checkbayar/{id}', 'COTambahPembiayaan@checkbayar');

Route::get('/detailpembiayaan/{id}', 'CODetailPembiayaan@show');

//Route::get('/editjaminan/{id}/', 'COJaminan@show');
Route::resource('editjaminan','COJaminan');
Route::get('/verifikasipembiayaan/{id}/', 'COPersetujuan@show');
Route::post('/editjaminan/{id}','COJaminan@update');

//rekening
//Route::get('/formrekening', 'COTambahRekening@index');
//Route::post('/tambahrekening', 'COTambahRekening@store');
Route::get('/lihatrekening', 'COLihatRekening@index');

Route::resource('editrekening','COEditRekening');
Route::get('/updaterekening/{id}/', 'COEditRekening@show');
Route::post('/editrekening/{id}','COEditRekening@update');

//Persetujuan

Route::resource('formpersetujuan','COPersetujuan');
Route::get('/verifikasipembiayaan/{id}/', 'COPersetujuan@show');
Route::post('/editpersetujuan/{id}','COPersetujuan@update');

//Surat Kontrak
Route::get('/suratperjanjian/{id}', 'COSuratPerjanjian@show');


//
//Route::resource('formpersetujuan','COPersetujuan');
//Route::get('/checkverif/{id}/', 'COPersetujuan@checkverif');
//Route::post('/verifikasipersetujuan/','COPersetujuan@store');

//----Route::get('/lihatpersetujuan', 'COLihatPembiayaan@index');


//pembayaran

//Route::resource('formpembayaran','COTambahPembayaran');
//
Route::get('/formpembayaran','COTambahPembayaran@index');
Route::post('/tambahpembayaran','COTambahPembayaran@store');

//Route::get('/detailpembayaran/{id}','CODetailPembayaran@show');
Route::get('/lihatpembayaran', 'COLihatPembayaran@index');

Route::get('/detailpembayaran','COTambahPembayaran@store');
Route::get('/detailpembayaran/{id}','COTambahPembayaran@show');

////Cek Rekening
//Route::get('/pembiayaan/cek', 'COCekRekening@index');
//Route::post('/cekrekening', 'COCekRekening@store');


//Jurnal
Route::get('/lihattransaksi/{id}', 'COLihatTransaksi@show');

Route::get('/jurnal/', 'CONeraca@index');

// login user
Route::get('/user/login', 'COLoginUser@index');
Route::post('/user/login/check', 'COLoginUser@store');

Route::get('/user/data/{id}', 'COCekDataUser@show');




//REST API

//pembiayaan
Route::get('/dtlpembiayaan/','Pembiayaan@index');
Route::get('/dtlpembiayaan/{id}','Pembiayaan@show');

//nasabah
Route::get('/dtlnasabah','Nasabah@index');
Route::get('/dtlnasabah/{id}','Nasabah@show');

//Pasangan
Route::get('/dtlpasangan','Pasangan@index');
Route::get('/dtlpasangan/{id}','Pasangan@show');

//Perusahaan
Route::get('/dtlperusahaan','Perusahaan@index');
Route::get('/dtlperusahaan/{id}','Perusahaan@show');

//Penghasilan
Route::get('/dtlpenghasilan','Penghasilan@index');
Route::get('/dtlpenghasilan/{id}','Penghasilan@show');

//rekening
Route::get('/dtlrekening','Rekening@index');
Route::get('/dtlrekening/{id}','Rekening@show');

//Pegawai
Route::get('/dtlpegawai','Pegawai@index');
Route::get('/dtlpegawai/{id}','Pegawai@show');

//Pembayaran
Route::get('/dtlpembayaran','Pembayaran@index');
Route::get('/dtlpembayaran/{id}','Pembayaran@show');


Route::get('/cek', function(){
   return Session::get('Id_Pegawai');
});












////sitemap
//
//Route::get('/sitemap','SitemapController@index');
//Route::get('/sitemap/posts','SitemapController@posts');
//Route::get('/sitemap/categories','SitemapController@categories');