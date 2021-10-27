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
            'data' => datanonik::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datanonik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'desc' => ['required', 'string', 'max:255'],
            'terduga' => ['required', 'string', 'max:255'],
            'id_paspor' => ['required'],
            'kode_densus' => ['required'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required'],
            'wn' => ['required', 'string'],
            'alamat' => ['required', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'info_lain' => ['required', 'string', 'max:255'],
        ]);

        $datanonik = new datanonik();
        $datanonik->nama = $request->nama;
        $datanonik->desc = $request->desc;
        $datanonik->id_paspor = $request->id_paspor;
        $datanonik->terduga = $request->terduga;
        $datanonik->kode_densus = $request->kode_densus;
        $datanonik->tempat_lahir = $request->tempat_lahir;
        $datanonik->tanggal_lahir = $request->tanggal_lahir;
        $datanonik->wn = $request->wn;
        $datanonik->alamat = $request->alamat;
        $datanonik->pekerjaan = $request->pekerjaan;
        $datanonik->info_lain = $request->info_lain;
        $datanonik->save();

        return redirect()->route('datapaspor.index')->with('success', 'Berhasil menambahkan pengguna terduga');
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
    public function edit($id)
    {
        return view('datanonik.edit',[
            'data' => datanonik::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datanonik  $datanonik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datanik = datanonik::findOrFail($id);
        $datanik->nama = $request->nama;
        $datanik->desc = $request->desc;
        $datanik->id_paspor = $request->id_paspor;
        $datanik->terduga = $request->terduga;
        $datanik->kode_densus = $request->kode_densus;
        $datanik->tempat_lahir = $request->tempat_lahir;
        $datanik->tanggal_lahir = $request->tanggal_lahir;
        $datanik->wn = $request->wn;
        $datanik->alamat = $request->alamat;
        $datanik->pekerjaan = $request->pekerjaan;
        $datanik->info_lain = $request->info_lain;
        $datanik->save();

        return redirect()->route('datapaspor.index')->with('success', 'Berhasil mengubah pengguna terduga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datanonik  $datanonik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teroris = datanonik::findOrFail($id);
        $teroris->delete();
        return redirect()->route('datapaspor.index')->with('success', 'Berhasil menghapus pengguna terduga');
    }
}
