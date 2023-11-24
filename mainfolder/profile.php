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
</head>
<body>
<?php
require ("config.php");
include ("./Components/empSidenav.php");
?>
<div class="main">
    <?php

    echo $_SESSION["ROLE"];
    ?>
    <p>Name: Lajuna
    Sem: 5th sem
</div>
</p>
</body>

</html>