<h2>Formulir Calon Mahasiswa</h2>
<form method="GET" action="save.php">
    <table>
        <tr>
            <td>Kode</td>
            <td>= <input type="text" maxlength="5" name="kode_calon_mhs"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>= <input type="text" maxlength="30" name="nama_calon_mhs"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>= <textarea name="alamat" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>Telp</td>
            <td>= <input type="text" maxlength="15" name="telp"></td>
        </tr>
    </table>
    <a href="read.php"><button type="button">Kembali</button></a>
    <button type="reset">Reset</button>
    <button type="submit">Simpan</button>
</form>