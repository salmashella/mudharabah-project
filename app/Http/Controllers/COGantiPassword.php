<?php

namespace App\Http\Controllers;

use App\ModelTambahPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class COGantiPassword extends Controller
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
        return view('editpassword', compact('result'));
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
        $data = ModelTambahPegawai::where('id', $id)->first();

//        $Username = $request->input('Username');
        $Password = $request->input('Password');

//        $data->Username = $Username;
        $data->Password = $Password;

        $result = $data->save();

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
