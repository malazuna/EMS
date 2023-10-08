<?php
session_start();
if(!isset($_SESSION["email"])){
    header("Location:http://localhost/collegeproject/mainfolder/login.php");
}
if(isset($_POST['logout'])){
session_destroy();
header("Location:cpindex.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management system</title>
    <link rel="stylesheet" href="../css/project.css">
    <link rel="stylesheet" href="../css/project.css ?v=<?php echo time(); ?>">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
   </script>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Jcx_DQZ5rwlwG0yvBodUH8x4nt183Cz1n-towcpuiXLHE3-pAMUeJwB0HiKMeHUp9ftfTlPXgf8z0xoQtIto2HSkfDKQ7efum6gT7DBwJURZz7X0Kr3xO5pgxAx8XaZl1mgaj04Hiupa-CxaBI6E-Rn2_Meb_EtLGaMy55Xezix8N46N-MfKCgEIx2QKEA1MTu2cx5dDS-WAt8tmZD2UydZzyRbzqn61n2NrqFhEcvrLsTtHTlHhbngR2z6TFIaAc6njGHHrJSpymUJs5el3zb5noyb6TI31FS7A9QJNrFETzkwrf9bZo6kY74STO4O8gmFxy6cskDRGD2nIxeffCP_y6nrfBhJx0IPBAXI8y1fsEpwhvFrVfDEquhD3S2imr5hKzXFHYSjkDNKSlGXNmQL5zMBHoOX_0AFr41rfu6Jh2mUaCz25Fn0lCMCVPyBskuoiD3RWBmnqfDSuP9NmZCwgIE2PMYtOBw7FelKGaK8VKuhbWRMRGtYSDs888BKy" charset="UTF-8"></script></head>
<script src="https://kit.fontawesome.com/bba3432f3f.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>

    <div class="navmenu">
        <div class="sidenav">
            <?php include("./Components/SideNav.php")?>
        </div>

<div class="main">
    <div class="container">
<form method="POST">
    <!-- <input type="text" name="employee_name" placeholder="Employee Name" required autofocus />
    <input type="submit" value="Add Employee" name="submit"> -->
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Add Employees</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="employee_name" placeholder="Employee Name" required autofocus>
</div>
<div class="mb-3">
  <input type="submit" class="form-control" id="formGroupExampleInput2" value="Add Employee" name="submit">
</div>
</form>

<?php 

    if(isset($_POST['submit']))
    {
        require_once("config.php");
        $employee_name = $_POST['employee_name'];

        $query = "INSERT INTO attendance_employee(employee_name) VALUE('$employee_name')";
        $execQuery = mysqli_query($db, $query) or die(mysqli_error($db));

        echo "Employee has been added Successfully!";
    }
    include("./Attendance/deleteemployees.php")
?>
</div>
</div>