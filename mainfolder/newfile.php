<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("config.php") ?>
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
</body>
</html>