<?php
    include '../koneksi.php';

    $inputan = implode(',', array_map(function($input) {
        return "'$input'";
    }, $_GET));
    
    $query = "INSERT INTO table_calon_mhs (
                    kode_calon_mhs, nama_calon_mhs, alamat, telp)
                    values ($inputan)";

    try {
        $simpan = mysqli_query($koneksi, $query);
        header("location:read.php");
    } catch (Exception $error){
        echo "Gagal Menyimpan: " . $error->getMessage();
    }
    die();
?>