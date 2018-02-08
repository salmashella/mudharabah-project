<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelTambahNasabah;

class Nasabah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelTambahNasabah::all();

        if(count($data) > 0)
        {
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response ($res);
        }
        else
        {
            $res['message'] = "Data Tidak Ada";
            return response($res);
        }
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
//        {
//        $Nama = $request -> input ('Nama');
//        $Jenkel = $request -> input ('Jenkel');
//        $Alamat = $request -> input ('Alamat');
//        $Agama = $request -> input ('Agama');
//        $No_Telp = $request -> input ('No_Telp');
//        $Jenis_Identitas = $request -> input ('Jenis_Identitas');
//        $No_Identitas = $request -> input ('No_Identitas');
//        $Pekerjaan = $request -> input ('Pekerjaan');
//        $Tempat_Lahir = $request -> input ('Tempat_Lahir');
//        $Tanggal_Lahir = $request-> input ('Tanggal_Lahir');
//        $Nama_Ahliwaris = $reqest -> input ('Nama_Ahliwaris');
//        $Alamat_Ahliwaris = $request -> input ('Alamat_Ahliwaris');
//        $Hubungankeluarga_Ahliwaris = $request -> input ('Hubungankeluarga_Ahliwaris');
//
//        $data = new ModelTambahNasabah();
//        $data -> Nama = $Nama;
//        $data -> Jenkel = $Jenkel;
//        $data -> Alamat = $Alamat;
//        $data -> Agama = $Agama;
//        $data -> No_Telp = $No_Telp;
//        $data -> Jenis_Identitas = $Jenis_Identitas;
//        $data -> No_Identitas = $No_Identitas;
//        $data -> Pekerjaan = $Pekerjaan;
//        $data -> Tempat_Lahir = $Tempat_Lahir;
//        $data -> Tanggal_Lahir = $Tanggal_Lahir;
//        $data -> Nama_Ahliwaris = $Nama_Ahliwaris;
//        $data -> Alamat_Ahliwaris = $Alamat_Ahliwaris;
//        $data -> Hubungankeluarga_Ahliwaris = $Hubungankeluarga_Ahliwaris;
//
//        if($data->save())
//        {
//            $res['message'] = "Success";
//            $res['value'] = "$data";
//            return response($res);
//        }
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
        $data = ModelTambahNasabah::where('Id_Nasabah',$id)->get();

        if(count($data) > 0) //mengecek data kosong atau tidak
        {
            $res['message'] = "Success";
            $res['values'] = $data;
            return response ($res);
        }
        else
        {
            $res['message'] = "Failed";
            return response($res);
        }
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
