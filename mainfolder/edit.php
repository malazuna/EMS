<?php
     include ("config.php");
    $id=$_GET['updateid'];
    $sql="SELECT * FROM emp_table where sn=$id";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['Name'];
   /* $age=$row['age'];
    $email=$row['email'];*/
                if(isset($_POST['submit'])){
                    $name=$_POST['employee_name'];
                    $email =$_POST['employee_email'];
                    //$age=$_POST['age'];
                    ///$email=$_POST['email'];
                    $sql="UPDATE emp_table set Name='".$name."', email = '".$email."' where sn=$id";
                    $result=mysqli_query($db,$sql);
                    if($result){
                      /*include "read.php";*/
                      header('Location:addingEmployee.php');
                         echo "updated successfully";
                    }
                    else{
                           die(mysqli_error($db));
            }}
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management system</title>
   
    <link rel="stylesheet" href="./css/project.css ?v=<?php echo time(); ?>">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
   </script>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Jcx_DQZ5rwlwG0yvBodUH8x4nt183Cz1n-towcpuiXLHE3-pAMUeJwB0HiKMeHUp9ftfTlPXgf8z0xoQtIto2HSkfDKQ7efum6gT7DBwJURZz7X0Kr3xO5pgxAx8XaZl1mgaj04Hiupa-CxaBI6E-Rn2_Meb_EtLGaMy55Xezix8N46N-MfKCgEIx2QKEA1MTu2cx5dDS-WAt8tmZD2UydZzyRbzqn61n2NrqFhEcvrLsTtHTlHhbngR2z6TFIaAc6njGHHrJSpymUJs5el3zb5noyb6TI31FS7A9QJNrFETzkwrf9bZo6kY74STO4O8gmFxy6cskDRGD2nIxeffCP_y6nrfBhJx0IPBAXI8y1fsEpwhvFrVfDEquhD3S2imr5hKzXFHYSjkDNKSlGXNmQL5zMBHoOX_0AFr41rfu6Jh2mUaCz25Fn0lCMCVPyBskuoiD3RWBmnqfDSuP9NmZCwgIE2PMYtOBw7FelKGaK8VKuhbWRMRGtYSDs888BKy" charset="UTF-8"></script></head>
<script src="https://kit.fontawesome.com/bba3432f3f.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
        <div>
            <?php include("./Components/SideNav.php")?>
        </div>
<div class="main">
<div class="container">
<form method="POST">
    <!-- <input type="text" name="employee_name" placeholder="Employee Name" required autofocus />
    <input type="submit" value="Add Employee" name="submit"> -->
    <div class="mb-3">
      <h2>Update <?php echo $row['Name'];?></h2>
  <label for="formGroupExampleInput" class="form-label">Update Name</label>
  <input type="text" class="form-control" value="<?php  ?>" id="formGroupExampleInput" name="employee_name" placeholder="Employee Name" required autofocus>
</div>
<label for="formGroupExampleInput" class="form-label">Update Email</label>
  <input type="text" class="form-control" value="<?php  ?>" id="formGroupExampleInput" name="employee_email" placeholder="Employee Email" required autofocus>
</div>
<div class="mb-3">
  <input type="submit" class="form-control" id="formGroupExampleInput2" value="Submit" name="submit">
</div>
</form>
        </div>
</div>
</body>
</html>