<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\target;

class dashboard extends Controller
{
    public function index(){
        $title         = 'Dashboard';
        $member        = collect(DB::SELECT("SELECT count(UserID) as jumlah from f_tblusers"))->first();
        $sourcecode    = collect(DB::SELECT("SELECT count(ProjectID) as jumlah from b_tblproject_hdrs"))->first();
        $artikel       = collect(DB::SELECT("SELECT count(ArtikelID) as jumlah from b_tblartikels"))->first();
        $subscribe     = collect(DB::SELECT("SELECT count(SubscriberID) as jumlah from f_tblsubcribers"))->first();
        $pembayaran    = collect(DB::SELECT("SELECT count(TransID) as jumlah from b_tblpembayaran"))->first();
        $label         = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        for($bulan=1;$bulan < 13;$bulan++){
        $chartuser     = collect(DB::SELECT("SELECT count(UserID) AS jumlah from f_tblusers where month(created_at)='$bulan'"))->first();
        $jumlah_user[] = $chartuser->jumlah;
        }
        return view('admin/dashboard',compact('title','member','sourcecode','artikel','subscribe','pembayaran','jumlah_user','label'));
    }
}
