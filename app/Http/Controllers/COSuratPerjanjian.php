<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\ModelTambahPegawai;
use App\ModelPembiayaan;
use App\ModelPerusahaan;
use App\ModelRekening;
use App\ModelTambahNasabah;
use App\ModelAdmin;

class COSuratPerjanjian extends Controller
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
        $id = base64_decode($id);
        $bulan = date('M');
        $tahun = date('Y');

        $data = ModelPembiayaan::where('Id_Pembiayaan', $id)->first();

        if($data) {
            $datarekening = ModelRekening::where('No_Rekening', $data->No_Rekening)->first();

            $datanasabah = ModelTambahNasabah::where('Id_Nasabah', $datarekening->Id_Nasabah)->first();

//            $dataAdmin = ModelAdmin::where('id_admin', $data->pengesah)->first();
//            dd($data);
            $datapegawai = ModelTambahPegawai::where('Id_Pegawai', Session::get('Id_Pegawai'))->first();

            $untuksiapa = 'wakil dari diri sendiri';

            $dataShare = array(
                'Id_Pembiayaan' => $id,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'datapembiayaan' => $data,
                'datarekening' => $datarekening,
                'datanasabah' => $datanasabah,
                'datapegawai' => $datapegawai,
                'jabatan' => 'Manager di BMT Prima Syariah',
                'untuksiapa' => $untuksiapa,
                'tujuan_akad' => $data->tujuan_akad,
                'Besar_Pembiayaan' => $data->Besar_Pembiayaan,
                'keuntungan' => $data->keuntungan,
                'Nisbah_Nasabah' => $data->Nisbah_Nasabah,
                'Nisbah_BMT' => $data->Nisbah_BMT
            );


            View::share($dataShare);
            return view('suratperjanjian');
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
