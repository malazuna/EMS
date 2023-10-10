<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="ems";

    $db = mysqli_connect("localhost", "root", "", "ems") 
    if(!$db){
        die("Connectivity Failed".mysqli_connect_error());
    }
    else{
        echo "Connection was successfully<br>";
    }
    $sql="SELECT * FROM 'attendance_employee'";
    $result=mysqli_query($db,$sql);

    $num=mysqli_num_rows($result);
    echo $num;
    echo "records found in database <br>"
?>