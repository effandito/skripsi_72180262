<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nilai;
use App\Models\Hasil;
use App\Models\Konsumen;
use App\Models\Karyawan;
use App\Models\Solstra;


class HighChartController extends Controller
{
    /*public function index()
    {
        $konsumen = Konsumen::all();
        return view('DirekturUtama.highchart', compact('konsumen'));
    }*/
    /*public function index()
    {
        $konsumen = Konsumen::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
           
        return view('highchart', compact('konsumen'));
    }*/
    public function index()
    {
        $konsumen = DB::table('konsumen')->paginate(10);
        return view('DirekturUtama.highchart', ['konsumen'=>$konsumen]);
    }
    public function indexlain()
    {
        return view('DirekturUtama.PercobaanHighcahrts');
    }
}
