<?php

namespace App\Http\Controllers;

use App\ModelTambahPegawai;
use App\ModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class COTambahPegawai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!session('isAdminLoggedIn')) {
            return Redirect::to('login');
        }

        $title = "Add Pegawai";
        $content = view('formpegawai');

        return view('header', compact('title', 'content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $Nama_Pegawai = $request->input('Nama_Pegawai');
        $Alamat = $request->input('Alamat');
        $Jabatan = $request->input('Jabatan');
        $Jenkel = $request->input('Jenkel');
        $No_Telp = $request->input('No_Telp');
        $Agama = $request->input('Agama');
        $Tempat_Lahir = $request->input('Tempat_Lahir');
        $Tanggal_Lahir = $request->input('Tanggal_Lahir');
        $Status = $request->input('Status');
        $Username = $request->input('Username');
        $Password = $request->input('Password');

        $datatambahpegawai = ModelTambahPegawai::create([
            'Nama_Pegawai' => $Nama_Pegawai,
            'Alamat' => $Alamat,
            'Jabatan' => $Jabatan,
            'Jenkel' => $Jenkel,
            'No_Telp' => $No_Telp,
            'Agama' => $Agama,
            'Tempat_Lahir' => $Tempat_Lahir,
            'Tanggal_Lahir' => $Tanggal_Lahir,
            'Status' => $Status,
            'Username' => $Username,
            'Password' => $Password,
        ]);

//        if($datatambahpegawai)
//        {
////            $data = ModelTambahPegawai::all()->where('Id_Pegawai', '=', $Id_Pegawai)->first();
////
////
////
////            $dataAdmin = ModelAdmin::create([
////                'Id_Pegawai' => $Id_Pegawai,
////            ]);
////            if($dataAdmin)
////            {
////                return Redirect::to('lihatpegawai')->with('message','Berhasil mendapatkan Id Admin ' .$dataAdmin->id_admin);
////            }
////            else
//            {
//                echo "gagal";
//            }
            return Redirect::to('lihatpegawai');
        }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
