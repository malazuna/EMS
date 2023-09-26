<?php
session_start();
if(!isset($_SESSION["email"])){
    header("Location:http://localhost/collegeproject/.vscode/login.php");
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
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
   </script>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Jcx_DQZ5rwlwG0yvBodUH8x4nt183Cz1n-towcpuiXLHE3-pAMUeJwB0HiKMeHUp9ftfTlPXgf8z0xoQtIto2HSkfDKQ7efum6gT7DBwJURZz7X0Kr3xO5pgxAx8XaZl1mgaj04Hiupa-CxaBI6E-Rn2_Meb_EtLGaMy55Xezix8N46N-MfKCgEIx2QKEA1MTu2cx5dDS-WAt8tmZD2UydZzyRbzqn61n2NrqFhEcvrLsTtHTlHhbngR2z6TFIaAc6njGHHrJSpymUJs5el3zb5noyb6TI31FS7A9QJNrFETzkwrf9bZo6kY74STO4O8gmFxy6cskDRGD2nIxeffCP_y6nrfBhJx0IPBAXI8y1fsEpwhvFrVfDEquhD3S2imr5hKzXFHYSjkDNKSlGXNmQL5zMBHoOX_0AFr41rfu6Jh2mUaCz25Fn0lCMCVPyBskuoiD3RWBmnqfDSuP9NmZCwgIE2PMYtOBw7FelKGaK8VKuhbWRMRGtYSDs888BKy" charset="UTF-8"></script></head>
<script src="https://kit.fontawesome.com/bba3432f3f.js" crossorigin="anonymous"></script>
<body>
<div class="main">
<div class="navmenu">
    <div class="sidenav">
        <ul class="nav-links">
            <li><a href="#"><i class="fa-solid fa-house-user"></i>Dashboard</a></li>
            <li><a href="attendance.php"><i class="fa-solid fa-calendar-days"></i>Attendance</a></li>
            <li><a href="overtime.html"><i class="fa-solid fa-business-time"></i></i>Overtime</a></li>
            <li><a href="#"><i class="fa-solid fa-note-sticky"></i>Generate Report</a></li>
            <li><a href="#"><i class="fa-solid fa-screwdriver-wrench"></i>Setting</a></li>
            <form action="" method="POST">
                <input type="submit" name="logout" value="Logout">
            </form>
        </ul>
    </div>
</div>
<div class="content">
<p> Showing data of male, female, and others </p>
   <canvas id = "pieChart"> </canvas>
   <script>
      let canvas = document.getElementById("pieChart");
      new Chart(canvas, {
         type: "pie",
         data: {
            labels: ["male", "female", "others"],
            datasets: [{
               backgroundColor: ["blue", "red", "green"],
               borderWidth: 10,
               data: [455, 240, 55]
            }]
         },
      });
   </script>
</div>
</div>

</body>
</html>