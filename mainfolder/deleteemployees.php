11<?php 
        include ("config.php");

        if (isset ($_GET['id'])){
            $id=$_GET['id']
            $delete=mysqli_query($db,DELETE FROM `attendance_employee` WHERE `id`='$id')
        }
        $select= "select * from attendance_employee";
        $query= mysqli_query($db, $select);
   ?>

<table border="1" cellspacing="0" class="table table-hover table-bordered">
    <form method="POST">
        <tr>
            <th>Employee Name</th>
            <th> Action </th>
            
        </tr>
        <?php

        $num= mysqli_num_rows($query);
        if ($num>0) {
            while ($result=mysqli_fetch_assoc($query)){
                echo "<tr>
                     <td>".$result['id']."</td>
                     <td>".$result['employee_name']"</td>
                     <td><a href='addingEmployee.php?id=".$result['id']."'class='btn'> Delete</a></td>
                </tr>";
            }
        }
           /* require_once("config.php");
            $fetchingEmployees = mysqli_query($db, "SELECT * FROM attendance_employee") OR die(mysqli_error($db));
            while($data = mysqli_fetch_assoc($fetchingEmployees))
            {
                $employee_name = $data['employee_name'];
                $employee_id = $data['id'] ;*/
                
        ?>
              <!--  <tr>
                    <td><?php echo $employee_name; ?></td>
                    <td> <input type="submit" name="delete" value="Delete" class="btn btn-primary"/><input type="hidden" name="id" value="<?php $employee_id; ?>"/></td>
                </tr>-->
        <?php

            
        ?>
    </form>
    







    /*if(isset($_POST['delete']))
    {
        //require_once("config.php");
        $Eid = $_POST['id'];
        $query = "DELETE FROM 'attendance_employee' WHERE 'id' = '$Eid'";
        mysql_select_db("ems");
        $execQuery = mysqli_query($db, $query) or die(mysqli_error($db));

        if( $execQuery!=0) {
            while($result=mysqli_fetch_assoc($data)){
                echo "Deleted data successfully\n";
            }
           
         }
         
        else{
            die('Could not delete data: ' . mysql_error());
        }
         
         mysql_close($db);
    }
    ?>*/
</table>