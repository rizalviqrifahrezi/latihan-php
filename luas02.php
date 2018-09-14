<?php
    function luassegitiga($alas,$tinggi){
        return ($alas*$tinggi)/2;
    }
$alas=4;
$tinggi=5;
$luas=($alas*$tinggi)/2;
echo "Alas: $alas <br> Tinggi: $tinggi <br> Luas Segitiga :";
echo luassegitiga ($alas, $tinggi);

?>