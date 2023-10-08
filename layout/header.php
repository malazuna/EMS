<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location:login.php");
}
include("include/project.css");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="header.php">
        <input type="submit"  value="logout">
</form>
<?
if(isset($_POST['logout'])){


    session_destroy();
    header("Location:cpindex.php");
}
?>
</body>
</html>