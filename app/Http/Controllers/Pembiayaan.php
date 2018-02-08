<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPembiayaan;

class Pembiayaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelPembiayaan::all();

        if(count($data) > 0) //mengecek data kosong atau tidak
        {
            $res['message'] = "Success";
            $res['values'] = $data;
            return response ($res);
        }
        else
        {
            $res['message'] = "Empty";
            return response($res);
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
        //
        $data = ModelPembiayaan::where('id',$id)->get();

        if(count($data) > 0) //mengecek data kosong atau tidak
        {
            $res['message'] = "Success";
            $res['values'] = $data;
            return response ($res);
        }
        else
        {
            $res['message'] = "Failed";
            return response($res);
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
