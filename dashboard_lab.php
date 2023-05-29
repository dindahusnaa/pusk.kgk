<?php
    require 'koneksi.php';

    if ( isset($username) ||isset($username)) { 

    }

$query_sql = "SELECT * FROM `admin_lab` 
        WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result)>0){
    header("Location: dashboard_tu.php");
} else {
    echo "<center><h2> </h2>";
}
?>