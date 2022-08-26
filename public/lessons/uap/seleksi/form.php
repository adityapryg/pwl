<?php
    include '../koneksi.php';
    $query = "SELECT kode_calon_mhs, nama_calon_mhs
                FROM table_calon_mhs;";
    $hasil = mysqli_query($koneksi, $query);       
?>
<h2>Pilih Calon Mahasiswa</h2>
<form method="GET" action="save.php">
    <table>
        <tr>
            <td>Kode Seleksi</td>
            <td>= <input type="text" maxlength="5" name="kode_seleksi"></td>
        </tr>
        <tr>
            <td>Nama Calon mahasiswa</td>
            <td>= 
                <select name="kode_calon_mhs">
                    <?php 
                        while($data = mysqli_fetch_array($hasil)) { 
                            echo "<option value=\"$data[kode_calon_mhs]\">$data[nama_calon_mhs]</option>"; 
                        } 
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nilai Test Kemampuan dasar</td>
            <td>= <input type="number" step="0.01" name="nilai_tkda"></td>
        </tr>
        <tr>
            <td>Nilai Matematika</td>
            <td>= <input type="number" step="0.01" name="nilai_matematika"></td>
        </tr>
        <tr>
            <td>Nilai Wawancara</td>
            <td>= <input type="number" step="0.01" name="nilai_wawancara"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td style="padding-left: 15px;"><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>