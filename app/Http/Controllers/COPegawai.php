<?php

namespace App\Http\Controllers;

use App\ModelTambahPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


class COPegawai extends Controller
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

        $result = DB::Table('tb_pegawai')
            ->select('tb_pegawai.*')
            ->get();

        $content = view('lihatpegawai');
        $title = "Lihat Pegawai";

        $data = array(
            'content' => $content,
            'title' => $title
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
   // public function show()
    public function show($id)
    {
        //
       if(!session('isAdminLoggedIn')) {
            return Redirect::to('login');
        }

        $id = base64_decode($id);

        $result = DB::Table('tb_pegawai')
            ->select('tb_pegawai.*')
            //->where('tb_Pegawai.Id_Pegawai' )
            ->where('tb_pegawai.Id_Pegawai', '=', $id)
            ->first();

        $title = "Home";

        View::share([
                'title' => $title
        ]);
        return view('editpegawai', compact('result'));
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
//        $ids = base64_decode($id);
        $data = ModelTambahPegawai::where('id', $id)->first();




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
 //       $Password = $request->input('Password');

        $data->Nama_Pegawai = $Nama_Pegawai;
        $data->Alamat = $Alamat;
        $data->Jabatan = $Jabatan;
        $data->Jenkel = $Jenkel;
        $data->No_Telp = $No_Telp;
        $data->Agama = $Agama;
        $data->Tempat_Lahir = $Tempat_Lahir;
        $data->Tanggal_Lahir = $Tanggal_Lahir;
        $data->Status = $Status;
        $data->Username = $Username;
       // $data->Password = $Password;
//
//        if($Password == '') {
//            $data->Password = $data->Password;
//        }
//        else{
//            $Password = Hash::make($request->input('Password'));
//            $data->Password = $Password;
//        }

        $result = $data->save();

//        $updatePegawai['Nama_Pegawai'] = $Nama_Pegawai;
//        $updatePegawai['Alamat'] = $Alamat;
//        $updatePegawai['Jabatan'] = $Jabatan;
//        $updatePegawai['Jenkel'] = $Jenkel;
//        $updatePegawai['No_Telp'] = $No_Telp;
//        $updatePegawai['Agama'] = $Agama;
//        $updatePegawai['Tempat_Lahir'] = $Tempat_Lahir;
//        $updatePegawai['Tanggal_Lahir'] = $Tanggal_Lahir;
//        $updatePegawai['Status'] = $Status;
//        $updatePegawai['Username'] = $Username;
//        $updatePegawai['Password'] = $Password;





            if($result) {
                return Redirect::to('/lihatpegawai')->with('message', 'Data admin ' . base64_decode($id) . ' berhasil diubah');
            }
            else {
                return Redirect::to('/home')->with('message', 'Data admin ' . $id . ' gagal diubah');
            }

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
