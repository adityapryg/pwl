<?php
    include '../koneksi.php';
    if (isset($_GET['kode_calon_mhs'])){
        //get data mahasiswa untuk edit
        $query = "SELECT * FROM table_calon_mhs 
                    WHERE kode_calon_mhs = '$_GET[kode_calon_mhs]'
                    LIMIT 1";
        $mahasiswa = mysqli_fetch_array(
            mysqli_query($koneksi, $query)
        );
    }
?>
<h2>Formulir Calon Mahasiswa</h2>
<form method="GET" action="save.php">
<?= isset($mahasiswa) ? '<input type="hidden" name="aksi" value="edit">' : ''?>
    <table>
        <tr>
            <td>Kode</td>
            <td>= <input type="text" maxlength="12" name="kode_calon_mhs" value="<?= $mahasiswa['kode_calon_mhs'] ??= '' ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>= <input type="text" maxlength="30" name="nama_calon_mhs" value="<?= $mahasiswa['nama_calon_mhs'] ??= '' ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>= <textarea name="alamat" rows="3"><?= $mahasiswa['alamat'] ??= '' ?></textarea></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td>= <input type="text" maxlength="15" name="telp" value="<?= $mahasiswa['telp'] ??= '' ?>"></td>
        </tr>
    </table>
    <a href="read.php"><button type="button">Kembali</button></a>
    <button type="reset">Reset</button>
    <button type="submit">Simpan</button>
</form>