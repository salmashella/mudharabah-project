<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPerusahaan;

class Perusahaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelPerusahaan::all();

        if(count($data) > 0)
        {
            $res['message'] = "Success";
            $res['values'] = $data;
            return response ($res);
        }
        else
        {
            $res['message'] = "Data tidak ditemukan";
            return response ($res);
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
        $data = ModelPerusahaan::where('Id_Nasabah', $id)->get();

        if(count($data) > 0)
        {
            $res['message'] = "Success";
            $res['values'] = $data;
            return response ($res);
        }
        else
        {
            $res['message'] = "Data tidak ditemukan";
            return response ($res);
        }
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
