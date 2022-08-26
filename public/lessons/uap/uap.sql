CREATE DATABASE db_uap2046;
USE db_uap2046;
CREATE TABLE table_calon_mhs ( 
    kode_calon_mhs varchar(12), 
    nama_calon_mhs varchar(30), 
    alamat text, 
    telp varchar(15) 
);
CREATE TABLE table_seleksi ( 
    kode_seleksi varchar(5), 
    kode_calon_mhs varchar(12), 
    nilai_tkda float(2), 
    nilai_matematika float(2), 
    nilai_wawancara float(2), 
    rata_rata float(2) 
);