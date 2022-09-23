<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Users;
use App\Models\Hasil;
use App\Models\Konsumen;
use App\Models\Karyawan;
use App\Models\Solstra;
use App\Models\Target;
use App\Models\Absen;
use App\Providers\Paginator;
use DB;
use Auth;

class DirekturUtama_Controller extends Controller
{
    public function __construct()
    { 
        $this->middleware('auth');      
    }

    public function konsumen(Request $request){
        if(Auth::user()->role!=1) {
            return redirect('/home');
        }
            $show=10;
            if(strlen($request->show)!=0){
                $show=$request->show;
                $konsumen = Konsumen::where("prshn","like","%".$request->carikons."%")->paginate($show);
            }else {
                $konsumen= Konsumen::paginate($show);
            }
            // }$show=2;
            // if($request->show!=null){
            //     $show=$request->show;}
        // $konsumen= Konsumen::orderBy('id_kons')->paginate( $perPage = 10, $columns = ['*'], $pageName = 'id_kons');
     
        return view('DirekturUtama.DataKonsumen',compact('konsumen'));
    }
    public function deletekonsumen($id)
    {
        konsumen::where('id', $id)->delete();
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
 
    public function karyawan(Request$request){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }$show=2;
            if($request->show!=null){
                $show=$request->show;}
        // $karyawan= Karyawan::orderBy('id_karyawan')->paginate( $perPage = 10, $columns = ['*'], $pageName = 'id_karyawan');
        $karyawan= Karyawan::paginate($show);
        return view('DirekturUtama.DataKaryawan',compact('karyawan'));
    }
    public function karyawans(Request $request){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
            // $show=2;
            // if($request->show!=null){
            //     $show=$request->show;
            // }
            $show=10;
            if(strlen($request->show)!=0){
                $show=$request->show;}
            // $karyawan= Karyawan::all();
            $karyawan = Karyawan::paginate($show);
            return view('DirekturUtama.DataKaryawan',compact('karyawan'));
    }
    public function targetDU(Request $request){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
            $show=2;
             if($request->show!=null){
                 $show=$request->show;
             }
            $target= Target::orderBy('tahun','desc')->paginate($show);
        return view('DirekturUtama.TargetDirekturUtama',compact('target'));
    }
    public function vedittargetDU($id_target){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        $target= Target::where('id_target','=',$id_target)->first();
        return view('DirekturUtama.edittarget',compact('target'));
    }
    public function updatetarget(Request $request){
        target::where('id_target','=',$request->id_target)->update([
            'wilayah' => $request->wilayah,
            'target_kunjung' => $request->target_kunjung,
            'target_jual' => $request->target_jual,
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            ]);
        return redirect('/DU/Target')->with('success', 'Berhasil mengedit data');
    }
    public function inputtargetDU(Request $request){
        $target= new Target([
            'wilayah' => $request->wilayah,
            'target_kunjung' => $request->target_kunjung,
            'target_jual' => $request->target_jual,
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            ]);
        $target->save();
        return redirect('/DU/Target');
    }
    public function deletetarget($id_target)
    {
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        $target = Target::where('id_target', $id_target)->delete();
        return redirect ('/DU/Target');
    }
    public function solstra(Request $request){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }$show=10;
            if($request->show!=null){
                $show=$request->show;}
        $solstra= Solstra::paginate($show);
        return view('DirekturUtama.DataSolStra',compact('solstra'));
    } 
    public function grafikb(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
            $tahun= Target::distinct('tahun')->pluck('tahun');
            $sum_thn= Target::selectraw('sum(target_jual) as total_target')->groupby('tahun')->get();
            $sum_kunjung= Target::selectraw('sum(target_kunjung) as total_kunjung')->groupby('tahun')->get();
            // return $sum_thn;
                       
         return view('DirekturUtama.GrafikBaru',compact('tahun','sum_thn', 'sum_kunjung'));
        
    }
    public function grafikb2(Request $request){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
            $tahun= Target::distinct('tahun')->orderBy('tahun','asc')->pluck('tahun') ;
            $sum_thn= Target::where('tahun',$request->tahun)->selectraw('sum(target_jual) as total_target')->groupby('tahun')->get();
            $sum_kunjung= Target::where('tahun',$request->tahun)->selectraw('sum(target_kunjung) as total_kunjung')->groupby('tahun')->get();
            $tahun_terpilih= $request->tahun;            // return $sum_thn;
                       
         return view('DirekturUtama.GrafikTarget2',compact('tahun','sum_thn', 'sum_kunjung','tahun_terpilih'));
        
    }
    public function grafikpenilaian()
    {
        // if(Auth::user()->role!=1) {
        //     return redirect('/home');
        //     }
        //     $nama_kar= Nilai::distinct('nama_kar')->pluck('nama_kar');
        //     $sum_nilai= Nilai::selectraw('(sum(C1)+sum(C2)+sum(C3)+sum(C4)) as total_nilai')->groupby('nama_kar')->get();
        //     return $sum_nilai;
        //     //  return view('DirekturUtama.GrafikPenilaian',compact('nama_kar','sum_nilai'));
        if(Auth::user()->role!=1) {
                return redirect('/home');
               }
                 $nama_kar= Nilai::distinct('nama_kar')->pluck('nama_kar');
                $sum_nilai= Nilai::selectraw('(sum(C1)+sum(C2)+sum(C3)+sum(C4)) as total_nilai')->groupby('nama_kar')->get();
             return view('DirekturUtama.GrafikPenilaian',compact('nilai'));
    }
    public function absen(Request $request){
        if(Auth::user()->role!=1) {
            return redirect('/home');    
        }
        $show=10;
        $order="asc";
        $order="desc";
            if(strlen($request->show)!=0){
                $show=$request->show;
            $order=$request->order;
            }
            $absen = Absen::orderBy("waktu",$order)->paginate($show);;
        return view('DirekturUtama.DataAbsen',compact('absen'));
        
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
    public function grafikspk(){
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        return view('DirekturUtama.GrafikSpk');
    }
    public function targetdirekturutama()
    {
        if(Auth::user()->role!=1) {
            return redirect('/home');
            }
        return view('DirekturUtama.TargetDirekturUtama');
    }
    public function highchart(){$viewer = View::select(DB::raw("SUM(numberofview) as count"))->orderBy("created_at")->groupBy(DB::raw("year(created_at)"))->get()->toArray();$viewer = array_column($viewer, 'count');$click = Click::select(DB::raw("SUM(numberofclick) as count"))->orderBy("created_at")->groupBy(DB::raw("year(created_at)"))->get()->toArray();$click = array_column($click, 'count');return view('highchart')->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))->with('click',json_encode($click,JSON_NUMERIC_CHECK));}
}