<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\ModelPembiayaan;
use App\ModelJaminan;

class COJaminan extends Controller
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

        $title = "Jaminan";
        $content = view('editjaminan');

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
        //
        if(!session('isAdminLoggedIn')) {
            return Redirect::to('login');
        }

//        $id = base64_decode($id);

//        $result = DB::Table('tb_jaminan')
//            ->select('tb_jaminan.*')
//            //->where('tb_Pegawai.Id_Pegawai' )
//            ->where('tb_jaminan.Id_Pembiayaan', '=', $id)
//            ->first();
//
//        $title = "Home";

        $id = base64_decode($id);

        $result = DB::Table('tb_pembiayaan')
            ->join('tb_jaminan', 'tb_jaminan.Id_Pembiayaan', '=' ,'tb_pembiayaan.Id_Pembiayaan')
            ->select('tb_jaminan.*', 'tb_pembiayaan.*')
            ->where('tb_pembiayaan.Id_Pembiayaan', '=', $id)
            ->first();

        $title = "Home";
        $content = view('editjaminan');

        View::share([
            'title' => $title
        ]);
        return view('editjaminan', compact('result'));
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
        $data = ModelJaminan::where('Id_Pembiayaan', $id)->first();


        $status_jaminan = $request->status_jaminan;


        $data->status_jaminan = $status_jaminan;


        $result = $data->save();

        if($result) {
            return Redirect::to('/lihatpembiayaan')->with('message', 'Data pembiayaan dengan ID ' . $id . ' berhasil disetujui');
        }
        else {
            return Redirect::to('/lihatpembiayaan')->with('message', 'Data pembiayaan dengan ID ' . $id . ' gagal disetujui');
        }



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
