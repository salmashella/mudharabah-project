<?php

namespace App\Http\Controllers;

use App\ModelRekening;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class COLihatTransaksi extends Controller
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
        //
        if(!session('isAdminLoggedIn')) {
        return Redirect::to('login');
    }

        $id = base64_decode($id);

        $datarekening = ModelRekening::where('Id_Nasabah',$id)->first();

        $result = DB::Table('tb_jurnal')
            ->select('tb_jurnal.*')
            ->where('No_Rekening', $datarekening->No_Rekening)
            ->get();

        $title = "Lihat Transaksi";
        $content = view('lihattransaksi');

        $data = array(
            'title' => $title,
            'content' => $content,
            'result' =>$result
        );

        View::share('result', $result);
        return view('header', $data);
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
