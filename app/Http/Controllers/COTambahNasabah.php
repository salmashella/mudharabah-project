<?php

namespace App\Http\Controllers;

use App\ModelPasangan;
use App\ModelPenghasilan;
use App\ModelPerusahaan;
use App\ModelRekening;
use App\ModelTambahNasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class COTambahNasabah extends Controller
{
    public function checkid($id)
    {
        $get = ModelTambahNasabah::where('Id_Nasabah',$id)->first();
        return $get;
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

        $title = "Add Nasabah";
        $content = view('formnasabah');

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
        if($punyapasangan == 1)
        {
            $Nama_Pasangan = $request->input('Nama_Pasangan');
            $jenis_id_pasangan = $request->input('jenis_id_pasangan');
            $no_id_pasangan = $request->input('no_id_pasangan');
            $no_telp_pasangan = $request->input('no_telp_pasangan');
            $Pekerjaan_Pasangan = $request->input('Pekerjaan_Pasangan');
            $Jenkel_Pasangan = $request->input('Jenkel_Pasangan');
            $Keterangan = $request->input('Keterangan');
        }
        else
        {
            $Nama_Pasangan = '-';
            $jenis_id_pasangan = '-';
            $no_id_pasangan = '-';
            $no_telp_pasangan = '-';
            $Pekerjaan_Pasangan = '-';
            $Jenkel_Pasangan = '-';
            $Keterangan = '-';
        }


        $punyaperusahaan = $request->input('punyaperusahaan');
        if($punyaperusahaan == 1)
        {
            $Nama_Perusahaan = $request->input('Nama_Perusahaan');
            $no_siup = $request->input('no_siup');
            $No_Telp_Perusahaan = $request->input('No_Telp_Perusahaan');
            $Alamat_Perusahaan = $request->input('Alamat_Perusahaan');
            $Bidang_Usaha = $request->input('Bidang_Usaha');
            $Berdiri_Sejak = $request->input('Berdiri_Sejak');
            $Status = $request->input('Status');
        }
        else
        {
            $Nama_Perusahaan = '-';
            $no_siup = '-';
            $No_Telp_Perusahaan = 0;
            $Alamat_Perusahaan = '-';
            $Bidang_Usaha ='-';
            $Berdiri_Sejak ='-';
            $Status ='-';
        }

        $punyapenghasilan = $request->input('punyapenghasilan');
        if($punyapenghasilan == 1)
        {
            $Penghasilan_Istri = $request->input('Penghasilan_Istri');
            $Penghasilan_Suami = $request->input('Penghasilan_Suami');
            $Penghasilan_lain = $request->input('Penghasilan_lain');
            $Pengeluaran_Pendidikan = $request->input('Pengeluaran_Pendidikan');
            $Pengeluaran_Rumahtangga = $request->input('Pengeluaran_Rumahtangga');
            $Pengeluaran_CicilanBank = $request->input('Pengeluaran_CicilanBank');
            $Pengeluaran_Pribadi = $request->input('Pengeluaran_Pribadi');
            $Pengeluaran_lain = $request->input('Pengeluaran_lain');

        }
        else
        {
            $Penghasilan_Istri =0;
            $Penghasilan_Suami =0;
            $Penghasilan_lain =0;
            $Pengeluaran_Pendidikan = 0;
            $Pengeluaran_Rumahtangga = 0;
            $Pengeluaran_CicilanBank = 0;
            $Pengeluaran_Pribadi = 0;
            $Pengeluaran_lain = 0;

        }

        $datatambahnasabah = ModelTambahNasabah::create([
            'Nama' => $Nama,
            'Jenkel' => $Jenkel,
            'Alamat' => $Alamat,
            'Agama' => $Agama,
            'No_Telp' => $No_Telp,
            'Jenis_Identitas' => $Jenis_Identitas,
            'No_Identitas' => $No_Identitas,
            'Pekerjaan' => $Pekerjaan,
            'Tempat_Lahir' => $Tempat_Lahir,
            'Tanggal_Lahir' => $Tanggal_Lahir,
            'Nama_Ahliwaris' => $Nama_Ahliwaris,
            'jenis_id_ahliwaris' => $jenis_id_ahliwaris,
            'no_id_ahliwaris' => $no_id_ahliwaris,
            'Alamat_Ahliwaris' => $Alamat_Ahliwaris,
            'Hubungankeluarga_Ahliwaris' => $Hubungankeluarga_Ahliwaris,
        ]);

        if($datatambahnasabah) {
            $data = ModelTambahNasabah::all()->where('No_Identitas', '=', $No_Identitas)->first();

            $Id_Nasabah = $data->Id_Nasabah;

            $datapasangan = ModelPasangan::create([
                'Id_Nasabah' => $Id_Nasabah,
                'Nama_Pasangan' => $Nama_Pasangan,
                'jenis_id_pasangan' => $jenis_id_pasangan,
                'no_id_pasangan' => $no_id_pasangan,
                'no_telp_pasangan' => $no_telp_pasangan,
                'Pekerjaan_Pasangan' => $Pekerjaan_Pasangan,
                'Jenkel_Pasangan' => $Jenkel_Pasangan,
                'Keterangan' => $Keterangan,
            ]);

            if($datapasangan) {
                $dataperusahaan = ModelPerusahaan::create([
                    'Id_Nasabah' => $Id_Nasabah,
                    'Nama_Perusahaan' => $Nama_Perusahaan,
                    'no_siup' => $no_siup,
                    'No_Telp_Perusahaan' => $No_Telp_Perusahaan,
                    'Alamat_Perusahaan' => $Alamat_Perusahaan,
                    'Bidang_Usaha' => $Bidang_Usaha,
                    'Berdiri_Sejak' => $Berdiri_Sejak,
                    'Status' => $Status,
                ]);

                if($dataperusahaan) {
                    $datapenghasilan = ModelPenghasilan::create([
                        'Id_Nasabah' => $Id_Nasabah,
                        'Penghasilan_Istri' => $Penghasilan_Istri,
                        'Penghasilan_Suami' => $Penghasilan_Suami,
                        'Penghasilan_lain' => $Penghasilan_lain,
                        'Pengeluaran_Pendidikan' => $Pengeluaran_Pendidikan,
                        'Pengeluaran_Rumahtangga' => $Pengeluaran_Rumahtangga,
                        'Pengeluaran_CicilanBank' => $Pengeluaran_CicilanBank,
                        'Pengeluaran_Pribadi' => $Pengeluaran_Pribadi,
                        'Pengeluaran_lain' => $Pengeluaran_lain,
                    ]);

                    if($datapenghasilan)
                    {
                        $datarekening = ModelRekening::create([
                            'Id_Nasabah' => $Id_Nasabah,
                            'Status' => '1'
                        ]);

                        if($datarekening) {

                                    return Redirect::to('lihatnasabah')->with('message','Nasabah berhasil mendapatkan no rekening ' .$datarekening->No_Rekening);
                                }
                            }
                        }
                    }
                }
//        ke halaman utama aja
                return Redirect::to('formnasabah');
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
