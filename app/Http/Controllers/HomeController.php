<?php

namespace App\Http\Controllers;

use App\Curve;
use Illuminate\Http\Request;
use App\Nasabah;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', '10000');
        ini_set('request_terminate_timeout', '10000');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
