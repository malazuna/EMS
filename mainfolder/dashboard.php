<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location:login.php");
}
if(isset($_POST['logout'])){
    session_destroy();
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
   </script>
</head>
<body>
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
    <form method="POST" action="">
        <input type="submit"  value="logout">
</form>
</body>
</html>