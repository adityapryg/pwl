<?php

// buat variabel untuk menampung total harga barang (harga barang x kebutuhan)
$tepung_terigu = 7500 * 2.5;
$gula = 9000 * 1.5;
$margaren = 5000 * 2;
$telur = 20000 * 0.5;
$minyak_goreng = 11000 * 2;

// totalkan semua harga barang untuk menemukan total modal yang dikeluarkan dan simpan ke dalam variabel
$modal_yang_dikeluarkan = $tepung_terigu + $gula + $margaren + $telur + $minyak_goreng;

// buat variabel untuk menampung harga donat yang akan dijual
$harga_donat = 2000;

// buat variabel untuk menampung total donat yang terjual
$total_donat_terjual = 50;


/*
 * cara mencari keuntungan yang didapat bu nina :
 * kalikan harga donat dengan total donat terjual setelah itu kurangi dengan modal yang dikeluarkan
*/

$keuntungan_bu_nina = $harga_donat * $total_donat_terjual - $modal_yang_dikeluarkan;
$result = "Jadi total keuntungan Bu Nina dalam berjualan donat adalah Rp" . $keuntungan_bu_nina;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Besar 1 - Menghitung Keuntungan</title>
    <style>
        body {
            text-align: center;
            padding: 20px;
        }

        @media (min-width: 768px) {
            body {
                padding-top: 0;
            }
        }

        h1 {
            font-size: 50px;
            margin-bottom: 0;
        }

        body {
            font: 20px Helvetica, sans-serif;
            color: #333;
        }

        article {
            display: block;
            text-align: left;
            max-width: 650px;
            margin: 0 auto;
        }

        a {
            color: #dc8100;
            text-decoration: none;
        }

        a:hover {
            color: #333;
            text-decoration: none;
        }

        /*List = style grid*/
        .list {
            margin: 0;
            padding: 0;
            text-align: left;
            display: flex;
        }

        .list .item-list {
            width: 250px;
            min-width: 31%;
            margin: 2% .35%;
            display: inline-flex;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
        }

        .list .item-list:hover {
            box-shadow: 0 5px 10px rgba(0, 0, 0, .15);
        }

        .list .box {
            width: 100%;
            padding: 0 6%;
            background: #fff;
            min-height: 100px;
            max-height: 220px;
            box-sizing: border-box;
        }

        .text-primary {
            color: #333333 !important;
            text-decoration: none;
            background-color: transparent;
        }

        /* CSS Simple Pre Code */
        pre {
            background: #333;
            white-space: pre;
            word-wrap: break-word;
            overflow: auto;
        }

        pre.code {
            border-radius: 4px;
            border: 1px solid #292929;
            position: relative;
        }

        pre.code label {
            font-family: sans-serif;
            font-weight: bold;
            font-size: 13px;
            color: #ddd;
            position: absolute;
            top: 15px;
            text-align: center;
            width: 60px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            pointer-events: none;
        }

        pre.code code {
            font-family: "Inconsolata","Monaco","Consolas","Andale Mono","Bitstream Vera Sans Mono","Courier New",Courier,monospace;
            display: block;
            margin: 0 0 0 60px;
            border-left: 1px solid #555;
            overflow-x: auto;
            font-size: 13px;
            line-height: 19px;
            color: #ddd;
        }

        pre::after {
            content: "double click to selection";
            padding: 0;
            width: auto;
            height: auto;
            position: absolute;
            right: 18px;
            top: 14px;
            font-size: 12px;
            color: #ddd;
            line-height: 20px;
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            transition: all 0.3s ease;
        }

        pre:hover::after {
            opacity: 0;
            visibility: visible;
        }

        pre.code-css code {
            color: #91a7ff;
        }

        pre.code-html code {
            color: #aed581;
        }

        pre.code-javascript code {
            color: #ffa726;
        }

        pre.code-jquery code {
            color: #4dd0e1;
        }
    </style>
</head>
<body>
    <article>
        <p>Buatlah program PHP untuk menampilkan table menggunakan pengulangan dengan ketentuan:</p>
        <ul>
            <li>Tabel terdiri dari 5 baris dan 6 kolom</li>
            <li>Kolom Ganjil  berwarna Kuning dan Kolom Genap berwarna Biru</li>
            <li>NPM dan Nama  diisi dengan data  masing-masing mahasiswa</li>
        </ul>
        <hr>
        <div id="code" data-tab-content>
        <pre class='code code-html'><label>HTML</label>
            <code>
&lt;?php
    $array_data = [
        "npm" =&gt; 201943502046,
        "nama" =&gt; "ADITYA PRAYOGA"
    ];

    $jml_kolom = 6;
    $jml_baris = 5;
?&gt;

&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
    &lt;title&gt;Membuat Tabel NPM dan Mahasiswa&lt;/title&gt;

    &lt;style&gt;&gt;
        table, th, td {
            border:1px solid black;
            font-size: small;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;table&gt;
        &lt;?php for($i = $jml_baris; $i &gt;= 1; $i--): ?&gt;
            &lt;tr &gt;
                &lt;?php for($j = $jml_kolom; $j &gt;= 1; $j--): ?&gt;
                    &lt;td style="background-color: &lt;?= $j % 2 ? "blue" : "yellow" ?&gt;"&gt;NPM: &lt;?= $array_data["npm"] ?&gt; Nama: &lt;?= $array_data["nama"] ?&gt;&lt;/td&gt;
                &lt;?php endfor; ?&gt;
            &lt;/tr&gt;
        &lt;?php endfor; ?&gt;
    &lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;
            </code>
        </pre>
        </div>
        <h3>Result:</h3>
    </article>
    <?php include('dua.php'); ?>
</body>
</html>
