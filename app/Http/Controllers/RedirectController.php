<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RedirectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {  
        $role=Auth::user()->role;
        switch ($role) {
            case '1':
                return redirect('/DUKONSUMEN');/* Tulis kembali lagi ke home*/
                break;
            case '2':
                return redirect('/Dpmsrnnilai');
                break;
            case '3':
                return redirect('/mpKONSUMEN');
                break;
            case '4':
                return redirect('/spvKONSUMEN');
                break;
            case '5':
                return redirect('/hrdKONSUMEN');
                break;
            case '6':
                return redirect('/salesKONSUMEN');
                break;
            case '7':
                return redirect('/Dpmsrnnilai');
                break;        
            default:
            return redirect('/viewkosongan');
                break;
        }

    }
}
