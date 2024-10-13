<?php
    // Fetching data from the URL query parameters
    $roll_no = $_GET['roll_no'];
    $name = $_GET['name'];

    echo "<h1>Received Data</h1>";
    echo "<p><strong>Roll No:</strong> " . $roll_no . "</p>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
?>
