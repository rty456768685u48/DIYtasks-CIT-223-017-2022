<?php
    // Input marks of 4 subjects
    $subject1 = 85;
    $subject2 = 90;
    $subject3 = 78;
    $subject4 = 88;

    // Calculate total obtained marks and percentage
    $total_marks = 400;
    $obtained_marks = $subject1 + $subject2 + $subject3 + $subject4;
    $percentage = ($obtained_marks * 100) / $total_marks;

    // Display the result
    echo "Obtained Marks: " . $obtained_marks . "<br>";
    echo "Percentage: " . $percentage . "%";
?>
