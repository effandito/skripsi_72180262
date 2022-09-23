<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('chart', 'ChartController@index');
Route::get('/highchart', 'HighChartController@index');
Route::get('/highchart2', 'HighChartController@indexlain');

Route::get('/redirect', 'RedirectController@index');
Route::get('/viewkosongan', 'HomeController@viewkosongan');

/*DIREKTUR UTAMA*/ 
Route::get('/DUKONSUMEN', 'DirekturUtama_controller@konsumen');
Route::get('/DUKONSUMEN', 'DirekturUtama_controller@konsumen');
Route::get('/DUKARYAWAN', 'DirekturUtama_controller@karyawans');
Route::get('/DUAbsen', 'DirekturUtama_controller@absen');
Route::get('/DU/Target', 'DirekturUtama_controller@targetDU');   
Route::get('/DU/viewedittarget/{id_target}', 'DirekturUtama_controller@vedittargetDU');
Route::post('/DU/updatetarget', 'DirekturUtama_controller@updatetarget');
Route::get('/DU/deletetarget/{id_target}','DirekturUtama_controller@deletetarget');  
Route::post('/DU/InputTarget', 'DirekturUtama_controller@inputtargetDU');    
Route::get('/DUSolstra', 'DirekturUtama_controller@solstra');
Route::get('/DUKONSUMENnilai', 'DirekturUtama_controller@nilai'); 
Route::get('/DU/grafikbaru', 'DirekturUtama_controller@grafikb'); 
Route::get('/DU/grafiktesting', 'DirekturUtama_controller@grafikb2'); 
Route::get('/DU/grafikpenilaian', 'DirekturUtama_controller@grafikpenilaian'); 
Route::get('/DU/grafikspk', 'DirekturUtama_controller@grafikspk'); 

//DIREKTUR PEMASARAN
Route::get('/DP/Konsumen', 'DirekturPemasaran_controller@konsumen');
Route::get('/DP/Karyawan', 'DirekturPemasaran_controller@karyawan');
Route::get('/DP/Absen', 'DirekturPemasaran_controller@absen');
Route::get('/DP/Target', 'DirekturPemasaran_controller@targetDP');    
Route::get('/DP/Solstra', 'DirekturPemasaran_controller@solstra');
// Route::get('/dpKONSUMENnilai', 'DirekturPemasaran_controller@nilai'); 
// Route::get('/dpKONSUMENhnilai', 'DirekturPemasaran_controller@hasilnilai'); 
Route::get('/Dpmsrnnilai', 'DirekturPemasaran_controller@nilai'); 
Route::post('/Dpmsrnnilai/tmbh', 'DirekturPemasaran_controller@inputnilai'); 
Route::get('/Dpmsrn/target/', 'DirekturPemasaran_controller@target'); 
Route::post('/Dpmsrn/InputTarget', 'DirekturUtama_controller@inputtarget'); 
Route::post('/Dpmsrn/InputTargetManager', 'DirekturPemasaran_controller@inputtargetDP');   
Route::get('/Dpmsrnhnilai', 'DirekturPemasaran_controller@hasilnilai'); 
Route::get('/Dpmsrnviewnilai', 'DirekturPemasaran_controller@indexnilai'); 
Route::get('/Dpmsrnpercobaan', 'DirekturPemasaran_controller@penilaian'); 
Route::get('/Dpmsrnbagimanager/{id_target}', 'DirekturPemasaran_controller@vbagimanager'); 
Route::get('/Dpmsrnviewnilai/norm','DirekturPemasaran_controller@norm')->name('norm');
Route::get('/Dpmsrnviewnilai/saw','DirekturPemasaran_controller@hasilsaw')->name('viewnilai');

/*MANAGER PEMASARAN*/ 
Route::get('/mpKONSUMEN', 'App\Http\Controllers\DirekturUtama_controller@konsumen');
Route::get('/mpKARYAWAN', 'App\Http\Controllers\DirekturUtama_controller@karyawan');
Route::get('/mpAbsen', 'App\Http\Controllers\DirekturUtama_controller@absen');
Route::get('/mpTarget', 'ManagerPemasaran_controller@target');
Route::get('/mpbagispv/{id_target}', 'ManagerPemasaran_controller@vbagisupervisor');
Route::post('/mpbagispv/InputTarget', 'ManagerPemasaran_controller@inputtargetSPV');    
Route::get('/mpSolstra', 'App\Http\Controllers\DirekturUtama_controller@solstra');
Route::get('/mpKONSUMENnilai', 'App\Http\Controllers\DirekturUtama_controller@nilai'); 
Route::get('/mpKONSUMENhnilai', 'App\Http\Controllers\DirekturUtama_controller@hasilnilai'); 

