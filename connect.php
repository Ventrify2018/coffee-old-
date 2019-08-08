<?php
    $host = 'database-1.cm0fzp035koh.us-west-2.rds.amazonaws.com';
    $user = 'admin';
    $pass = '12345678';
    $db_name = 'coffee';

    // Create connection
    $conn = new mysqli($host, $user, $pass,$db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected aws autodeployment successfully";
?>
