<?php
    // Fetching data from the POST request
    $student_name = $_POST['student_name'];
    $student_gr = $_POST['student_gr'];
    $student_class = $_POST['student_class'];
    $student_section = $_POST['student_section'];

    // Displaying the submitted data
    echo "<h1>Student Information</h1>";
    echo "<p><strong>Name:</strong> " . $student_name . "</p>";
    echo "<p><strong>G.R #:</strong> " . $student_gr . "</p>";
    echo "<p><strong>Class:</strong> " . $student_class . "</p>";
    echo "<p><strong>Section:</strong> " . $student_section . "</p>";
?>
