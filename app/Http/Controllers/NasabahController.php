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
        return view('nasabah.index',[
            'data' => Nasabah::latest()->get()
        ]);
    }

    public function check_one(Request $request){
        $data_nik = datanik::where('id_nik',$request->nik)->first();
        $data_nasabah = Nasabah::where('id_nik',$request->nik)->first();

        // $data_nik = datanik::where('id_nik','3319011608600004')->first();
        // $data_nasabah = Nasabah::where('id_nik','3319011608600004')->first();
        
        if($data_nik  && $data_nasabah ){
            $data_nasabah = Nasabah::where('id_nik',$request->nik)->first();
            return view('nasabah.checkone',[
                'data' => $data_nasabah
            ]);
        }else{
            $data = [];
            return view('nasabah.checkone',compact('data'));
        }
        // return view('nasabah.index',compact('data'));
    }

    public function check_index(){
        $data = [];
        $total_nasabah = Nasabah::count();
        $total_dttot = datanik::count();
        return view('nasabah.checkmass',compact('data','total_nasabah','total_dttot'));
    }

    public function check_mass(){
        $nasabah = Nasabah::get();
        $suspect_nasabah = [];
        foreach($nasabah as $nasabahs){
            $checking_nasabah = datanik::where('id_nik',$nasabahs->id_nik)->first();
            if ($checking_nasabah){
                array_push($suspect_nasabah, $nasabahs);
            }
        }
        $total_nasabah = Nasabah::count();
        $total_dttot = datanik::count();
        $data = $suspect_nasabah;
        return view('nasabah.checkmass',compact('data','total_nasabah','total_dttot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nasabah.create');
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
            'name' => ['required', 'string', 'max:255'],
            'id_nik' => ['required'],
            'track' => ['required'],
            'status' => ['required'],
            'note' => ['required'],
        ]);

        $nasabah = new Nasabah();
        $nasabah->name = $request->name;
        $nasabah->id_nik = $request->id_nik;
        $nasabah->track = $request->track;
        $nasabah->status = $request->status;
        $nasabah->note = $request->note;
        $nasabah->save();

        return redirect()->route('nasabah.index')->with('success', 'Berhasil menambahkan nasabah');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nasabah = Nasabah::find($id);
        
	    return response()->json([
	      'data' => $nasabah
	    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('nasabah.edit',[
            'data' => Nasabah::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nasabah = Nasabah::findOrFail($id);
        $nasabah->name = $request->name;
        $nasabah->id_nik = $request->id_nik;
        $nasabah->track = $request->track;
        $nasabah->status = $request->status;
        $nasabah->note = $request->note;
        $nasabah->save();

        return redirect()->route('nasabah.index')->with('success', 'Berhasil mengubah nasabah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nasabah  $nasabah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Nasabah::findOrFail($id);
        $data->delete();
        return back()->with('success', 'Berhasil menghapus nasabah');
    }
}
