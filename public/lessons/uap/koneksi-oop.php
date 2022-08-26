<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_uap2046";

    //Membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $database);
    if ($koneksi->connect_error){
        die("Connection failed: " . $error);
    }
    echo "Connected successfully";
?>