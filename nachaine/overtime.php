<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management system</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Jcx_DQZ5rwlwG0yvBodUH8x4nt183Cz1n-towcpuiXLHE3-pAMUeJwB0HiKMeHUp9ftfTlPXgf8z0xoQtIto2HSkfDKQ7efum6gT7DBwJURZz7X0Kr3xO5pgxAx8XaZl1mgaj04Hiupa-CxaBI6E-Rn2_Meb_EtLGaMy55Xezix8N46N-MfKCgEIx2QKEA1MTu2cx5dDS-WAt8tmZD2UydZzyRbzqn61n2NrqFhEcvrLsTtHTlHhbngR2z6TFIaAc6njGHHrJSpymUJs5el3zb5noyb6TI31FS7A9QJNrFETzkwrf9bZo6kY74STO4O8gmFxy6cskDRGD2nIxeffCP_y6nrfBhJx0IPBAXI8y1fsEpwhvFrVfDEquhD3S2imr5hKzXFHYSjkDNKSlGXNmQL5zMBHoOX_0AFr41rfu6Jh2mUaCz25Fn0lCMCVPyBskuoiD3RWBmnqfDSuP9NmZCwgIE2PMYtOBw7FelKGaK8VKuhbWRMRGtYSDs888BKy" charset="UTF-8"></script></head>
<link rel="stylesheet" href="project.css">
<link rel="stylesheet" href="overtime.css">
<style>
    .p {
        margin-left: 50px;
    }
</style>
<script src="https://kit.fontawesome.com/bba3432f3f.js" crossorigin="anonymous"></script>
<body>

    <?php
	
    $count = 1; 
    $working_hours=10;
    $over_time;
     $over_time_pay;

    while($count<=10)
    {
        echo "Enter the working hours of employee", $count;
        
        if($working_hours >= 40)
        {
            $over_time =$working_hours - 40;
            $over_time_pay = $over_time * 12.00;
            echo "Employee overtime pay is", $count, $over_time_pay;
        }
        else
            echo("You have to work for more than 40 hours to get over time pay");

        $count++;
    }
?>
    <!--<div class="navmenu">
        <div class="sidenav">
        <ul class="nav-links">
           <li><a href="#dashboard"><i class="fa-solid fa-house-user"></i>Dashboard</a></li>
           <li><a href="#attendance"><i class="fa-solid fa-calendar-days"></i>Attendance</a></li>
           <li><a href="#overtime"><i class="fa-solid fa-business-time"></i></i>Overtime</a></li>
           <li><a href="#generatereport"><i class="fa-solid fa-note-sticky"></i>Generate Report</a></li>
           <li><a href="#setting"><i class="fa-solid fa-screwdriver-wrench"></i>Setting</a></li>
       </ul>
       </div>
       </div>
       <div class="content">
        <section id="dashboard">
            <h2>gwach ladki</h2>
        </section>
        <section id="attendance">
            <h2>gwach ladki</h2>
        </section>
        <section id="overtime ">
            <h2>gwach ladki</h2>
        </section>
        <section id="generatereport">
            <h2>gwach ladki</h2>
        </section>
        
        <section id="setting">
            <h2>gwach ladki</h2>
        </section>
       </div>-->
       <p> hello </p>
</body>
</html>