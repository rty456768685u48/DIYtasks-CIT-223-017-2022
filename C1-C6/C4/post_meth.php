<?php
    $gr_no = $_POST['gr_no'];
    $course_name = $_POST['course_name'];

    echo "<h1>Submitted using POST Method</h1>";
    echo "<p><strong>G.R No:</strong> " . $gr_no . "</p>";
    echo "<p><strong>Course Name:</strong> " . $course_name . "</p>";
?>
