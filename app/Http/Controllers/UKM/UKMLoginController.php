<?php

namespace App\Http\Controllers\UKM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UKMLoginController extends Controller
{
    //buat function untuk menampilkan halaman login
    public function index()
    {      
        $header['title'] = "SIRDADU | UKM LOGIN";
        $footer['js'] = "<script src='/assets/js/page/ukm/login.js'></script>";
        return  view('templates/header', $header).
                view('ukm/login').
                view('templates/footer', $footer);
    }

    //Buat Login Controller
    public function ukmLogin(Request $request){

        // dd($request->post());
        $username = $request->post('username');
        $password = $request->post('password');

        //query mendapatkan user berdasarkan username dan passwordnya
        //(AES_ENCRYPT yang kunci nya berada di file .env)

        $kunci = env('KUNCI_SURGA');

        $data_login = DB::select(
        "SELECT u.*, mr.nama, md.nama_divisi, md.kode_divisi 
        FROM users u 
        JOIN ms_role mr ON mr.nama = u.`role` 
        LEFT JOIN ms_divisi md ON md.kode_divisi = u.kode_divisi 
        WHERE status = 1 
        AND username = '$username' 
        AND password = HEX(AES_ENCRYPT('$password','$kunci'))
        LIMIT 1
        ");
        
        //jika data tidak ditemukan

        if(count($data_login) == 0){
            return response()->json([
                'status' => '400',
                'message' => 'Username atau Password Salah'
            ], 400);
        }

        //Buat Session untuk user yang login
        
        $data_session = [
            "username"      => $data_login[0]->username,
            "nama"          => $data_login[0]->nama,
            "role"          => $data_login[0]->role,
            "kode_divisi"   => $data_login[0]->kode_divisi,
            "is_login"      => true
        ];
    
        $request->session()->put($data_session);
        
        //Login berhasil
        return response()->json([
            'status' => '200',
            'message' => 'Login Berhasil']);
    }
}
