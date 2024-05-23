<?php
    $servername = "localhost";
    $username = "admin"; // Replace with your MySQL username
    $password = "12345"; // Replace with your MySQL password
    $dbname = "npapts"; // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>