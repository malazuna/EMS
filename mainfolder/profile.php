<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" href="./css/project.css">
    <link rel= "stylesheet" href="./css/profile.css">
</head>
<body>
<?php
require ("config.php");
include ("./Components/empSidenav.php");


$fetchingProfile = mysqli_query($db, "SELECT * FROM emp_table where sn='".$_SESSION["ID"]."'") OR die(mysqli_error($db));
$fetchingAttendance = mysqli_query($db, "SELECT * FROM attendance where employee_id='".$_SESSION["ID"]."'") OR die(mysqli_error($db));
$no_of_attendance = mysqli_num_rows($fetchingAttendance);
?>
<div class="main">
<div class="container">
    <div class="main-body">
    <?php 
    while($employees = mysqli_fetch_assoc($fetchingProfile))
    {
        $employeeName = $employees['Name'];
        $employeeID = $employees['sn']; 
        $employeeEmail = $employees['email'];
        $employeeRole = $employees["role"]
    ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
             
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $employeeName; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $employeeEmail; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php
                            echo "Employee";
                        ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Total Number of Attendance</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
                        echo $no_of_attendance;
                      ?>
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div> -->
                </div>
              </div>

              



            </div>
          </div>
   <?php 
    }
   ?>     
        </div>
    </div>
</div>
</body>

</html>