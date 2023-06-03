<?php

namespace App\Http\Controllers\KIA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KIAMainController extends Controller
{
    //buat function untuk menampilkan halaman login
    public function index()
    {      
        $header['title'] = "SIRDADU | KIA Dashboard";
        $footer['js'] = "";
        // $footer['js'] = "<script src='/assets/js/page/ukm/login.js'></script>";
        
        return  view('templates/header', $header).
                view('kia/dashboard').
                view('templates/footer', $footer);
    }
    
}
