<?php

namespace App\Http\Controllers;

use App\ModelPasangan;
use App\ModelPenghasilan;
use App\ModelPerusahaan;
use App\ModelTambahNasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class COEditNasabah extends Controller
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

        $title = "Edit Nasabah";
        $content = view('editnasabah');

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

        $result = DB::Table('tb_nasabah')
            ->join('tb_datapasangan', 'tb_datapasangan.Id_Nasabah', '=' ,'tb_nasabah.Id_Nasabah')
            ->join('tb_datapenghasilan', 'tb_datapenghasilan.Id_Nasabah', '=' ,'tb_nasabah.Id_Nasabah')
            ->join('tb_perusahaan', 'tb_perusahaan.Id_Nasabah', '=' ,'tb_nasabah.Id_Nasabah')
            ->select('tb_datapasangan.*', 'tb_nasabah.*', 'tb_datapenghasilan.*', 'tb_perusahaan.*')
            ->where('tb_nasabah.Id_Nasabah', '=', $id)
            ->first();

        $title = "Home";
        $content = view('editnasabah');

        View::share([
            'title' => $title
        ]);

        return view('editnasabah', compact('result'));
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
//        $id = base64_decode($id);

//        dd($id);

        $Nama = $request->input('Nama');
        $Jenkel = $request->input('Jenkel');
        $Alamat = $request->input('Alamat');
        $Agama = $request->input('Agama');
        $No_Telp = $request->input('No_Telp');
        $Jenis_Identitas = $request->input('Jenis_Identitas');
        $No_Identitas = $request->input('No_Identitas');
        $Pekerjaan = $request->input('Pekerjaan');
        $Tempat_Lahir = $request->input('Tempat_Lahir');
        $Tanggal_Lahir = $request->input('Tanggal_Lahir');
        $Nama_Ahliwaris = $request->input('Nama_Ahliwaris');
        $jenis_id_ahliwaris = $request->input('jenis_id_ahliwaris');
        $no_id_ahliwaris = $request->input('no_id_ahliwaris');
        $no_telp_ahliwaris = $request->input('no_telp_ahliwaris');
        $Alamat_Ahliwaris = $request->input('Alamat_Ahliwaris');
        $Hubungankeluarga_Ahliwaris = $request->input('Hubungankeluarga_Ahliwaris');

        $punyapasangan = $request->input('punyapasangan');
        if ($punyapasangan == 1) {
            $Nama_Pasangan = $request->input('Nama_Pasangan');
            $jenis_id_pasangan = $request->input('jenis_id_pasangan');
            $no_id_pasangan = $request->input('no_id_pasangan');
            $no_telp_pasangan = $request->input('no_telp_pasangan');
            $Pekerjaan_Pasangan = $request->input('Pekerjaan_Pasangan');
            $Jenkel_Pasangan = $request->input('Jenkel_Pasangan');
            $Keterangan = $request->input('Keterangan');
        } else {
            $Nama_Pasangan = '-';
            $jenis_id_pasangan = '-';
            $no_id_pasangan = '-';
            $no_telp_pasangan = '-';
            $Pekerjaan_Pasangan = '-';
            $Jenkel_Pasangan = 0;
            $Keterangan = '-';
        }


        $punyaperusahaan = $request->input('punyaperusahaan');
        if ($punyaperusahaan == 1) {
            $Nama_Perusahaan = $request->input('Nama_Perusahaan');
            $no_siup = $request->input('no_siup');
            $No_Telp_Perusahaan = $request->input('No_Telp_Perusahaan');
            $Alamat_Perusahaan = $request->input('Alamat_Perusahaan');
            $Bidang_Usaha = $request->input('Bidang_Usaha');
            $Berdiri_Sejak = $request->input('Berdiri_Sejak');
            $Status = $request->input('Status');
        } else {
            $Nama_Perusahaan = '-';
            $no_siup = '-';
            $No_Telp_Perusahaan = 0;
            $Alamat_Perusahaan = '-';
            $Bidang_Usaha = '-';
            $Berdiri_Sejak = '-';
            $Status = '-';
        }

        $punyapenghasilan = $request->input('punyapenghasilan');
        if ($punyapenghasilan == 1) {
            $Penghasilan_Istri = $request->input('Penghasilan_Istri');
            $Penghasilan_Suami = $request->input('Penghasilan_Suami');
            $Penghasilan_lain = $request->input('Penghasilan_lain');
            $Pengeluaran_Pendidikan = $request->input('Pengeluaran_Pendidikan');
            $Pengeluaran_Rumahtangga = $request->input('Pengeluaran_Rumahtangga');
            $Pengeluaran_CicilanBank = $request->input('Pengeluaran_CicilanBank');
            $Pengeluaran_Pribadi = $request->input('Pengeluaran_Pribadi');
            $Pengeluaran_lain = $request->input('Pengeluaran_lain');

        } else {
            $Penghasilan_Istri = 0;
            $Penghasilan_Suami = 0;
            $Penghasilan_lain = 0;
            $Pengeluaran_Pendidikan = 0;
            $Pengeluaran_Rumahtangga = 0;
            $Pengeluaran_CicilanBank = 0;
            $Pengeluaran_Pribadi = 0;
            $Pengeluaran_lain = 0;

        }


        $dataNasabah['Nama'] = $Nama;
        $dataNasabah['Jenkel'] = $Jenkel;
        $dataNasabah['Alamat'] = $Alamat;
        $dataNasabah['Agama'] = $Agama;
        $dataNasabah['No_Telp'] = $No_Telp;
        $dataNasabah['Jenis_Identitas'] = $Jenis_Identitas;
        $dataNasabah['No_Identitas'] = $No_Identitas;
        $dataNasabah['Pekerjaan'] = $Pekerjaan;
        $dataNasabah['Tempat_Lahir'] = $Tempat_Lahir;
        $dataNasabah['Tanggal_Lahir'] = $Tanggal_Lahir;
        $dataNasabah['Nama_Ahliwaris'] = $Nama_Ahliwaris;
        $dataNasabah['jenis_id_ahliwaris'] = $jenis_id_ahliwaris;
        $dataNasabah['no_id_ahliwaris'] = $no_id_ahliwaris;
        $dataNasabah['no_telp_ahliwaris'] = $no_telp_ahliwaris;
        $dataNasabah['Alamat_Ahliwaris'] = $Alamat_Ahliwaris;
        $dataNasabah['Hubungankeluarga_Ahliwaris'] = $Hubungankeluarga_Ahliwaris;

        $data = ModelTambahNasabah::where('Id_Nasabah', $id)->update($dataNasabah);
        if (!$data) {
            return Redirect::to('/home')->with('message', 'Error pada saat mengubah data nasabah');
        }


        $dataPasangan['Nama_Pasangan'] = $Nama_Pasangan;
        $dataPasangan['jenis_id_pasangan'] = $jenis_id_pasangan;
        $dataPasangan['no_id_pasangan'] = $no_id_pasangan;
        $dataPasangan['Pekerjaan_Pasangan'] = $Pekerjaan_Pasangan;
        $dataPasangan['Jenkel_Pasangan'] = $Jenkel_Pasangan;
        $dataPasangan['Keterangan'] = $Keterangan;

        $data = ModelPasangan::where('Id_Nasabah', $id)->update($dataPasangan);
        if (!$data) {
            return Redirect::to('/home')->with('message', 'Error pada saat mengubah data pasangan nasabah');
        }


        $dataPerusahaan['Nama_Perusahaan'] = $Nama_Perusahaan;
        $dataPerusahaab['no_siup'] = $no_siup;
        $dataPerusahaan['No_Telp_Perusahaan'] = $No_Telp_Perusahaan;
        $dataPerusahaan['Alamat_Perusahaan'] = $Alamat_Perusahaan;
        $dataPerusahaan['Bidang_Usaha'] = $Bidang_Usaha;
        $dataPerusahaan['Berdiri_Sejak'] = $Berdiri_Sejak;
        $dataPerusahaan['Status'] = $Status;

        $data = ModelPerusahaan::where('Id_Nasabah', $id)->update($dataPerusahaan);
        if (!$data) {
            return Redirect::to('/home')->with('message', 'Error pada saat mengubah data perusahaan nasabah');
        }


        $dataPenghasilan['Penghasilan_Istri'] = $Penghasilan_Istri;
        $dataPenghasilan['Penghasilan_Suami'] = $Penghasilan_Suami;
        $dataPenghasilan['Penghasilan_lain'] = $Penghasilan_lain;
        $dataPenghasilan['Pengeluaran_Pendidikan'] = $Pengeluaran_Pendidikan;
        $dataPenghasilan['Pengeluaran_Rumahtangga'] = $Pengeluaran_Rumahtangga;
        $dataPenghasilan['Pengeluaran_CicilanBank'] = $Pengeluaran_CicilanBank;
        $dataPenghasilan['Pengeluaran_Pribadi'] = $Pengeluaran_Pribadi;
        $dataPenghasilan['Pengeluaran_lain'] = $Pengeluaran_lain;

        $data = ModelPenghasilan::where('Id_Nasabah', $id)->update($dataPenghasilan);
        if (!$data) {
            return Redirect::to('/home')->with('message', 'Error pada saat mengubah data penghasilan nasabah');
        }

        return Redirect::to('/lihatnasabah')->with('message', 'Berhasil mengubah nasabah dengan ID ' . $id);
        }


//

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