/*SUPERVISOR PEMASARAN*/ 
Route::get('/spvKONSUMEN', 'App\Http\Controllers\DirekturUtama_controller@konsumen');
Route::get('/spvKARYAWAN', 'App\Http\Controllers\DirekturUtama_controller@karyawan');
Route::get('/spvAbsen', 'App\Http\Controllers\DirekturUtama_controller@absen');
Route::get('/spvTarget', 'SupervisorPemasaran_Controller@target');    
Route::get('/spvbagisales/{id_target}', 'SupervisorPemasaran_Controller@vbagisales');
Route::post('/spv/InputTarget', 'SupervisorPemasaran_Controller@inputtargetsales');   
Route::get('/spvSolstra', 'App\Http\Controllers\DirekturUtama_controller@solstra');
Route::get('/spvKONSUMENnilai', 'App\Http\Controllers\DirekturUtama_controller@nilai'); 
Route::get('/spvKONSUMENhnilai', 'App\Http\Controllers\DirekturUtama_controller@hasilnilai'); 

/*HRD*/
Route::get('/HRD/Absen', 'HRD_controller@absen');
Route::get('/hrdTarget', 'App\Http\Controllers\HRD_controller@target');
Route::post('/hrd/InputTarget', 'App\Http\Controllers\HRD_controller@inputtarget');    
Route::get('/hrdSolstra', 'App\Http\Controllers\HRD_Controller@solstra');
Route::get('/hrdKONSUMENnilai', 'App\Http\Controllers\DirekturUtama_controller@nilai'); 
Route::get('/hrdKONSUMENhnilai', 'App\Http\Controllers\DirekturUtama_controller@hasilnilai'); 
Route::get('/hrdKARYAWAN', 'HRD_Controller@karyawan');
Route::get('/hrdKARYAWAN/viewtmbh/{id}', 'HRD_Controller@formtambah');
// Route::get('/hrdKARYAWAN/viewtmbh/{id}', 'HRD_Controller@formtambah');
Route::post('/hrdKARYAWAN/tmbh', 'HRD_Controller@inputkaryawan');
Route::get('/HRD/vieweditkaryawan/{id_karyawan}', 'HRD_Controller@vieweditkaryawan');
Route::post('/HRD/updatekaryawan', 'HRD_Controller@updatekaryawan');
Route::get('/HRD/deletekaryawan/{id_karyawan}', 'HRD_Controller@deletedkaryawan');
Route::get('/HRD/User', 'HRD_Controller@user');
Route::get('/HRD/toast', 'HRD_Controller@cobatoast');

/*SALES PEMASARAN*/
Route::get('/salesKONSUMEN', 'Sales_Controller@konsumen');
Route::get('/sales/Solstra', 'Sales_Controller@solstra');
Route::get('/sales/absenkaryawan', 'Sales_Controller@inputabsen');
Route::get('/salesKONSUMEN/formtambah', 'Sales_Controller@formkonsumen');
Route::post('/salesKONSUMEN/konstambah', 'Sales_Controller@inputkonsumen');
Route::get('/sales/formsolstra', 'Sales_Controller@formsolstra');
Route::post('/sales/tambahsolstra', 'Sales_Controller@inputsolstra');
Route::get('/sales/veditkons/{id_kons}','Sales_Controller@veditkons');
Route::post('/sales/updatedkons','Sales_Controller@updatekons');
Route::get('/sales/deletekons/{id_kons}','Sales_Controller@deletekons');  
Route::get('/sales/veditsolstra/{id_solstra}','Sales_Controller@veditsolstra');
Route::post('/sales/editsolstra/{id_solstra}','Sales_Controller@editsolstra');
Route::post('/sales/updatedsolstra','Sales_Controller@updatesolstra');
Route::get('/sales/deletesolstra/{id_solstra}','Sales_Controller@deletekons');  
Route::get('/sales/presensi','Sales_Controller@presensi'); 
Route::get('/sales/pulang','Sales_Controller@Pulang'); 
Route::get('/sales/izink','Sales_Controller@IzinKel'); 
Route::get('/sales/izinmsk','Sales_Controller@IzinMsk'); 
Route::get('/sales/lemmsk','Sales_Controller@LemKel'); 
Route::get('/sales/lemk','Sales_Controller@LemMsk'); 
Route::get('/sales/inputabsen/{type}','Sales_Controller@InputAbsen'); 
Route::get('/sales/target','Sales_Controller@target');
Route::post('/sales/inputtarget','Sales_Controller@inputtarget'); 
Route::get('/sales/laporanharian','Sales_Controller@laporanharian');
Route::get('/upload', 'Sales_Controller@upload');
Route::post('/upload/proses', 'Sales_Controller@proses_upload'); 
Route::post('/sales/tambahlaporan', 'Sales_Controller@tambahlaporan');
Route::get('/sales/penjualanharian','Sales_Controller@laporanpenjualan');
Route::post('/sales/tambahpenjualan', 'Sales_Controller@tambahpenjualan');
Route::get('/sales/cetakinvoice', 'Sales_Controller@cetakinvoice');
Auth::routes();


//Percobaan Target
Route::get('/TargetDU', 'HomeController@targetdirekturutama');
Route::get('/TargetDO', 'HomeController@targetdirekturoperasional');
Route::get('/TargetMO', 'HomeController@targetmanageroperasional');
Route::get('/TargetSup', 'HomeController@targetsupervisor');
Route::post('/salesKONSUMEN/konstambah', 'Sales_Controller@inputkonsumen');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
