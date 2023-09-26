<?php
session_start();
if(isset($_SESSION['email']))
{
  header("location:http://localhost/collegeproject/mainfolder/admin.php");
}

if(isset($_POST["login"])){
    $email=$_POST['email'];
    $password=$_POST['psw'];
    //database connection
    $conn=new mysqli('localhost','root','','EMS');
    if($conn->connect_error)
    {
        die("there is connection error");
    }
    $sql="SELECT * FROM emp_table WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
      
        $_SESSION['email']=$email;
        header('Location:admin.php');
        }
        else{
                echo "username or password is incorrect";
        }
}  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css?v=<?php echo time(); ?>">
</head>


<body>
<div class="container"> 
<div class="imgcontainer">
        <img src="../img/logo.jpg" alt="logo" class="avatar">
    </div>
<form class="form-inline"  method="post" action="login.php">
  <div class="form-group mx-sm-3 mb-2"  >
    <label for="staticEmail2" class="sr-only">Email</label>
    <input type="email"  class="form-control " id="staticEmail2" name="email" placeholder="email@example.com">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" name="psw" placeholder="Password">
  </div>
  <button type="submit" name="login" class="btn mb-2">Confirm identity</button>
 
</form>
</div>

</body>
</html>