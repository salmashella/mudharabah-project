<?php

namespace App\Http\Controllers;

use App\ModelPembiayaan;
use App\ModelTambahNasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class COHome extends Controller
{
    public function logout() {
        session()->flush();

        return Redirect::to('login');
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

        $countdatanasabah = ModelTambahNasabah::count();
        $countdatapembiayaan = ModelPembiayaan::count();

        $title = "Home";
        $content = view('home');

        $data = array(
            'title' => $title,
            'content' => $content
        );

        $count = array(
            'datanasabah' => $countdatanasabah,
            'datapembiayaan' => $countdatapembiayaan
        );

        View::share($count);
        return View::make('header', $data);
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
