<?php
    $operator = " Operator Den Boy <br>";
    $a = 5;
    $b = 4;

    echo "$operator";
    echo "$a == $b : " . ($a == $b);
    echo "<br>$a != $b : ". ($a != $b);
    echo "<br>$a > $b : ". ($a > $b);
    echo "<br>$a < $b : ". ($a < $b);
    echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
    echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b));
?>