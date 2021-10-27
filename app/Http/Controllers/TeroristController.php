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
            'data' => terorist::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terorist.create');
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
            'deskripsi' => ['required', 'string', 'max:255'],
            'terduga' => ['required', 'string', 'max:255'],
            'kode_densus' => ['required'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required'],
            'warga_negara' => ['required', 'string'],
            'alamat' => ['required', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'informasi_lain' => ['required', 'string', 'max:255'],
        ]);

        $teroris = new terorist();
        $teroris->nama = $request->nama;
        $teroris->deskripsi = $request->deskripsi;
        $teroris->terduga = $request->terduga;
        $teroris->kode_densus = $request->kode_densus;
        $teroris->tempat_lahir = $request->tempat_lahir;
        $teroris->tanggal_lahir = $request->tanggal_lahir;
        $teroris->warga_negara = $request->warga_negara;
        $teroris->alamat = $request->alamat;
        $teroris->pekerjaan = $request->pekerjaan;
        $teroris->informasi_lain = $request->informasi_lain;
        $teroris->save();

        return redirect()->route('terorist.index')->with('success', 'Berhasil menambahkan pengguna terduga');
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
    public function edit($id)
    {
        return view('terorist.edit',[
            'data' => terorist::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\terorist  $terorist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teroris = terorist::findOrFail($id);
        $teroris->nama = $request->nama;
        $teroris->deskripsi = $request->deskripsi;
        $teroris->terduga = $request->terduga;
        $teroris->kode_densus = $request->kode_densus;
        $teroris->tempat_lahir = $request->tempat_lahir;
        $teroris->tanggal_lahir = $request->tanggal_lahir;
        $teroris->warga_negara = $request->warga_negara;
        $teroris->alamat = $request->alamat;
        $teroris->pekerjaan = $request->pekerjaan;
        $teroris->informasi_lain = $request->informasi_lain;
        $teroris->save();

        return redirect()->route('terorist.index')->with('success', 'Berhasil mengubah pengguna terduga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\terorist  $terorist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teroris = terorist::findOrFail($id);
        $teroris->delete();
        return redirect()->route('terorist.index')->with('success', 'Berhasil menghapus pengguna terduga');
    }
}
