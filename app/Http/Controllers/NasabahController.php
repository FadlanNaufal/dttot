<?php

namespace App\Http\Controllers;

use App\Nasabah;
use App\datanik;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_nik = datanik::where('id_nik',$request->nik)->first();
        $data_nasabah = Nasabah::where('id_nik',$request->nik)->first();

        // $data_nik = datanik::where('id_nik','3319011608600004')->first();
        // $data_nasabah = Nasabah::where('id_nik','3319011608600004')->first();
        
        if($data_nik  && $data_nasabah ){
            $data_nasabah = Nasabah::where('id_nik',$request->nik)->first();
            return view('nasabah.index',[
                'data' => $data_nasabah
            ]);
        }else{
            $data = [];
            return view('nasabah.index',compact('data'));
        }
        // return view('nasabah.index',compact('data'));
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
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function show(Nasabah $nasabah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function edit(Nasabah $nasabah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nasabah $nasabah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nasabah $nasabah)
    {
        //
    }
}
