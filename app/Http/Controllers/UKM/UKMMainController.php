<?php

namespace App\Http\Controllers\UKM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UKMMainController extends Controller
{
    //buat function untuk menampilkan halaman login
    public function index()
    {      
        $header['title'] = "SIRDADU | UKM Dashboard";
        $footer['js'] = "<script src='/assets/js/page/ukm/login.js'></script>";
        return  view('templates/header', $header).
                view('ukm/dashboard').
                view('templates/footer', $footer);
    }
    
}
