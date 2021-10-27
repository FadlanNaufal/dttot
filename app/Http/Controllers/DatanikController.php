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
            'data' => datanik::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datanik.create');
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
            'id_nik' => ['required'],
            'kode_densus' => ['required'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required'],
            'wn' => ['required', 'string'],
            'alamat' => ['required', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'info_lain' => ['required', 'string', 'max:255'],
        ]);

        $datanik = new datanik();
        $datanik->nama = $request->nama;
        $datanik->desc = $request->desc;
        $datanik->id_nik = $request->id_nik;
        $datanik->terduga = $request->terduga;
        $datanik->kode_densus = $request->kode_densus;
        $datanik->tempat_lahir = $request->tempat_lahir;
        $datanik->tanggal_lahir = $request->tanggal_lahir;
        $datanik->wn = $request->wn;
        $datanik->alamat = $request->alamat;
        $datanik->pekerjaan = $request->pekerjaan;
        $datanik->info_lain = $request->info_lain;
        $datanik->save();

        return redirect()->route('datanik.index')->with('success', 'Berhasil menambahkan pengguna terduga');
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
    public function edit($id)
    {
        return view('datanik.edit',[
            'data' => datanik::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datanik  $datanik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datanik = datanik::findOrFail($id);
        $datanik->nama = $request->nama;
        $datanik->desc = $request->desc;
        $datanik->id_nik = $request->id_nik;
        $datanik->terduga = $request->terduga;
        $datanik->kode_densus = $request->kode_densus;
        $datanik->tempat_lahir = $request->tempat_lahir;
        $datanik->tanggal_lahir = $request->tanggal_lahir;
        $datanik->wn = $request->wn;
        $datanik->alamat = $request->alamat;
        $datanik->pekerjaan = $request->pekerjaan;
        $datanik->info_lain = $request->info_lain;
        $datanik->save();

        return redirect()->route('datanik.index')->with('success', 'Berhasil mengubah pengguna terduga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datanik  $datanik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teroris = datanik::findOrFail($id);
        $teroris->delete();
        return redirect()->route('datanik.index')->with('success', 'Berhasil menghapus pengguna terduga');
    }
}
