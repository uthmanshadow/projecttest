<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $ptbReference = $_POST['ptbReference'];
    $ptbdate = $_POST['ptbdate'];
    $projName = $_POST['projName'];
    $department = $_POST['department'];
    $projAwardDate = $_POST['projAwardDate'];
    $awardExecutionPeriod = $_POST['awardExecutionPeriod'];
    $projectSupervisor = $_POST['projectSupervisor'];

    $projEndDate = $_POST['projEndDate'];

    // Connect to the database
    $servername = "localhost";
    $username = "your_username"; // Replace with your MySQL username
    $password = "your_password"; // Replace with your MySQL password
    $dbname = "your_database"; // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO project_details (ptbReference, ptbdate, projName, department, projAwardDate, awardExecutionPeriod, projectSupervisor, projEndDate) 
            VALUES ('$ptbReference', '$ptbdate', '$projName', '$department', '$projAwardDate', '$awardExecutionPeriod', '$projectSupervisor', '$projEndDate')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }

    // Close the database connection
    $conn->close();
}