<?php
    $a = 33;
    $b = 55;
    $a += $b;  // $a becomes $a + $b = 33 + 55 = 88
    $c = $a;   // $c is assigned the value of $a, so $c = 88
    $c -= $b;  // $c becomes $c - $b = 88 - 55 = 33
    $c *= $a;  // $c becomes $c * $a = 33 * 88 = 2904
    $a++;      // $a is incremented by 1, so $a = 88 + 1 = 89
    echo "a=$a, b=$b, c=$c";  // Output the values of $a, $b, and $c
?>
