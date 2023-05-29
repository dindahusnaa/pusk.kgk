<?php
    require 'koneksi.php';

    if ( isset($username) ||isset($username)) { 

    }

$query_sql = "SELECT * FROM `admin_ukm`  
        WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result)>0){
    header("Location: dashboard_ukm.php");
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
  } </style>
    
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
        <button class="dropbtn">LOGIN</button>
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
    <style>
        /*Login display */
{
    margin: 0; padding: 0;
    box-sizing: border-box; font-family: 'Gill Sans', 'Gill Sant MT',
    Calibri, 'Trebuchet MS', sans-serif;
}

.container{
    width: 50%;
    display: contents;
    max-width: 500px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.login {
    width: 1250px;

}

form {
    width: 250px;
    margin: 60px auto;
    
}

h1 {
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}
h2 {
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}

hr {
    border-top: 2px solid #008000;
}

p{
    text-align: center;
    margin: 10px;
}

.right img {
    width: 250px;
    height: 50%;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    /*border-top-left-radius: 15px;
    border-bottom-left-radius:15px;*/
}

form label {
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
}

input{
    width: 80%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid gray;
}

/*button login */
button {
    border: none;
    outline: :none;
    padding: 20px;
    width: 250px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 100px;
    border-radius: 5px;
    background: #aff8db;
}

button:hover{
    background: #008000;
}

@media (max-width: 880px) {
    .container{
        width: 50%;
        max-width: 550px;
        margin-left: 20px;
        margin-right: 20px;
    }

    form {
        width: 100px;
        margin: 20px auto;
    }

    .login {
        width: 200px;
        padding: 20px;
    }

    button{
        width: 50%;
    }

    .right img {
        width: 50%;
        height: 50%;
    }
}
    </style>
    
    <div class="input">
        <div class="container">
            <div class="login" >
            <form action="login_ukm.php" method="POST">
                <h1> LOGIN </h1>
                <h1> SIRDADU </h1>
                <h2> UKM </h2>
                <hr>
                <p> Sistem Serba Ada Dan Terpadu</p>
    
                <div class="box-input">
                    <i class="fas fa-envelope-open-text"></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="box-input" >
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                    </div>
                
                <a href="dashboard_ukm.php">
                    <button type="submit" name="login" class="btn-input">Login</button>
                </a>
            </form>
            </div>

        </div>
    </div>
    
</body>