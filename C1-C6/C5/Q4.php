<?php
    $A = 34;
    $B = 55;

    // a) $A == 34 && $B == 55
    echo "a) " . (($A == 34 && $B == 55) ? "True" : "False") . "<br>";

    // b) $A >= 30 || $B <= 50
    echo "b) " . (($A >= 30 || $B <= 50) ? "True" : "False") . "<br>";

    // c) $B == 55 || $A == 35
    echo "c) " . (($B == 55 || $A == 35) ? "True" : "False") . "<br>";

    // d) $A != 34
    echo "d) " . (($A != 34) ? "True" : "False") . "<br>";

    // e) $A >= 30 && $A < 35
    echo "e) " . (($A >= 30 && $A < 35) ? "True" : "False") . "<br>";

    // f) $B > 50 || $B < 56
    echo "f) " . (($B > 50 || $B < 56) ? "True" : "False") . "<br>";
?>
