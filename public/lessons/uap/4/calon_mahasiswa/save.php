<?php
    include '../koneksi.php';

    $inputan = implode(',', array_map(function($input) {
        return "'$input'";
    }, $_GET));

    if (isset($_GET['aksi']) && $_GET['aksi'] == 'edit'){
        //aksi edit
        $query = "UPDATE table_calon_mhs SET 
                        nama_calon_mhs = '$_GET[nama_calon_mhs]',
                        alamat = '$_GET[alamat]',
                        telp = '$_GET[telp]' 
                    WHERE kode_calon_mhs = '$_GET[kode_calon_mhs]'";
    } else {
        //aksi tambah
        $query = "INSERT INTO table_calon_mhs (
            kode_calon_mhs, nama_calon_mhs, alamat, telp)
            values ($inputan)";
    }
    

    try {
        $simpan = mysqli_query($koneksi, $query);
        header("location:read.php");
    } catch (Exception $error){
        echo "Gagal Menyimpan: " . $error->getMessage();
    }
    die();
?>