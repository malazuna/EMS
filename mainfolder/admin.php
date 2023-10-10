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

<

    
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
                    <div class="chart" id="doughnut-chart">
                        <h2>Employee</h2>
                        <canvas id="doughnut"></canvas>
                    </div>
                </div>
            </div>

            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
            <script src="chart1.js"></script>
            <script src="chart2.js"></script>

</body>
</html>