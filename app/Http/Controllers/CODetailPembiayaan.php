<?php

namespace App\Http\Controllers;

use App\ModelPembayaran;
use App\ModelPembiayaan;
use Illuminate\Http\Request;

class CODetailPembiayaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        //
//        $data = ModelPembiayaan::all();
//
//        if(count($data) > 0) //mengecek data kosong atau tidak
//        {
//            $res['message'] = "Success";
//            $res['values'] = $data;
//            return response ($res);
//        }
//        else
//        {
//            $res['message'] = "Empty";
//            return response($res);
//        }
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

        $datapembiayaan = ModelPembiayaan::where('Id_Pembiayaan', $id)->first();
        $jumlahpembayaran = ModelPembayaran::where('Id_Pembiayaan', $id)->count();
        $datapembayaranterakhir = ModelPembayaran::where('Id_Pembiayaan', $id)->orderBy('created_at', 'desc')->first();
        $datapembayaran = ModelPembayaran::where('Id_Pembiayaan', $id)->get();

//        $sisacicilan = $datapembiayaan->Jangka_Waktu - $jumlahpembayaran;

        if(!$datapembayaranterakhir) {
            $sisa_bayar = $datapembiayaan->Besar_Pembiayaan;
        }
        else {
            $sisa_bayar = $datapembayaranterakhir->sisa_pembayaran;
        }

        $data = array(
            'Id_Pembiayaan' => $id,
            'data_pembiayaan' => $datapembiayaan,
//            'estimasi_sisa_cicilan' => $sisacicilan,
            'sisa_bayar' => $sisa_bayar,
            'data_pembayaran' => $datapembayaran
        );

        return view('cekdetailpembiayaan')->with($data);
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
