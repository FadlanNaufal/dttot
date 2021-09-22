<?php

namespace App\Http\Controllers;

use App\terorist;
use Illuminate\Http\Request;

class TeroristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('terorist.index',[
            'data' => terorist::all()
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
     * @param  \App\terorist  $terorist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $terorist = terorist::find($id);

	    return response()->json([
	      'data' => $terorist
	    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\terorist  $terorist
     * @return \Illuminate\Http\Response
     */
    public function edit(terorist $terorist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\terorist  $terorist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, terorist $terorist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\terorist  $terorist
     * @return \Illuminate\Http\Response
     */
    public function destroy(terorist $terorist)
    {
        //
    }
}
