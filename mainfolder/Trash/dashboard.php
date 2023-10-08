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
    <form method="POST" action="">
        <input type="submit"  value="logout">
</form>

<div class="container">
    <div class="topbar">
        <div class="logo">
            <h2>brand</h2>
        </div>
    </div>
</div>
</body>
</html>