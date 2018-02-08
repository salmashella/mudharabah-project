<?php

namespace App\Http\Controllers;

use App\ModelJurnal;
use App\ModelRekening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class COEditRekening extends Controller
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



        $result = DB::Table('tb_rekening')
            ->select('tb_rekening.*')
            ->where('tb_rekening.id', '=', $id)
            ->first();
        $title = "Home";

        View::share([
            'title' => $title
        ]);
        return view('editrekening', compact('result'));
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
        $data = ModelRekening::where('id', $id)->first();
        $saldobaru = $data->Saldo + $request->Saldo;

        $Status = $request->input('Status');

        $dataupdate['Saldo'] = $saldobaru;
        $dataupdate['Status'] = $Status;

        $result = ModelRekening::where('id',$id)->update($dataupdate);

        ModelJurnal::create([
            'No_Rekening' => $data->No_Rekening,
            'nominal_transaksi' => $request->Saldo,
            'keterangan' => 'Input transaksi tambah saldo untuk nomor rekening ' . $data->No_Rekening
        ]);

        if($result) {
            return Redirect::to('/lihatrekening')->with('message', 'Data admin ' . base64_decode($id) . ' berhasil diubah');
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
