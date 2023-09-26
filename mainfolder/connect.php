<?php
$email=$_POST['email'];
$password=$_POST['psw'];
//database connection
$conn=new mysqli('localhost','root','','EMS');
if($conn->connect_error){
    die("there is connection error".$conn->connect_error);
}
else{
    $sql="insert into emp_table(email,password) values ('$email','$password')";
    $query=mysqli_query($conn,$sql);
    echo 'data inserted successfully';
    $conn->close();
}

if(isset($_POST["submit"])){  
  
    if(!empty($_POST['email']) && !empty($_POST['password'])) {  
        $email=$_POST['email'];  
        $password=$_POST['psw'];  
      
        $con=mysql_connect('localhost','root','') or die(mysql_error());  
        mysql_select_db('user_registration') or die("cannot select DB");  
      
        $query=mysql_query("SELECT * FROM login WHERE email='".$email."' AND password='".$password."'");  
        $numrows=mysql_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysql_fetch_assoc($query))  
        {  
        $dbemail=$row['email'];  
        $dbpassword=$row['psw'];  
        }  
      
        if($email == $dbemail && $password == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$email;  
      
        /* Redirect browser */  
        header("Location: project.php");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }  
    ?>  

