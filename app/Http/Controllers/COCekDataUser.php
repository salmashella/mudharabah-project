<?php

namespace App\Http\Controllers;

use App\ModelPembiayaan;
use App\ModelRekening;
use App\ModelTambahNasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class COCekDataUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $id = base64_decode($id);

        $datarekening = ModelRekening::where('No_Rekening', $id)->first();

        $datadetail = DB::Table('tb_nasabah')
            ->join('tb_rekening', 'tb_rekening.Id_Nasabah', '=' ,'tb_nasabah.Id_Nasabah')
            ->join('tb_datapasangan', 'tb_datapasangan.Id_Nasabah', '=' ,'tb_nasabah.Id_Nasabah')
            ->join('tb_perusahaan', 'tb_perusahaan.Id_Nasabah', '=' ,'tb_nasabah.Id_Nasabah')
            ->join('tb_datapenghasilan', 'tb_datapenghasilan.Id_Nasabah', '=' ,'tb_nasabah.Id_Nasabah')
            ->select('tb_rekening.*', 'tb_nasabah.*', 'tb_datapasangan.*', 'tb_perusahaan.*', 'tb_datapenghasilan.*')
            ->where('tb_nasabah.Id_Nasabah', '=', $datarekening->Id_Nasabah)
            ->first();

        $datapembiayaan = ModelPembiayaan::where('No_Rekening', $id)->get();

        $datadetail = array(
            'result' =>  $datadetail,
            'datapembiayaan' => $datapembiayaan
        );

        return view('cekdetailnasabah')->with($datadetail);
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
