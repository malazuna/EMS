<?php
     include ("config.php");
    $id=$_GET['updateid'];
    $sql="SELECT * FROM attendance_employee where id=$id";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['employee_name'];
   /* $age=$row['age'];
    $email=$row['email'];*/
                if(isset($_POST['submit'])){
                    $name=$_POST['employee_name'];
                    //$age=$_POST['age'];
                    ///$email=$_POST['email'];
                    $sql="UPDATE attendance_employee set employee_name='$name' where id=$id";
                    $result=mysqli_query($db,$sql);
                    if($result){
                      /*include "read.php";*/
                    
                         echo "updated successfully";
                    }
                    else{
                           die(mysqli_error($db));
            }}
            
?>
<div class="main">
    <div class="container">
<form method="POST">
    <!-- <input type="text" name="employee_name" placeholder="Employee Name" required autofocus />
    <input type="submit" value="Add Employee" name="submit"> -->
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Add Employees</label>
  <input type="text" class="form-control" value="<?php  ?>" id="formGroupExampleInput" name="employee_name" placeholder="Employee Name" required autofocus>
</div>
<div class="mb-3">
  <input type="submit" class="form-control" id="formGroupExampleInput2" value="Submit" name="submit">
</div>
</form>
        </div>
        </div>


