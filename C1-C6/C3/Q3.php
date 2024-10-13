<?php
    // In PHP, you can make a constant case-insensitive by passing a third argument as true in the define() function. However, note that starting from PHP 8.0, the third parameter for case-insensitivity is deprecated.

    define("EMP_NAME", "ABC", true); // Case-insensitive constant
    echo emp_name;  // This will work due to case insensitivity
?>
