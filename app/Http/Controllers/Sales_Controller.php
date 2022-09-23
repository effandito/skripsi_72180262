<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use App\Models\Data;
use App\Models\Solstra;
use App\Models\Absen;
use App\Models\Target;
use App\Models\Gambar;
use App\Models\Laporan;
use App\Models\Penjualan;
use Barryvdh\DomPDF\Facade\Pdf;
use Auth;

class Sales_Controller extends Controller
{
    public function karyawan(){
        return view('Sales.DataKaryawan');
    }
    public function target(){
        $target= Target::all();
        return view('Sales.TargetSales');
    }
    public function inputtargetsales(Request $request){
        $target= new Target([
            'wilayah' => $request->wilayah,
            'target_kunjung' => $request->target_kunjung,
            'target_jual' => $request->target_jual,
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            ]);
        $target->save();
        return view('Sales.TargetSales');
    }
    public function solstra(){
        $solstra= Solstra::all();
        return view('Sales.DataSolStra',compact('solstra'));
    }
    public function absen(){
        return view('Sales.DataAbsen');
    }
    public function nilai(){
        return view('Sales.DataAbsen');
    }
    public function hasilnilai(){
        return view('Sales.DataAbsen');
    }
    public function formkonsumen(){
        return view('Sales.createkons');
    }
    public function formsolstra(){
        return view('Sales.createsolstra');
    }
    public function konsumen(Request$request){
        $show=10;
            if(strlen($request->show)!=0){
                $show=$request->show;}
            // $karyawan= Karyawan::all();
            $konsumen = Konsumen::paginate($show);
        return view('Sales.DataKonsumen',compact('konsumen'));
    } 
    public function inputkonsumen(Request $request){
        $konsumen= new Konsumen([
            'prshn' => $request->prshn,
            'alamat' => $request->alamat,
            'npwp' => $request->npwp,
            'telp' => $request->telp,
            'email' => $request->email,
            'nama_cp' => $request->nama_cp,
            'no_hp' => $request->no_hp,
            'pesan' => $request->pesan,
            'ttl_hrg' => $request->ttl_hrg
            ]);
        $konsumen->save();
        return redirect("/salesKONSUMEN/formtambah");
    }
    public function inputsolstra(Request $request){
        $solstra= new Solstra([
            'nama_sales' => $request->nama_sales,
            'nama_spv' => $request->nama_spv,
            'masalah' => $request->masalah,
            'solusi' => $request->solusi,
            'waktu_msl' => $request->waktu_msl,
            'tanggal_msl' => $request->tanggal_msl,
            'waktu_sol' => $request->waktu_sol,
            'tanggal_sol' => $request->tanggal_sol,
            'status' => $request->status,
            ]);
        $solstra->save();
        return redirect("/sales/formsolstra")->with('success', 'Berhasil menambah data');
    }
    public function updatekons(Request $request){
        Konsumen::where('id_kons','=',$request->id_kons)->update([
        'prshn'=> $request->prshn,
        'alamat'=> $request->alamat,
        'npwp'=> $request->npwp,
        'telp'=> $request->telp,
        'email'=> $request->email,
        'nama_cp'=> $request->nama_cp,
        'no_hp'=> $request->no_hp,
        'pesan'=> $request->pesan,
        'ttl_hrg'=> $request->ttl_hrg
            ]);
        return redirect('/salesKONSUMEN')->with('success', 'Berhasil mengedit data');
    }
    public function veditkons($id_kons){
        $konsumen = Konsumen::where('id_kons',$id_kons)->first();
        //return $konsumen;
        return view('Sales.vieweditkons',['konsumen' => $konsumen]);
     }
     public function deletekons($id_kons)
    {
        $konsumen = Konsumen::where('id_kons', $id_kons)->delete();
        ///$konsumen = Konsumen::where('id_kons', $id_kons)->delete();
        return redirect ('/salesKONSUMEN');
    }

     public function updatesolstra(Request $request){
        Solstra::where('id','=',$request->id)->update([
        'nama' => $request->nama,
        'notelp' => $request->notelp,
         'email' => $request->email,
         'pesan' => $request->pesan,
         'kecamatan' => $request->kecamatan,
         'jalan' => $request->jalan,
         'desa' => $request->desa,
         'norumah' => $request->norumah,
         'status' => $request->status
        ]);
        return redirect('/sales/veditsolstra/{id}')->with('success', 'Berhasil mengedit data');
    }
    public function veditsolstra($id_solstra){
        $solstra = Solstra::where('id_solstra', $id_solstra)->first();
        return view('Sales.vieweditsolstra',compact('solstra'));
     } 

     public function deletesolstra($id_solstra)
     {
         $solstra = Solstra::where('id_solstra', $id_solstra)->delete();
         
         return redirect ('/DU/Target');
     }

