<?php
/**
 * params
 * 1. HOST/SERVER/URL
 * 2. Username
 * 3. Password
 * 4. Nama database
 */

// cek koneksi
try {
    $koneksi = mysqli_connect("localhost", "root", "", "db_uap2046");
    echo "Connected successfully";
} catch(Exception $error) {
    die("Connection failed: " . $error->getMessage());
}
?>