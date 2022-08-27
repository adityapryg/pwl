<?php
    $npm        = "201943502046";
    $nama       = "ADITYA PRAYOGA";
    $karakter   = str_split($npm);
    $jml_kolom  = array_pop($karakter);
    $jml_baris  = array_pop($karakter);
?>
<table border="1">
    <?php for($i = ($jml_baris ?: 1); $i >= 1; $i--): ?>
        <tr >
            <?php for($j = ($jml_kolom ?: 1); $j >= 1; $j--): ?>
                <td style="background-color: <?= $j % 2 ? "blue" : "yellow" ?>">NPM = <?= $npm ?>. NAMA = <?= $nama ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
