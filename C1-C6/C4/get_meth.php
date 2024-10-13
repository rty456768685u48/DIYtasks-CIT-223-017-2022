<?php
    $gr_no = $_GET['gr_no'];
    $course_name = $_GET['course_name'];

    echo "<h1>Submitted using GET Method</h1>";
    echo "<p><strong>G.R No:</strong> " . $gr_no . "</p>";
    echo "<p><strong>Course Name:</strong> " . $course_name . "</p>";
?>
