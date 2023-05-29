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
    <a href="dashboard_tu.php" class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Puskesmas</button>
        <div class="dropdown-content">
      <a href="#">SIMPUS</a>
      <a href="#">SISDMK</a>
      <a href="#">SIMPATIK</a>
      <a href="#">SIP</a>
      <a href="#">DASHBOARD DINAS</a>
      <a href="#">SINONA</a>
      <a href="#">MY ASPAK</a>
      <a href="#">ABSEN</a>
      <a href="#">PEMETAAN</a>
      <a href="#">GEMATI</a>
      <a href="#">PAK EDI</a>
      <a href="#">SISRUTE</a>
      <a href="#">SISGASPOL</a>
      <a href="#">UHC</a>
      <a href="#">PKP 2023</a>
      <a href="#">PKP UKM ESENSIAL 2023</a>
      <a href="#">PKP UKM PENGEMBANGAN 2023</a>
      <a href="#">RUK RPK 2023</a>
      </div>
      </div>

      <div class="dropdown">
      <button class="dropbtn">Akreditasi</button>
      <div class="dropdown-content">
    <a href="#">DOKUMEN AKREDITASI</a>
    <a href="#">NM indikator Mutu Nasional</a>
    <a href="#">Indikator Mutu UKM Puskesmas Kagok 2023</a>
    <a href="#">SIPADUKA</a>
    </div>
    </div>

    <div class="dropdown">
    <button class="dropbtn">Lokmin</button>
    <div class="dropdown-content">
  <a href="#">Capaian PKP 2023</a>
  <a href="#">Puskesmas 7G</a>
  <a href="#">SPM 2023</a>
  <a href="#">PERHITUNGAN KBK</a>
  <a href="#">MONEV</a>
  <a href="#">MONEV PERCEPATAN 2023</a>
  <a href="#">Rapat Bulanan</a>
  <a href="#">Pelaporan</a>
</div>
</div>

<div class="dropdown">
  <button class="dropbtn">Program</button>
  <div class="dropdown-content">
<a href="#">Goa Kreo</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Internal</button>
  <div class="dropdown-content">    
    <a href="#">SK PEDOMAN PANDUAN AKRED</a>
    <a href="#">SPO-AKRED</a>
    <a href="#">KAK-AKRED</a>
    <a href="#">PROGRAM MUTU</a>
    <a href="#">MR, KP</a>
    <a href="#">TELUSUR BAB 4 & RUK RPK AKRED</a>
    <a href="#">BAB 1 DAN BAB 3</a>
    <a href="#">BAB 2 DAN BAB 5</a>
    <a href="#">UANG LOKMIN</a>
    <a href="#">Rapat Eksternal</a>
    <a href="#">Hasil SIPGAR</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Dokumentasi ADMEN</button>
  <div class="dropdown-content">
<a href="#">BARANG 2023</a>
<a href="#">KEUANGAN 2023</a>
<a href="#">LOKMIN LINSEK 2023</a>
<a href="#">LOKMIN 2023</a>
<a href="#">OPERASIONAL 2023</a>
</div>
</div>
 
    <a href="landingpage.php">Logout</a>

</div>

</head>
<body>


</body>
