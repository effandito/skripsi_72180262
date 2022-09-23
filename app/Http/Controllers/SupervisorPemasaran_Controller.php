<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Target;
use App\Models\Nilai;
use App\Models\Hasil;
use App\Models\Konsumen;
use App\Models\Karyawan;
use App\Models\Solstra;
use App\Models\Absen;


class SupervisorPemasaran_Controller extends Controller
{
    public function konsumen(){
        return view('Supervisor.DataKonsumen');
    }
    public function karyawan(){
        $target= Target::all();
        return view('Supervisor.DataKaryawan');
    }
    public function target(Request $request){
        $target= Target::All();
        return view('SupervisorPemasaran.TargetSupervisorPemasaran',compact('target'));
    }
    public function vbagisales($id_target){
        $target= Target::where('id_target','=',$id_target)->first();
        return view('SupervisorPemasaran.BagiSales',compact('target'));
    }
    public function inputtargetSales(Request $request){
        $target= new Target([
            'wilayah' => $request->wilayah,
            'target_kunjung' => $request->target_kunjung,
            'target_jual' => $request->target_jual,
            'nama' => $request->nama,
            'pmbr_kuasa' => $request->pmbr_kuasa,
            'tahun' => $request->tahun,
            ]);
        $target->save();
        return redirect('/spvTarget/');
    }
    public function solstra(){
        return view('Supervisor.DataSolStra');
    }
    public function absen(){
        return view('Supervisor.DataAbsen');
    }
    public function nilai(){
        return view('Supervisor.DataAbsen');
    }
    public function hasilnilai(){
        return view('Supervisor.DataAbsen');
    } 
    /*class DirekturUtama_Controller extends Controller
{
    public function __construct()
    { 
        $this->middleware('auth');

       
    }

    public function konsumen(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        $konsumen= Konsumen::orderBy('id_kons')->paginate( $perPage = 10, $columns = ['*'], $pageName = 'id_kons');
        return view('DirekturUtama.DataKonsumen',compact('konsumen'));
    }
    public function karyawan(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        $karyawan= Karyawan::all();
        return view('DirekturUtama.DataKaryawan',compact('karyawan'));
    }
    public function target(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        return view('DirekturUtama.DataTarget');
    }
    public function solstra(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        $solstra= Solstra::all();
        return view('DirekturUtama.DataSolStra',compact('solstra'));
    }
    public function absen(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        return view('DirekturUtama.DataAbsen');
    }
    public function nilai(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        return view('DirekturUtama.DataAbsen');
    }
    public function hasilnilai(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        return view('DirekturUtama.DataAbsen');
    }
    public function highchart(){$viewer = View::select(DB::raw("SUM(numberofview) as count"))->orderBy("created_at")->groupBy(DB::raw("year(created_at)"))->get()->toArray();$viewer = array_column($viewer, 'count');$click = Click::select(DB::raw("SUM(numberofclick) as count"))->orderBy("created_at")->groupBy(DB::raw("year(created_at)"))->get()->toArray();$click = array_column($click, 'count');return view('highchart')->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))->with('click',json_encode($click,JSON_NUMERIC_CHECK));}
}*/

}
