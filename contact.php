<?php
    require 'koneksi.php';

    if ( isset($username) ||isset($username)) { 

    }

$query_sql = "SELECT * FROM `admin_tu` 
        WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result)>0){
    header("Location: dashboard_tu.php");
} else {
    echo "<center><h2> </h2>";
}

?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>SIRDADU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- linking css file -->
  <link rel="stylesheet" href="style_navbarlanding.css">
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/logo.png">
<style> body {
    font-family: Arial, Helvetica, sans-serif;
  }</style>
    
    <div class="navbar">
      <a href="landingpage.php" class="active">Home</a>
      <a href="visimisi.php">Visi Misi </a>
      <a href="profil.php">Profil</a>
      <a href="layanan.php">Layanan</a>
    <div class="dropdown">
        <button class="dropbtn">Struktur Organisasi</button>
        <div class="dropdown-content">
      <a href="#">UPTD PUSKESMAS</a>
      <a href="#">ADMEN</a>
      <a href="#">MUTU</a>
      <a href="#">PENINGKATAN MUTU</a>
      <a href="#">AUDIT INTERNAL</a>
      <a href="#">PENANGANAN PENGADUAN MASYARAKAT</a>
      <a href="#">KESELAMATAN PASIEN</a>
      <a href="#">PENCEGAHAN DAN PENGENDALIAN INFEKSI</a>
      <a href="#">MANAJEMEN RESIKO</a>
      <a href="#">MFK & K3</a>
      <a href="#">MUTU</a>
    </div>
  </div> 
      <a href="contact.php">Hubungi Kami</a>
      <div class="dropdown">
          <button class="dropbtn">Login</button>
          <div class="dropdown-content">
        <a href="login_tu.php">Tata Usaha</a>
        <a href="login_poli.php">POLI</a>
        <a href="login_kia.php">KIA</a>
        <a href="login_lab.php">LAB</a>
        <a href="login_ukm.php">UKM</a>
      </div>
    </div> 
  </div>
</head>

<body>
<div class="column" style="background-color:#e9f6e7; color: #2d3436;">
  <br>
  <h2 class="text-right">Hubungi Kami</h2>
  <div class="col-lg-6">
    <h3><strong>UPTD PUSKESMAS KAGOK</strong></h3>
    <p>Jl. Telomoyo No 03, Wonotingal, Candisari, Kota Semarang</p>
    <p>Telp. (024) 8312573</p>

      <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
      <div style="overflow:hidden;max-width:100%;width:300px;height:200px;">
        <div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Jalan+Telomoyo+No.3,+Wonotingal,+Semarang+City,+Central+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googl-ehtml" href="https://www.bootstrapskins.com/themes" id="authorize-maps-data">premium bootstrap themes</a>
      <style>#display-google-map img{max-height:none;max-width:none!important;background:none!important;}</style>
    </div>
  </div>
  <br>
</div>

<script type="text/javascript"
src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyBy-NFMQArjtMAU2Iz8Z9XTBN6rFx1PL7c'>
</script>

<div class='container'>
  <div class='col-md-8'>
    <div class="blog-main" style="background-color: white;">

      <table border="0" cellpadding="1" cellspacing="1" style="width:500px">
        <tbody>
          <tr>
            <td><tt><samp>email</samp></tt></td>
            <td><tt><samp>: puskesmaskagok@gmail.com</samp></tt></td>
          </tr>
          <tr>
            <td><tt><samp>tiktok</samp></tt></td>
            <td><tt><samp>: @puskesmaskagok</samp></tt></td>
          </tr>
          <tr>
            <td><tt><samp>IG</samp></tt></td>
            <td><tt><samp>: puskesmaskagok</samp></tt></td>
          </tr>
        </tbody>
      </table>
     </div>
   </div>
  </div>
  <br>
</div>

<h6 class="text-right">© 2023 Puskesmas Kagok Kota Semarang  Terms Privacy</h6>
</body>