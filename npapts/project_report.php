<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #eee;">

  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top navbar-light">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="project_details.html" onclick="showLoading('project_details.html')">Project Details</a></li>
                        <li><a class="dropdown-item" href="project_progress.html" onclick="showLoading('project_progress.html')">Progress</a></li>
                        <li><a class="dropdown-item" href="project_report.php" onclick="showLoading('project_report.php')">Report</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Search Form -->
            <form class="d-flex me-3">
                <input class="form-control me-2" type="search" placeholder="Search project" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


<div class="container">
  <h1 class="mt-5">Project Report</h1>
  <table class="table table-bordered mt-4">
    <thead>
      <tr>
        <th scope="col">S/N</th>
        <th scope="col">Project Name</th>
        <th scope="col">Department</th>
        <th scope="col">Supervisor</th>
        <th scope="col">Award Start Date</th>
        <th scope="col">Project End Date</th>
        <th scope="col">Task to Date</th>
        <th scope="col">Task Remaining</th>
        <th scope="col">Constraints</th>
        <th scope="col">Remark</th>
      </tr>
    </thead>
    <tbody>


    <?php
    require_once('src/db_conn.php');

    // SQL query to fetch data
    $conn -> query("SET @row_num=0;");
    
    $sql = "SELECT (@row_num:=@row_num+1) AS sn, d.projName, d.department, d.projectSupervisor , d.projAwardDate, d.projEndDate, p.tasks_accomplished, p.pending_tasks, p.constraints, p.remark FROM project_progress p, project_details d WHERE d.projName=p.projName;";
   
    if( $result=$conn->query($sql)) {
        // Output data of each row
        while($row =mysqli_fetch_assoc($result)) {
          echo "<tr>";
            echo "<td>".$row['sn']."</td>";
            echo "<td>".$row["projName"]."</td>";
            echo "<td>".$row["department"]."</td>";
            echo "<td>".$row["projectSupervisor"]."</td>";
            
            echo "<td>".$row["projAwardDate"]."</td>";
            echo "<td>".$row["projEndDate"]."</td>";
            echo "<td>".$row["tasks_accomplished"]."</td>";
            echo "<td>".$row["pending_tasks"]."</td>";
            echo "<td>".$row["constraints"]."</td>";
            echo "<td>".$row["remark"]."</td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
    </tbody>
  </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
