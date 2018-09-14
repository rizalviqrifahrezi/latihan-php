<?php
    $uang = 50000;
    $makan = 25000;
    $minum = 10000;
    $total = $makan + $minum;
    $sisa = $uang - $makan - $minum;

    echo "Uang Rizal : $uang <br>";
    echo "Makan : $makan <br>";
    echo "Minum : $minum <br>";
    echo "Rizal menghabiskan Uang Sebesar: $total <br>";
    echo "Sisa Uang Rizal : $sisa";
?>