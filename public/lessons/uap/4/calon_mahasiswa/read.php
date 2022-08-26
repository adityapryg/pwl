<?php
    include '../koneksi.php';
    $query = "SELECT * FROM table_calon_mhs;";
    $mahasiswa = mysqli_query($koneksi, $query);
?>

<h2>Data Calon Mahasiswa</h2>
<a href="form.php"><button>Tambah</button></a><br/><br/>
<table border="1">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Aksi</th>
    </tr>
    <!-- TODO: Loopin query -->
    <?php
    while ($data = mysqli_fetch_array($mahasiswa))
        echo "
        <tr>
            <td>$data[kode_calon_mhs]</td>
            <td>$data[nama_calon_mhs]</td>
            <td>$data[alamat]</td>
            <td>$data[telp]</td>
            <td>
                <a href=\"form.php?kode_calon_mhs=$data[kode_calon_mhs]\"><button>Edit</button></a>
                <a href=\"delete.php?kode_calon_mhs=$data[kode_calon_mhs]\"><button>Hapus</button></a>
            </td>
        </tr>";
    ?>
</table>
