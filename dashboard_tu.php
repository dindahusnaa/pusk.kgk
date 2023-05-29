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
      <a href="http://119.2.50.170:6517/kagok/">SIMPUS</a>
      <a href="https://sisdmk.kemkes.go.id/">SISDMK</a>
      <a href="https://simpatik.semarangkota.go.id/login">SIMPATIK</a>
      <a href="http://119.2.50.170:9095/sip/">SIP</a>
      <a href="http://dinkes.semarangkota.go.id/dashboard">DASHBOARD DINAS</a>
      <a href="https://sinona.semarangkota.go.id/">SINONA</a>
      <a href="https://aspak.kemkes.go.id/aplikasi/">MY ASPAK</a>
      <a href="https://absen.semarangkota.go.id/login">ABSEN</a>
      <a href="https://bit.ly/FORMATSIK">PEMETAAN</a>
      <a href="https://smg.city/formresponsesikmgematipuskesmas7g">GEMATI</a>
      <a href="http://119.2.50.170:9094/pakedi/  ">PAK EDI</a>
      <a href="https://sirs.kemkes.go.id/fo/sisrute/">SISRUTE</a>
      <a href="https://dinkes.semarangkota.go.id/gasurkeskia/">SISGASPOL</a>
      <a href="http://uhc.semarangkota.go.id/  ">UHC</a>
      <a href="#">PKP 2023</a>
      <a href="https://bit.ly/PKPUKMESENSIAL2023">PKP UKM ESENSIAL 2023</a>
      <a href="https://docs.google.com/spreadsheets/d/1K-bu_MKmzurRfGkLuU9RofsbwMyrNq4Wr6vpdVvYV9M/edit?usp=sharing">PKP UKM PENGEMBANGAN 2023</a>
      <a href="https://bit.ly/RUKRPK2022RUK2023">RUK RPK 2023</a>
      </div>
      </div>

      <div class="dropdown">
      <button class="dropbtn">Akreditasi</button>
      <div class="dropdown-content">
    <a href="http://smg.city/akredkagok">DOKUMEN AKREDITASI</a>
    <a href="mutufasyankes.kemkes.go.id">NM indikator Mutu Nasional</a>
    <a href="https://bit.ly/IMUKMPKMKAGOK2023">Indikator Mutu UKM Puskesmas Kagok 2023</a>
    <a href="https://accounts.google.com/InteractiveLogin/identifier?elo=1&ifkv=Af_xneFPib73w-4IclWIbLLmMBfLYBgKcP8FLpef_LCqJ-KP-0Gg1tLynGc1LaXgrWJv1qray4hTDQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin ">SIPADUKA</a>
    </div>
    </div>

    <div class="dropdown">
    <button class="dropbtn">Lokmin</button>
    <div class="dropdown-content">
  <a href="https://bit.ly/CAPAIANPKP23">Capaian PKP 2023</a>
  <a href="https://bit.ly/PUSKESMAS7G">Puskesmas 7G</a>
  <a href="https://bit.ly/SPMKAGOK23">SPM 2023</a>
  <a href="https://bit.ly/PERHITUNGANKBK">PERHITUNGAN KBK</a>
  <a href="monevpembangunan.semarangkota.go.id">MONEV</a>
  <a href="https://tinyurl.com/MONEV-PERCEPATAN-TH-2023">MONEV PERCEPATAN 2023</a>
  <a href="https://bit.ly/RAPATBULANANKAGOK">Rapat Bulanan</a>
  <a href="https://smg.city/deskpkpsik">Pelaporan</a>
</div>
</div>

<div class="dropdown">
  <button class="dropbtn">Program</button>
  <div class="dropdown-content">
<a href="https://linktr.ee/goakreodkksemarang">Goa Kreo</a>
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
    <a href="https://drive.google.com/drive/folders/19wEAlRPK7SmNZJsVT2MZOGqFl4ezCUTc">UANG LOKMIN</a>
    <a href="#">Rapat Eksternal</a>
    <a href="#">Hasil SIPGAR</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Dokumentasi ADMEN</button>
  <div class="dropdown-content">
<a href="https://drive.google.com/drive/folders/1JNoDQBfEvxvfP0iNfo7-87O5OJBs7tXo">BARANG 2023</a>
<a href="https://drive.google.com/drive/folders/1ysvV3sxZ0V85xqu8nTrz6Hkv4J5Z_H0R">KEUANGAN 2023</a>
<a href="https://drive.google.com/drive/folders/1JDJeTZvT6CoQE0ENzWqBqCsqQZodYH4Q">LOKMIN LINSEK 2023</a>
<a href="https://drive.google.com/drive/folders/1EO02T4Itzx6FNXupLLwnZgLG9uCcEfEF">LOKMIN 2023</a>
<a href="https://drive.google.com/drive/folders/15PDB9tRUswXi7BFbbJus-Za6TW6_xffU">OPERASIONAL 2023</a>
</div>
</div>
 
    <a href="landingpage.html">Logout</a>

</div>

</head>
<body>


</body>