<?php
    $math = 80;      // Marks in Math
    $english = 70;   // Marks in English
    $physics = 90;   // Marks in Physics

    $total_marks = 300;  // Total marks (3 subjects * 100)
    $obtained_marks = $math + $english + $physics;
    $percentage = ($obtained_marks / $total_marks) * 100;

    // Determine Grade
    if ($percentage >= 90) {
        $grade = 'A+';
    } elseif ($percentage >= 80) {
        $grade = 'A';
    } elseif ($percentage >= 70) {
        $grade = 'B';
    } elseif ($percentage >= 60) {
        $grade = 'C';
    } else {
        $grade = 'Fail';
    }

    // Display Results
    echo "Obtained Marks: $obtained_marks / $total_marks<br>";
    echo "Percentage: $percentage%<br>";
    echo "Grade: $grade<br>";
?>
