<?php
    require_once('db_conn.php');

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
    $sql = "INSERT INTO project_progress (projName, date, period_from, period_to, tasks_accomplished, pending_tasks, constraints, remark)
    VALUES ('$project', '$date', '$period_from', '$period_to', '$tasks_accomplished', '$pending_tasks', '$constraints', '$remark')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $newUrl = 'http://localhost/npapts/project_progress.html';
        return header('Location: '.$newUrl);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
?>