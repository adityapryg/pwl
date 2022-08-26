<?php
    $array_data = [
        "npm"   => 201943502046,
        "nama"  => "ADITYA PRAYOGA"
    ];
    
    $npm = str_split($array_data['npm']);
    $jml_kolom = array_pop($npm);
    $jml_baris = array_pop($npm);
?>

<!doctype html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Tabel NPM dan Mahasiswa</title>

    <style>
        table, th, td {
            border:1px solid black;
            font-size: small;
        }
    </style>
</head>
<body>
   <ol>
        <li>CREATE DATABASE db_uap2046;</li>
        <li>USE db_uap2046;</li>
        <li>CREATE TABLE table_calon_mhs (
                kode_calon_mhs varchar(5), 
                nama_calon_mhs varchar(30),
                alamat text,
                telp varchar(15)
            );
        </li>
        <li>CREATE TABLE table_seleksi (
                kode_seleksi varchar(5), 
                kode_calon_mhs varchar(5),
                nilai_tkda float(2),
                nilai_matematika float(2),
                nilai_wawancara float(2),
                rata_rata float(2)
            );
        </li>
   </ol>
</body>
</html>
