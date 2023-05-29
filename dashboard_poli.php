<?php
    require 'koneksi.php';

    if ( isset($username) ||isset($username)) { 

    }

$query_sql = "SELECT * FROM `admin_poli` 
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

    <a href="landingpage.php">Logout</a>

</div>
