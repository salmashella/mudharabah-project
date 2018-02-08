<?php

namespace App\Http\Controllers;

use App\ModelPembiayaan;
use App\ModelRekening;
use App\ModelPembayaran;
use App\ModelTambahNasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class COLihatRekening extends Controller
{
    public function checkrek($id)
    {
        $get = ModelRekening::where('No_Rekening', $id)->first();
        $datapembiayaan = ModelPembiayaan::where('No_Rekening', $id)->first();
        $getpembayaran = ModelPembayaran::where('No_Rekening',$id)->orderBy('id_pembayaran','desc')->first();

        $getnasabah = ModelTambahNasabah::where('Id_Nasabah', $get->Id_Nasabah)->first();


//        if($datapembayaran == null) {
//            return $getnasabah = ModelTambahNasabah::where('Id_Nasabah', $get->Id_Nasabah)->first();
//        }
//        else {
//            return '0';
//        }
        if(count($getpembayaran) > 1){
            $data = [
                "No_Rekening"=>$get->No_Rekening,
                "Id_Nasabah"=>$getnasabah->Id_Nasabah,
                "Nama"=>$getnasabah->Nama,
                "status"=>$get->Status,
                "status_pembayaran" => $getpembayaran->status_pembayaran,
            ];
        }
        else{
            $data = [
                "No_Rekening"=>$get->No_Rekening,
                "Id_Nasabah"=>$getnasabah->Id_Nasabah,
                "Nama"=>$getnasabah->Nama,
                "status"=>$get->Status
            ];
        }


        return $data;


//        public function checkrek($id)
//    {
//        $get = ModelRekening::where('No_Rekening', $id)->first();
//        $datapembiayaan = ModelPembiayaan::where('No_Rekening', $id)->where('status_pembayaran', '1')->first();
//
//        if($datapembiayaan == null) {
//            return $getnasabah = ModelTambahNasabah::where('Id_Nasabah', $get->Id_Nasabah)->first();
//        }
//        else {
//            return '0';
//        }

    }
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
        $result = DB::Table('tb_rekening')
            ->select('tb_rekening.*')
            ->get();

        $title = "Daftar Rekening";
        $content = view('lihatrekening');

        $data = array(
            'title' => $title,
            'content' => $content,
            'result' =>$result
        );

        View::share('result', $result);
        return view('header', $data);



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
