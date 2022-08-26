<?php
    include '../koneksi.php';
    $query = "DELETE FROM table_calon_mhs WHERE kode_calon_mhs = '$_GET[kode_calon_mhs]'";
    try {
        mysqli_query($koneksi, $query);
        header("location:read.php");
    } catch (Exception $error){
        echo "Gagal Menghapus: " . $error->getMessage();
    }
?>