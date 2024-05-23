<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        // Connect to the database
        require_once("db_conn.php");
        $sql = "SELECT * FROM project_details";
        if ( $result =$conn->query($sql) ) {
            $newArr = array();
            while ($db_field = mysqli_fetch_assoc($result) ) {
                $newArr[] = $db_field;
            }
            echo json_encode($newArr);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;

        }

        // Close the database connection
        $conn->close();
    }
?>