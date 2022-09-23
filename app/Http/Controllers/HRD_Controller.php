<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Nilai;
use App\Models\Hasil;
use App\Models\Konsumen;
use App\Models\Karyawan;
use App\Models\Solstra;
use App\Models\User;
use App\Models\Absen;
use Auth;



class HRD_Controller extends Controller
{
    public function karyawan(){
        $karyawan= Karyawan::all();
        return view('HRD.DataKaryawan',compact('karyawan'));
    } 
    /*public function karyawan(){
        return view('HRD.DataKaryawan');
    }*/
    public function absen(){
        $absen= Absen::all();
        return view('HRD.DataAbsen',compact('absen'));
    }
    public function penilain(){
        return view('HRD.DataPenilaian');
    }
    public function formtambah($id){
        $karyawan=karyawan::where('id_user','=', $id)->first();
        return view('HRD.createkar',['karyawan' => $karyawan]);
    }
        public function user(){
        $user= User::all();
        return view('HRD.DataUser',['user' => $user]);
    }
    public function inputkaryawan(Request $request){
        // $karyawan=karyawan::where('id_karyawan','=',$request->id)->first();
        $karyawan=Karyawan::where('id_karyawan','=',$request->id)->update([
            'no_ktp' => $request->no_ktp,
            'nama_kar' => $request->nama_kar,
            'jenis_klmn' => $request->jenis_klmn,
            'alamat' => $request->alamat,
            'tempat_lhr' => $request->tempat_lhr,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
            'pendidikan' => $request->pendidikan,
            'goldar' => $request->goldar,
            'status' => $request->status,
            'no_bpjs' => $request->no_bpjs,
            'jml_ank' => $request->jml_ank,
            'jabatan' => $request->jabatan,
            'tgmsk_awal' => $request->tgmsk_awal,
            'nm_ats'=> $request->nm_ats
            ]);
       
        return redirect()->back();
        // return $karyawan;

    }
        public function cobatoast()
        {
            return view('HRD.nyobatoast');
        }
    public function updatekaryawan(Request $request){
        karyawan::where('id_karyawan','=',$request->id)->update([
            'no_ktp' => $request->no_ktp,
            'nama_kar' => $request->nama_kar,
            'jenis_klmn' => $request->jenis_klmn,
            'alamat' => $request->alamat,
            'tempat_lhr' => $request->tempat_lhr,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
            'pendidikan' => $request->pendidikan,
            'goldar' => $request->goldar,
            'status' => $request->status,
            'no_bpjs' => $request->no_bpjs,
            'jml_ank' => $request->jml_ank,
            'jabatan' => $request->jabatan,
            'tgmsk_awal' => $request->tgmsk_awal,
            'nm_ats'=> $request->nm_ats
            ]);
        return redirect('/hrdKARYAWAN')->with('success', 'Berhasil mengedit data');
    }
    public function vieweditkaryawan($id_karyawan){
        //return $konsumen;
        $karyawan = Karyawan::where('id_karyawan','=',$id_karyawan)->first();
       return view('HRD.vieweditkar',compact('karyawan'));
        //return view('HRD.vieweditkar',['karyawan' => $karyawan]);
     }
     public function deletedkaryawan($id_karyawan)
    {
        $karyawan = Karyawan::where('id_karyawan', $id_karayawan)->delete();
        ///$konsumen = Konsumen::where('id_kons', $id_kons)->delete();
        return redirect ('/hrdKARYAWAN');
    }
    /*public function edit(){
        return view('HRD.DataKaryawan');
    }
    public function delete(){
        return view('HRD.DataKaryawan');
    }*/
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
