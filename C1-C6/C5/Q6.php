<?php
    $a = 8;
    $b = ++$a + 5;  // $a is incremented before the operation, so $b = 9 + 5 = 14
    $c = $b-- + 10; // $b is used first (14 + 10 = 24), then decremented, so $b = 13
    echo "a= $a, b= $b, c= $c";
?>
