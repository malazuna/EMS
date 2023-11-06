<?php
session_start();
if(!isset($_SESSION["email"])){
    header("Location:http://localhost/collegeproject/mainfolder/login.php");
}
if(isset($_POST['logout'])){
session_destroy();
header("Location:index.php");
}
?>
<?php include("config.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management system</title>
    <link rel="stylesheet" href="./css/project.css ?v=<?php echo time(); ?>">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
   </script>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Jcx_DQZ5rwlwG0yvBodUH8x4nt183Cz1n-towcpuiXLHE3-pAMUeJwB0HiKMeHUp9ftfTlPXgf8z0xoQtIto2HSkfDKQ7efum6gT7DBwJURZz7X0Kr3xO5pgxAx8XaZl1mgaj04Hiupa-CxaBI6E-Rn2_Meb_EtLGaMy55Xezix8N46N-MfKCgEIx2QKEA1MTu2cx5dDS-WAt8tmZD2UydZzyRbzqn61n2NrqFhEcvrLsTtHTlHhbngR2z6TFIaAc6njGHHrJSpymUJs5el3zb5noyb6TI31FS7A9QJNrFETzkwrf9bZo6kY74STO4O8gmFxy6cskDRGD2nIxeffCP_y6nrfBhJx0IPBAXI8y1fsEpwhvFrVfDEquhD3S2imr5hKzXFHYSjkDNKSlGXNmQL5zMBHoOX_0AFr41rfu6Jh2mUaCz25Fn0lCMCVPyBskuoiD3RWBmnqfDSuP9NmZCwgIE2PMYtOBw7FelKGaK8VKuhbWRMRGtYSDs888BKy" charset="UTF-8"></script></head>
<script src="https://kit.fontawesome.com/bba3432f3f.js" crossorigin="anonymous"></script>
<body>

    
        <div>
            <?php include("./Components/SideNav.php")?>
        </div>
        
        
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">15
                        </div>
                        <div class="card-name">Admin Team</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon-box">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="number">19</div>
                        <div class="card-name">Technical Team</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon-box">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                    </div>
                </div>
            </div>

                <div class="charts">
                    <div class="chart">
                        <h2>Earning (part 12 months) </h2>
                        <canvas id="lineChart"></canvas>
</div>
                    <div class="chart" >
    
                        <?php 
                        $sql= "SELECT department, no_of_people FROM  pie_data order by no_of_people desc";
                        $result = mysqli_query ($db, $sql);
                        while ($row= mysqli_fetch_assoc($result))
                        {
                            $dataPoints[]=array ("label"=>$row ['department'], "y"=>$row['no_of_people']);
                        }
                        ?>

                        <script>
                            window.onload = function()
                                {
                                    var chart= new CanvasJS.Chart("chartContainer",{
                                        animationEnabled:true,
                                        title:{
                                            text : "Employee"
                                        },
                                        data: [{
                                            type:"pie", 
                                            startAngle: 45,
			                                showInLegend: "true",
			                                legendText: "{label}",
			                                indexLabel: "{label} ({y})",
			                                yValueFormatString:"#,##0.#"%"",
                                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK);?>
                                        }]
                                    });
                                    chart.render();
                              }
                              <div id="chartContainer" style="height: 170px; width: 100%"></div>
                              </script>
                              <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
                            
                    </div>
                </div>
            </div>

            </div>
            
</body>
</html> 