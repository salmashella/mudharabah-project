<?php

namespace App\Http\Controllers;

use App\ModelNeraca;
use App\ModelPembayaran;
use App\ModelPembiayaan;
use App\ModelTambahNasabah;
use App\ModelJaminan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class COTambahPembiayaan extends Controller
{
    public function checkbayar($id)
    {
        $datapembiayaan = ModelPembiayaan::where('Id_Pembiayaan', $id)->first();
        $datapembayaran = ModelPembayaran::where('Id_Pembiayaan', $id)->orderBy('id_pembayaran','desc')->first();
        $get = ModelPembiayaan::where('Id_Pembiayaan', $id)->first();
        $getnasabah = ModelTambahNasabah::where('Id_Nasabah', $get->Id_Nasabah)->first();
//        $datapegawai = ModelTambahPegawai::where('Id_Pegawai', $id)->first();

        if(!empty($datapembayaran)){
            $angsuran = $datapembayaran->angsuran_ke + 1;
        }
        else{
            $angsuran = 1;
        }


        $sisabayar = $datapembiayaan->Besar_Pembiayaan - ($datapembiayaan->angsuran_perbulan * $angsuran);
            if($sisabayar = 0)
            {

            }

        if($datapembiayaan->Status == 1){
            $data = [
                "Status" => 1
            ];
        }
        else if ($datapembiayaan->Status == 2){
            $data = [
                "No_Rekening"=>$get->No_Rekening,
//                "Id_Pegawai"=>Session::get('Id_Pegawai'),
                "Nama"=>$getnasabah->Nama,
                "Besar_Pembiayaan"=>$get->Besar_Pembiayaan,
                "angsuran_ke" => $angsuran,
                "data_pembiayaan" => $datapembiayaan,
                "sisa_bayar" => $sisabayar,
                "rekomendasi_bayar" => $datapembiayaan->angsuran_perbulan,
                "Status" => 2,
//                "status_pembayaran" => $datapembayaran->status_pembayaran,
//                "keterangan" => $keterangan->keterangan,
            ];
        }
        else{
            $data = [
                "Status" => 3
            ];
        }


        return $data;
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

        $title = "Add Pembiayaan";
        $content = view('formpembiayaan');

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
        $No_Rekening = $request->input('No_Rekening');
        $Id_Nasabah = $request->input('Id_Nasabah');
        $Id_Pegawai = $request->input('Id_Pegawai');
        // $Nama_Nasabah = $request->input('Nama_Nasabah');
        $tujuan_akad = $request->input('tujuan_akad');
        $Jangka_Waktu = $request->input('Jangka_Waktu');
        $Besar_Pembiayaan = $request->input('Besar_Pembiayaan');
        $Nisbah_Nasabah = $request->input('Nisbah_Nasabah');
        $Nisbah_BMT = $request->input('Nisbah_BMT');
        $angsuran_perbulan = $request->input('angsuran_perbulan');
        $tanggal_pengajuan = $request->input('tanggal_pengajuan');
//        $Jenis_Jaminan = $request->input('Jenis_Jaminan');
//        $No_Jaminan = $request->input('No_Jaminan');
        $Status = $request->input('Status');
        $keterangan = $request->input('keterangan');
//        $status_pembayaran = $request->input('status_pembayaran');

        ModelNeraca::create(array(
            'No_Rekening' => $No_Rekening,
            'Id_Pegawai' => Session::get('Id_Pegawai'),
            'debit' => 0,
            'kredit' => $Besar_Pembiayaan,
            'keterangan' => 'Pembiayaan akad Mudharabah dengan No Rekening ' . $No_Rekening
        ));

        $punyajaminan = $request->input('punyajaminan');


        $datatambahpembiayaan = ModelPembiayaan::create([

            'No_Rekening' => $No_Rekening,
            'Id_Nasabah' => $Id_Nasabah,
            'Id_Pegawai' => $Id_Pegawai,
            'tujuan_akad' => $tujuan_akad,
            'Jangka_Waktu' => $Jangka_Waktu,
            'Besar_Pembiayaan' => $Besar_Pembiayaan,
            'Nisbah_Nasabah' => $Nisbah_Nasabah,
            'Nisbah_BMT' => $Nisbah_BMT,
            'angsuran_perbulan' => $angsuran_perbulan,
            'tanggal_pengajuan' => $tanggal_pengajuan,
//            'Jenis_Jaminan' => $Jenis_Jaminan,
//            'No_Jaminan' => $No_Jaminan,
            'Status' => $Status,
            'keterangan' => $keterangan,
//            'status_pembayaran' => $status_pembayaran,

        ]);


        //select data dari Model pembiayaan, where id = $datatambahpembiayaan->id. kalo udah panggil ke id pembiayaan yang dibawah
        $datapembiayaan = ModelPembiayaan::where('id',$datatambahpembiayaan->id)->first();


        if ($punyajaminan == 1) {
            $jenis_jaminan = $request->input('jenis_jaminan');
            $atas_nama = $request->input('atas_nama');
            $status_jaminan = $request->input('status_jaminan');
            $no_id_jaminan = $request->input('no_id_jaminan');
            $Id_Pembiayaan = $datapembiayaan->Id_Pembiayaan;
            //insert dulu datanya disini

            $datatambahjaminan = ModelJaminan::create([
                'jenis_jaminan' => $jenis_jaminan,
                'atas_nama' => $atas_nama,
                'no_id_jaminan' => $no_id_jaminan,
                'status_jaminan' => $status_jaminan,
                'Id_Pembiayaan' => $Id_Pembiayaan,

            ]);

        } else {
            $jenis_jaminan = '-';
            $atas_nama = '-';
            $no_id_jaminan = '-';
            $status_jaminan = '-';
        }




        if ($datatambahpembiayaan) {

            $data = ModelJaminan::where('Id_Pembiayaan', '=', $datapembiayaan->Id_Pembiayaan)->first();


            $Id_Pembiayaan = $data->Id_Pembiayaan;

            $datajaminan = ModelJaminan::create([
                'Id_Pembiayaan' => $Id_Pembiayaan,
                'jenis_jaminan' => $jenis_jaminan,
                'atas_nama' => $atas_nama,
                'no_id_jaminan' => $no_id_jaminan,
                'status_jaminan' => $status_jaminan,
            ]);

            if ($datatambahpembiayaan) {

                return Redirect::to('lihatpembiayaan');
            } else {
                echo "gagal";
            }

        }
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
