<?php

namespace App\Http\Controllers;
use App\Models\Nilai;
use App\Models\Hasil;
use App\Models\Konsumen;
use App\Models\Karyawan;
use App\Models\Solstra;
use App\Models\Target;
use Auth;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function inputtarget(Request $request){
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
}
