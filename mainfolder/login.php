<?php
require ('config.php');
$error='';
session_start();

if(isset($_POST["login"])){
    $email=$_POST['email'];
    $password=$_POST['psw'];
	
    
    $sql="SELECT * FROM emp_table WHERE email='$email' AND password='$password'";
    $result=mysqli_query($db, $sql);
	$count=mysqli_num_rows($result);
    if($count>0){
        $row=mysqli_fetch_assoc($result);
		$role=$row['role'];
		$_SESSION["ID"] = $row['sn'];
		$_SESSION['ROLE']=$role;
		echo $_SESSION["ROLE"];
		$_SESSION["email"]=$email;
		if ($row['role']== 1){
			header('Location:admin.php');
		}
		elseif($row['role']== 2){
			header('Location:employeedash.php');
		}
	}
		else{
			$error= 'username or password is incorrect';
	}
	
}
        

/*if(isset($_POST["Sign_up"])){
  $semail=$_POST['semail'];
  $spassword=$_POST['spassword'];
  //database connection
  require_once('config.php');
  $result=mysqli_query($db, "INSERT INTO emp_table (email,password) VALUES('" . $semail . "','" . $spassword . "')") or die(mysqli_error($db));
  if($execQuery){
	$_SESSION['ROLE']=$row->role;
	if($row['role']== 2){
		header('Location:employeedash.php');
	}
    $_SESSION['email']=$semail;
    header('Location:admin.php');
    echo "Sucessful";
  }
  else{
    echo "Registration failed";
  }
} */
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css?v=<?php echo time(); ?>">
    <script href="./js/script.js"></script>
</head>


<body>
<!-- <div class="container"> 
<div class="imgcontainer">
        <img src="./img/logo.jpg" alt="logo" class="avatar">
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
</div> -->

<form method="post" action="login.php">
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="email" class="input" name="email" placeholder="email@example.com">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="psw" placeholder="Password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" name="login">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<!-- <div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="user">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="spassword">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="scpassword">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email" class="input" name="semail">
				</div>
				<?php echo $error?>
				<div class="group">
					<input type="submit" class="button" value="Sign Up" name="Sign_up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>  -->
		</div>
	</div>
</div>
</form>

</body>
</html>