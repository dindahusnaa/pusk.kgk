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

        <div class="slideshow-container" style="background-color:#e9f6e7; color: #2d3436;" >
          <br>
        
        <div class="mySlides fade">
          <div class="numbertext"></div>
        <center>
          <img src="images/jam pelayanan.png" style="width: 69%" >
          <div class="text"></div>
        </center>
          <br>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <center>
          <img src="images/jadwal pelayanan kia.png" style="width:69%">
          <div class="text"></div>
        </center>
          <br>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)"></a>
        <a class="next" onclick="plusSlides(1)"></a>
        
        </div>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        
        <div class="jumbotron" style="background-color: #a9dba0; color: #2d3436;">
          <br>  
          <h1 class="text-center">Visi : </h1>
            <h3 class="text-center">"Terwujudnya Kota Semarang yang Semakin Hebat yang berlandaskan Pancasila, dalam bingkai NKRI Ber-Bhineka Tunggal Ika"</h3>
            <br>
            <h1 class="text-center">Misi :</h1>
            <div class="row">
                    <div class="col-md-6">
                <ul>
                  <li>
                    <strong class="text-center">Meningkatkan kualitas dan kapasitas Sumber Daya Manusia yang Unggul dan Produktif untuk mencapai kesejahteraan dan keadilan sosial</strong>
                  </li>
                </ul>
              </div>
                    <div class="col-md-6">
                <ul>
                  <li>
                    <strong class="text-center">Meningkatkan potensi ekonomi lokal yang berdaya saing dan stimulasi pembangunan industri, berlandaskakn riset dan inovasi berdasar prinsip demokrasi ekonomi pancasila</strong>
                  </li>
                </ul>
              </div>
                    <div class="col-md-6">
                <ul>
                  <li>
                    <strong class="text-center">Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan hak dasar dan perlindungan kesejahteraan sosial serta hak asasi manusia bagi masyarakat secara berkeadilan</strong>
                  </li>
                </ul>
              </div>
                    <div class="col-md-6">
                <ul>
                  <li>
                    <strong class="text-center">Mewujudkan infrastruktur berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota</strong>
                  </li>
                </ul>
              </div>
                    <div class="col-md-6">
                <ul>
                  <li>
                    <strong class="text-center">Menjalankan reformasi birokrasi pemerintahan secara dinamis dan menyusun produk hukum yang sesuai nilai-nilai Pancasila dalam kerangka Negara Kesatuan Republik Indonesia</strong>
                  </li>
                </ul>
              </div>
                  </div>
            <p class="text-center">Motto : </p>
            <h2 class="text-center">"Prima Melayani, Sehat Bersama Kami"</h2>
            <br>
          </div>
      
        
        <script>
       let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
        </script>

  <div class="column" style="background-color:#e9f6e7; color: #2d3436;">
    <div class="col-lg-6">
      <br>
      <h4>UPTD PUSKESMAS KAGOK</h4>
      <h5>Jl. Telomoyo No 03, Wonotingal, Candisari, Kota Semarang</h5>
      <h5>Telp. (024) 8312573 </h5>
        <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
        <div style="overflow:hidden;max-width:100%;width:300px;height:200px;">
          <div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Jalan+Telomoyo+No.3,+Wonotingal,+Semarang+City,+Central+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googl-ehtml" href="https://www.bootstrapskins.com/themes" id="authorize-maps-data">premium bootstrap themes</a>
        <style>#display-google-map img{max-height:none;max-width:none!important;background:none!important;}</style>
      </div>
    </div>
    <br>
</div> 
<div class="col-lg-6">
  <h6 class="text-right">© 2023 Puskesmas Kagok Kota Semarang  Terms Privacy</h6>
</div>
<script type="text/javascript"
src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyBy-NFMQArjtMAU2Iz8Z9XTBN6rFx1PL7c'>
</script>

</body>
</html>