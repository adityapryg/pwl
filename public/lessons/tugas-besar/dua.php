<?php
    $array_data = [
        "npm" => 201943502046,
        "nama" => "ADITYA PRAYOGA"
    ];

    $jml_kolom = 6;
    $jml_baris = 5;
?>

<!doctype html>
<html lang="en">
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
    <table>
        <?php for($i = $jml_baris; $i >= 1; $i--): ?>
            <tr >
                <?php for($j = $jml_kolom; $j >= 1; $j--): ?>
                    <td style="background-color: <?= $j % 2 ? "blue" : "yellow" ?>">NPM: <?= $array_data["npm"] ?> Nama: <?= $array_data["nama"] ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
