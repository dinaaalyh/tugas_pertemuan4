<?php
    $namaserver = "localhost";
    $userdb = "root";
    $passdb = "";
    $namadb = "userdata";
    $connection = mysqli_connect($namaserver, $userdb, $passdb, $namadb);

    if(!$connection){
        die("Koneksi ke database gagal" . mysqli_connect_error());
    }
?>