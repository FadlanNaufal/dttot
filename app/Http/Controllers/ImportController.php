<?php

namespace App\Http\Controllers;

use App\Imports\ImportDataNIK;
use App\Imports\ImportDataPaspor;
use App\Imports\ImportNasabah;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_nasabah()
    {
        return view('import.nasabah');
    }

    public function import_nasabah()
    {
        Excel::import(new ImportNasabah, request()->file('file'));
            
        return redirect()->route('nasabah.index')->with('success', 'Berhasil menambahkan pengguna');
    }

    public function index_datanik()
    {
        return view('import.datanik');
    }

    public function import_datanik()
    {
        Excel::import(new ImportDataNIK, request()->file('file'));
            
        return redirect()->route('datanik.index')->with('success', 'Berhasil menambahkan pengguna');
    }

    public function index_datapaspor()
    {
        return view('import.datapaspor');
    }

    public function import_datapaspor()
    {
        Excel::import(new ImportDataPaspor, request()->file('file'));
            
        return redirect()->route('datapaspor.index')->with('success', 'Berhasil menambahkan pengguna');
    }
    
}
