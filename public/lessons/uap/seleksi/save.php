<?php
    include '../koneksi.php';

    $_GET['rata_rata'] = ($_GET['nilai_tkda'] + $_GET['nilai_matematika'] + $_GET['nilai_wawancara']) / 3;

    $inputan = implode(',', array_map(function($input) {
        return "'$input'";
    }, $_GET));

    $query = "INSERT INTO table_seleksi (
        kode_seleksi, kode_calon_mhs, nilai_tkda, nilai_matematika, nilai_wawancara, rata_rata)
        values ($inputan)";
    try {
        $simpan = mysqli_query($koneksi, $query);
        header("location:hasil.php?kode_seleksi=$_GET[kode_seleksi]");
    } catch (Exception $error){
        echo "Gagal Menyimpan: " . $error->getMessage();
    }
    die();
?>