<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Nilai;
use App\Models\Hasil;
use App\Models\Konsumen;
use App\Models\Karyawan;
use App\Models\Solstra;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
    public function viewkosongan()
    {
        return view('kosongan');
    }
    public function targetdirekturutama()
    {
        return view('DirekturUtama.TargetDirekturUtama');
    }
    public function targetdirekturoperasional()
    {
        return view('TARGETDirektuPemasaran');
    }
    public function targetmanageroperasional()
    {
        return view('TARGETDirektuPemasaran');
    }
    public function targetsupervisor()
    {
        return view('TARGETDirektuPemasaran');
    }
    public function targetsales()
    {
        return view('TARGETDirektuPemasaran');
    }
}
