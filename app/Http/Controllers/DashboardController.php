<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function map_puskesmas()
    {

        $footer_map = '
        <div class="column p-3 text-center" style="background-color:#e9f6e7; color: #2d3436;">
            <div class="col-lg-12">
            <br>
            <div class="pb-3">
                <h4>UPTD PUSKESMAS KAGOK</h4>
                <h5>Jl. Telomoyo No 03, Wonotingal, Candisari, Kota Semarang</h5>
                <h5>Telp. (024) 8312573 </h5>
            </div>
                <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                <div style="overflow:hidden;
                            max-width:100%;
                            width:300px;
                            height:200px;
                            margin:auto">
                <div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Jalan+Telomoyo+No.3,+Wonotingal,+Semarang+City,+Central+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googl-ehtml" href="https://www.bootstrapskins.com/themes" id="authorize-maps-data">premium bootstrap themes</a>
                <style>#display-google-map img{max-height:none;max-width:none!important;background:none!important;}</style>
            </div>
            </div>
            <br>
        </div>
    
        <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyBy-NFMQArjtMAU2Iz8Z9XTBN6rFx1PL7c">
        </script>';

        return $footer_map;
    }

    public function index()
    {
        $header = array(
            'title' => "SIRADU"
        );

        $footer['js'] = '<script src="' . url('/assets/js/page/landing_page.js') . '"></script>';

        $data['map_puskesmas'] = $this->map_puskesmas();

        return
            view('templates/header', $header) .
            view('landing_page', $data) .
            view('templates/footer', $footer);
    }

    public function visi_misi()
    {
        $header = array(
            'title' => "SIRADU | Visi Misi"
        );

        $data['map_puskesmas'] = $this->map_puskesmas();

        $footer['js'] = "";

        return
            view('templates/header', $header) .
            view('visi_misi', $data) .
            view('templates/footer', $footer);
    }

    public function profil()
    {
        $header = array(
            'title' => "SIRADU | Profil"
        );

        $data['map_puskesmas'] = $this->map_puskesmas();

        $footer['js'] = "";

        return
            view('templates/header', $header) .
            view('profil', $data) .
            view('templates/footer', $footer);
    }

    public function layanan()
    {
        $header = array(
            'title' => "SIRADU | Layanan"
        );

        $data['map_puskesmas'] = $this->map_puskesmas();

        $footer['js'] = "";

        return
            view('templates/header', $header) .
            view('layanan', $data) .
            view('templates/footer', $footer);
    }

    public function kontak(){
        $header = array(
            'title' => "SIRADU | Hubungi Kami"
        );

        $data['map_puskesmas'] = $this->map_puskesmas();

        $footer['js'] = "";

        return
            view('templates/header', $header) .
            view('kontak', $data) .
            view('templates/footer', $footer);
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