     public function index()
     {
         return view('chart', compact('users'));
     } 
    public function Pulang()
    {
        $absen = new Absen([
            'id_kary' => Auth::user()->id,
            'waktu' => date("Y-m-d H:i:s"),
            'keterangan' => 'Pulang'
        ]) ;
        $absen->save();
        return redirect('/sales/presensi');
    }
    public function IzinKel()
    {
        $absen = new Absen([
            'id_kary' => Auth::user()->id,
            'waktu' => date("Y-m-d H:i:s"),
            'keterangan' => 'Izin Keluar'
        ]) ;
        $absen->save();
        return redirect('/sales/presensi');
    }
    public function IzinMsk()
    {
        $absen = new Absen([
            'id_kary' => Auth::user()->id,
            'waktu' => date("Y-m-d H:i:s"),
            'keterangan' => 'Izin Masuk'
        ]) ;
        $absen->save();
        return redirect('/sales/presensi');
    }
    public function LemKel()
    {
        $absen = new Absen([
            'id_kary' => Auth::user()->id,
            'waktu' => date("Y-m-d H:i:s"),
            'keterangan' => 'Lembur Keluar'
        ]) ;
        $absen->save();
        return redirect('/sales/presensi');
    }
    public function LemMsk()
    {
        $absen = new Absen([
            'id_kary' => Auth::user()->id,
            'waktu' => date("Y-m-d H:i:s"),
            'keterangan' => 'Lembur Masuk'
        ]) ;
        $absen->save();
        return redirect('/sales/presensi');
    }
     public function presensi()
     {
         return view('Sales.jamdigital8');
     }
     
     public function InputAbsen($type)
     {
         if ($type=1) {
            $absen= new Absen([
                'id_kary' => Auth::user()->id,
                'waktu' => date("Y-m-d H:i:s"),
                'keterangan' => 'Masuk'
                ]);
            $absen->save();
         }
         elseif($type=2) {
            $absen= new Absen([
                'id_kary' => Auth::user()->id,
                'waktu' => date("Y-m-d H:i:s"),
                'keterangan' => 'Pulang'
                ]);
            $absen->save();
            return redirect("/sales/formsolstra");
         }elseif($type=3) {
            $absen= new Absen([
                'id_kary' => Auth::user()->id,
                'waktu' => date("Y-m-d H:i:s"),
                'keterangan' => 'Ijin Masuk'
                ]);
            $absen->save();
     }elseif($type=4) {
        $absen= new Absen([
            'id_kary' => Auth::user()->id,
            'waktu' => date("Y-m-d H:i:s"),
            'keterangan' => 'Ijin Pulang',
            ]);
        $absen->save();
     }elseif($type=5) {
        $absen= new Absen([
            'id_kary' => Auth::user()->id,
            'waktu' => date("Y-m-d H:i:s"),
            'keterangan' => 'Lembur Masuk',
            ]);
        $absen->save();
     }elseif($type=6) {
        $absen= new Absen([
            'id_kary' => Auth::user()->id,
            'waktu' => date("Y-m-d H:i:s"),
            'keterangan' => 'Lembur Pulang',
            ]);
        $absen->save();
        
}
    
} 
    public function tambahlaporan(Request $request)
    {
        
         $laporan = new Laporan([
        'nama_per'=>$request->nama_per,
        'nama_kons'=>$request->nama_kons,
        'no_telp'=>$request->no_telp,
        'wkt_msk'=>date("Y-m-d H:i:s"),
        'wkt_kel'=>date("Y-m-d H:i:s"),
        'alamat_kunj'=>$request->alamat_kunj,
        'foto_lok'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'nilai'=>$request->nilai,  
            ]);
           
        $laporan->save();
        return view('Sales.createlaporanharian'); 
    }

    public function laporanharian(Request $request)
    {
        $laporan = Laporan::get();
    return view('Sales.createlaporanharian',['laporan' => $laporan]);  
    }


	public function upload(){
		$gambar = Gambar::get();
		return view('Sales.upload',['gambar' => $gambar]);
	}
 
	public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);
     
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
     
        $nama_file = time()."_".$file->getClientOriginalName();
     
              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
     
     
        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);
     
        return redirect()->back();
    }
    public function laporanpenjualan()
    {
        $penjualan = Penjualan::get();
    return view('Sales.createpenjualan');  
    }

    public function tambahpenjualan(Request $request)
    {       
         $penjualan = new Penjualan([
        'nama_per'=>$request->nama_per,
        'nama_kons'=>$request->nama_kons,
        'no_telp'=>$request->no_telp,
        'judul'=>$request->judul,
        'jumlah'=>$request->jumlah,
        'harga'=>$request->harga,
        'diskon'=>$request->diskon,
        'ttl_hrg'=>$request->ttl_hrg, 
        'foto_byr'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);       
        $penjualan->save();
        return view('Sales.createpenjualan'); 
    }
    public function cetakinvoice(Request $request)
    {
      $data = Penjualan::where('id_jual','1')->first();
        // return $data;
        // return view('Sales.formatinvoice',compact('data'));
        // $pdf = PDF::loadview('/Sales/formatinvoice')->setpaper('Legal','potrait');
        // return $pdf->download('invoice.pdf');

        $pdf = Pdf::loadview('formatinvoice',compact('data'))->setpaper('Legal','potrait');
        return $pdf->stream('invoice');
        // return view('formatinvoice');

    }

    }
