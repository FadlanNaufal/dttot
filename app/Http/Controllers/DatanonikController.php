<?php

namespace App\Http\Controllers;

use App\datanonik;
use Illuminate\Http\Request;

class DatanonikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datanonik.index',[
            'data' => datanonik::all()
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
     * @param  \App\datanonik  $datanonik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datanonik = datanonik::find($id);

	    return response()->json([
	      'data' => $datanonik
	    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datanonik  $datanonik
     * @return \Illuminate\Http\Response
     */
    public function edit(datanonik $datanonik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datanonik  $datanonik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datanonik $datanonik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datanonik  $datanonik
     * @return \Illuminate\Http\Response
     */
    public function destroy(datanonik $datanonik)
    {
        //
    }
}
