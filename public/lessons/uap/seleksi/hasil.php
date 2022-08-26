<?php
    include '../koneksi.php';
    $query = "SELECT * FROM table_seleksi 
                WHERE kode_seleksi = '$_GET[kode_seleksi]' 
                LIMIT 1";
    $hasil_seleksi = mysqli_fetch_array(
        mysqli_query($koneksi, $query)
    );

?>
<h2>Data Hasil Seleksi</h2>
<table>
    <tr>
        <td>Kode Seleksi</td>
        <td>: <?= $hasil_seleksi['kode_seleksi'] ?></td>
    </tr>
    <tr>
        <td>Kode Mahasiswa</td>
        <td>: <?= $hasil_seleksi['kode_calon_mhs'] ?></td>
    </tr>
    <tr>
        <td>Nilai TKDA</td>
        <td>: <?= $hasil_seleksi['nilai_tkda'] ?></td>
    </tr>
    <tr>
        <td>Nilai matematika</td>
        <td>: <?= $hasil_seleksi['nilai_matematika'] ?></td>
    </tr>
    <tr>
        <td>Nilai wawancara</td>
        <td>: <?= $hasil_seleksi['nilai_wawancara'] ?></td>
    </tr>
    <tr>
        <td>Nilai rata-rata</td>
        <td>: <?= $hasil_seleksi['rata_rata'] ?></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>: <?= $hasil_seleksi['rata_rata'] > 60 ? "Lulus" : "gagal" ?></td>
    </tr>
</table>