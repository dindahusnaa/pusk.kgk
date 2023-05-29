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

  <div class="jumbotron" style="background-color: #fff1e0; color: #2d3436;">
    <br>  
    <CENTER>
    <h1 b>TARIF PELAYANAN</b></h1>
      <h3 class="text-center"> BERDASARKAN PERATURAN WALIKOTA NO 23 TAHUN 2022</h3>

    <br>
 
    <div class="row">
      <div class="column" style="background-color: #fff1e0;">
        <img src="images/1.png" alt="download" style="width:30%">
          <img src="images/2.png" alt="download" style="width:30%">
          <img src="images/3.png" alt="download" style="width:30%">
        </a>
      </div>
      </div>
    </CENTER>
    
    <br>
</body>