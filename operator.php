<?php
    $nama = 'Rizal Viqri Fahrezi';
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);

    echo "Gaji $nama <br>";
    echo "Gaji Sebelum Pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
?>