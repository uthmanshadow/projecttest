<?php
// Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$project = $_POST['project'];
$date = $_POST['date'];
$period_from = $_POST['periodFrom'];
$period_to = $_POST['periodTo'];
$tasks_accomplished = $_POST['tasksAccomplished'];
$pending_tasks = $_POST['pendingTasks'];
$constraints = $_POST['constraints'];
$remark = $_POST['remark'];

// Insert the data into the database
$sql = "INSERT INTO project_progress (project, date, period_from, period_to, tasks_accomplished, pending_tasks, constraints, remark)
VALUES ('$project', '$date', '$period_from', '$period_to', '$tasks_accomplished', '$pending_tasks', '$constraints', '$remark')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>