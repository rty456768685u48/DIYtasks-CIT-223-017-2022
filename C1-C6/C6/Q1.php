<?php
    $num1 = 10;  // First number
    $num2 = 5;   // Second number
    $operation = "+";  // Define operation: "+", "-", "*", "/"

    switch($operation) {
        case "+":
            $result = $num1 + $num2;
            echo "Result: $num1 + $num2 = $result";
            break;
        case "-":
            $result = $num1 - $num2;
            echo "Result: $num1 - $num2 = $result";
            break;
        case "*":
            $result = $num1 * $num2;
            echo "Result: $num1 * $num2 = $result";
            break;
        case "/":
            if($num2 != 0) {
                $result = $num1 / $num2;
                echo "Result: $num1 / $num2 = $result";
            } else {
                echo "Cannot divide by zero";
            }
            break;
        default:
            echo "Invalid operation";
            break;
    }
?>
