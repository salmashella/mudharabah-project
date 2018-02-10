<?php

namespace App\Http\Controllers;

use App\ModelTambahPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class COLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session('isAdminLoggedIn'))
        {
            return Redirect::to('home');
        }
        else
        {
            return view('login');
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
        $Username = $request->input('Username');
        $Password = $request->input('Password');

        $data = ModelTambahPegawai::where('Username', $Username)->where('Password', $Password)->first();

        if ($data) {
            if ($data-> Status == "1")
            {

                //tambahin id pegawai disini
                $dataSession = array(
                    'isAdminLoggedIn' => true,
                    'Id_Pegawai' => $data->Id_Pegawai,
                    'Nama_Pegawai' => $data->Nama_Pegawai,
                    'Alamat' => $data->Alamat,
                    'Jabatan' => $data->Jabatan,
                    'Jenkel' => $data->Jenkel,
                    'No_Telp' => $data->No_Telp,
                    'Agama' => $data->Agama,
                    'Tempat_Lahir' => $data->Tempat_Lahir,
                    'Tanggal_Lahir' => $data->Tanggal_Lahir,
                    'Status' => $data->Status,
                    'Username' => $data->Username,
                    'Password' => $data->Password,
                );

                session($dataSession);

                return Redirect::to('/home');
            }
            else {
                return Redirect::back()->with('login-error', 'Tidak aktif');

            }

        }

        else
        {
            return Redirect::back()->with('login-error', 'Username atau Password salah');
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
