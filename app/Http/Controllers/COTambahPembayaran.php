<?php

namespace App\Http\Controllers;


use App\ModelPembayaran;
use App\ModelNeraca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class COTambahPembayaran extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session('isAdminLoggedIn')) {
            return Redirect::to('login');
        }

        $title = "Add Pembayaran";
        $content = view('formpembayaran');

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

        $Id_Pembiayaan = $request->input('Id_Pembiayaan');
        $No_Rekening = $request->input('No_Rekening');
//        $Id_Pegawai = $request->input('Id_Pegawai');
        $Id_Pembiayaan = $request->input('Id_Pembiayaan');
//        $Id_Pegawai = $request->input('Id_Pegawai');
        $penyetor = $request->input('penyetor');
        $jenis_id_penyetor = $request->input('jenis_id_penyetor');
        $no_id_penyetor = $request->input('no_id_penyetor');
        $alamat_penyetor = $request->input('alamat_penyetor');
        $no_telp_penyetor = $request->input('no_telp_penyetor');
        $tanggal_setor = $request->input('tanggal_setor');
        $angsuran_ke = $request->input('angsuran_ke');
        $nominal = $request->input('nominal');
        $sisa_pembayaran = $request->input('sisa_pembayaran');
//        $status_pembayaran = $request->input('status_pembayaran');


        if($sisa_pembayaran > 0){
            $datatambahpembayaran = ModelPembayaran::create([
                'Id_Pembiayaan' => $Id_Pembiayaan,
                'No_Rekening' => $No_Rekening,
//                'Id_Pegawai' => $Id_Pegawai,
                'penyetor' => $penyetor,
                'jenis_id_penyetor' => $jenis_id_penyetor,
                'no_id_penyetor' => $no_id_penyetor,
                'alamat_penyetor' => $alamat_penyetor,
                'no_telp_penyetor' => $no_telp_penyetor,
                'tanggal_setor' => $tanggal_setor,
                'angsuran_ke' => $angsuran_ke,
                'nominal' => $nominal,
                'sisa_pembayaran' => $sisa_pembayaran,
                'status_pembayaran' => 1,
            ]);
        }
        else{
            $datatambahpembayaran = ModelPembayaran::create([
                'Id_Pembiayaan' => $Id_Pembiayaan,
                'No_Rekening' => $No_Rekening,
//                'Id_Pegawai' => $Id_Pegawai,
                'penyetor' => $penyetor,
                'jenis_id_penyetor' => $jenis_id_penyetor,
                'no_id_penyetor' => $no_id_penyetor,
                'alamat_penyetor' => $alamat_penyetor,
                'no_telp_penyetor' => $no_telp_penyetor,
                'tanggal_setor' => $tanggal_setor,
                'angsuran_ke' => $angsuran_ke,
                'nominal' => $nominal,
                'sisa_pembayaran' => $sisa_pembayaran,
                'status_pembayaran' => 2,
            ]);
        }

        ModelNeraca::create([
            'No_Rekening' => $No_Rekening,
            'Id_Pegawai' => Session::get('Id_Pegawai'),
            'debit' => $nominal,
            'kredit' => 0,
            'keterangan' => 'Pembayaran akad Mudharabah dengan No Rekening ' . $No_Rekening
//            'status_pembayaran' => $status_pembayaran,
        ]);


        if($datatambahpembayaran)
        {
            return Redirect::to('lihatpembayaran');
        }
        else
        {
            echo "gagal";
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
        if(!session('isAdminLoggedIn')) {
            return Redirect::to('login');
        }

        $id = base64_decode($id);

        $datapembayaran = ModelPembayaran::where('id_pembayaran', $id)->first();


        $data = array(
            'id_pembayaran' => $id,
            'Id_Pembiayaan' => $datapembayaran,
//            'estimasi_sisa_cicilan' => $sisacicilan,
            'No_Rekening' => $datapembayaran,
            'penyetor' => $datapembayaran,
            'angsuran_ke' => $datapembayaran,
            'nominal' => $datapembayaran,
            'created_at' => $datapembayaran,
        );


        $title = "Pembayaran";
        $content = view('detailpembayaran');


        View::share('id', $id);
        return view('detailpembayaran', $data);

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
