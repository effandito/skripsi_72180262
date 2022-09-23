<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Hasil;
use App\Models\Konsumen;
use App\Models\Karyawan;
use App\Models\Solstra;
use App\Models\Target;
use App\Models\Absen;

class DirekturPemasaran_Controller extends Controller
{
    public function konsumen(Request $request){
        $show=2;
            if($request->show!=null){
                $show=$request->show;}
        $konsumen= Konsumen::paginate($show);
        return view('DirekturPemasaran.DataKonsumen',compact('konsumen'));
    }
    public function penilaian(Request $request){
        $show=2;
            if($request->show!=null){
                $show=$request->show;}
        $karyawan= Karyawan::paginate($show);
        return view('DirekturPemasaran.PercobaanPenilaian',compact('nilai'));
    }
    public function karyawan(Request $request){
        $show=2;
            if($request->show!=null){
                $show=$request->show;}
        $karyawan= Karyawan::paginate($show);
        return view('DirekturPemasaran.DataKaryawan',compact('karyawan'));
    }
    public function target(Request $request){
        $show=2;
            if($request->show!=null){
                $show=$request->show;}
        $target= Target::paginate($show);
        return view('DirekturPemasaran.TARGETDirekturPemasaran',compact('target'));
    } 
    public function inputtarget(Request $request){
        $target= new Target([
            'wilayah' => $request->wilayah,
            'target_kunjung' => $request->target_kunjung,
            'target_jual' => $request->target_jual,
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            ]);
        $target->save();
        
    }
    public function solstra(Request $request){
        $show=2;
            if($request->show!=null){
                $show=$request->show;}
        $solstra= Solstra::paginate($show);
        return view('DirekturPemasaran.DataSolStra',compact('solstra'));
    }
    public function absen(Request $request){
        $show=2;
            if($request->show!=null){
                $show=$request->show;}
        $absen= Absen::paginate($show);
        return view('DirekturPemasaran.DataAbsen',compact('absen'));
    }
    public function nilai(){

        return view('DirekturPemasaran.DataPenilaian');
    }
    public function hasilnilai(){
        return view('DirekturPemasaran.hasilinputnilai');
    }
    
    public function inputnilai(Request $request){
        $request->validate([
            'nama_kar' =>'required',
            'C1' =>'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
        ]);
        $nilai= new Nilai([
            'nama_kar' => $request->nama_kar,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            ]);
        $nilai->save();
        return redirect("/Dpmsrnnilai")->with('status', 'Data Berhasil Ditambahkan!');
        // return $request->nama_kar;
    }
    public function indexnilai(){
        $nilai = Nilai::all();
        $option = Karyawan::where('jabatan','sales')->get();
        return view('DirekturPemasaran.hasilinputnilai',compact('nilai','option'));
    } 

    public function norm()
    {
        Hasil::truncate();
        $dt=Nilai::all(); 
        $RC1=Nilai::max('C1');
        $RC2=Nilai::min('C2');
        $RC3=Nilai::max('C3');
        $RC4=Nilai::max('C4');
        foreach($dt as $row)
        {
            $C1=($row['C1']/$RC1);
            $C2=($RC2/$row['C2']);
            $C3=($row['C3']/$RC3);
            $C4=($row['C4']/$RC4);
            $sum=($C1*0.4)+($C2*0.3)+($C3*0.2)+($C4*0.1);
                    $Hasil= new Hasil([
                        'id' => $row['id'],
                        'C1' => $C1,
                        'C2' => $C2,
                        'C3' =>  $C3,
                        'C4' =>  $C4,
                        'SUM' =>  $sum
                    ]);
                    $Hasil->save();
        }
        return redirect()->route('viewnilai');
    }
    public function hasilsaw()
    {
        $nrm=Hasil::orderBy('sum', 'desc')->paginate(10);
        return view('DirekturPemasaran.hasilspk',compact('nrm'));
    }
    public function targetDP(Request $request){
        // if(Auth::user()->role!=1) {
        //     return redirect('/home');
        //     }
            $show=2;
            if($request->show!=null){
                $show=$request->show;
            }
            $target= Target::paginate($show);
        return view('DirekturPemasaran.TargetDirekturPemasaran',compact('target'));
            }
    public function vbagimanager($id_target){
        $target= Target::where('id_target','=',$id_target)->first();
        return view('DirekturPemasaran.BagiManager',compact('target'));
    }
    public function inputtargetDP(Request $request)
    {
        $target= new Target([
            'wilayah'=>$request->wilayah,
            'tahun'=>$request->tahun,
          'nama'=> $request->nama,
          'pmbr_kuasa'=>$request->pmbr_kuasa,
          'target_jual'=>$request->target_jual,
          'target_kunjung'=>$request->target_kunjung,
          ]
        );
  $target->save();
        return redirect('/Dpmsrn/target/');
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
