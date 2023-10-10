<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="crud";

    $conn = mysqli_connect($servername,$username,$password, $database) ;
    if (!$conn){
        die("Connectivity Failed".mysqli_connect_error());
    }
    else{
        echo "Connection was successfully<br>";
    }
    $sql="SELECT * FROM 'student'";
    $result= mysqli_query($conn, $sql);

   $num= mysqli_fetch_assoc($result) ;
   echo $num;
    echo "records found in database <br>";
?>