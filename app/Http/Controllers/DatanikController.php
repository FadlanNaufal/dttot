<?php

namespace App\Http\Controllers;

use App\datanik;
use Illuminate\Http\Request;

class DatanikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datanik.index',[
            'data' => datanik::all()
        ]);
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
     * @param  \App\datanik  $datanik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datanik = datanik::find($id);

	    return response()->json([
	      'data' => $datanik
	    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datanik  $datanik
     * @return \Illuminate\Http\Response
     */
    public function edit(datanik $datanik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datanik  $datanik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datanik $datanik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datanik  $datanik
     * @return \Illuminate\Http\Response
     */
    public function destroy(datanik $datanik)
    {
        //
    }
}
