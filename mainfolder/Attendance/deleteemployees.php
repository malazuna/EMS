<table border="1" cellspacing="0" class="table table-hover table-bordered">
    <form method="POST">
        <tr>
            <th>Employee Name</th>
            <th colspan="2"> Action </th>
            
        </tr>
        <?php
            require_once("config.php");
            $fetchingEmployees = mysqli_query($db, "SELECT * FROM attendance_employee") OR die(mysqli_error($db));
            while($data = mysqli_fetch_assoc($fetchingEmployees))
            {
                $employee_name = $data['employee_name'];
                $employee_id = $data['id'] ;
                
        ?>
         <tr >
                    <td><?php echo $employee_name; ?></td>
                    <td>
                    <a href="addingEmployee.php?id=<?php echo $employee_id ?>" class="btn btn-danger" >Delete</a>   </td>
                    <td>
                    <a href="edit.php? updateid='.$id.'<?php echo $employee_id?>" class="btn btn-primary" >Edit</a>   </td>
                    <!-- <td> <input type="submit" name="delete" value="Delete" class="btn btn-primary"/>
                    <input type="hidden" name="id" value="<?php $employee_id; ?>"/></td> -->

                    <!--button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">update</a></button>
                </tr>
        <?php

            }
        ?>
    </form>
    <?php 
    if(isset($_GET['id']))
    {
        require_once("config.php");
        // echo "hi";
        $Eid = $_GET['id'];
        //echo $Eid;
       $query = "DELETE FROM `attendance_employee` WHERE `attendance_employee`.`id` = $Eid";
        
        // $query = "DELETE FROM attendance_employee WHERE id = $Eid";
        // mysql_select_db("ems");
        $execQuery = mysqli_query($db, $query) or die(mysqli_error($db));

        if( $execQuery!=0) {
            echo "<script>
                alert('Deleted successfully');
            </script>";
            // while($result=mysqli_fetch_assoc($data)){
            //     echo "Deleted data successfully\n";
            // }
           
         }
         
        else{
            die('Could not delete data: ' . mysql_error());
        }
         
         mysqli_close($db);
        //  header("Location: http://localhost/collegeproject/mainfolder/addingEmployee.php");
        echo "<script>window.location = 'http://localhost/collegeproject/mainfolder/addingEmployee.php';</script>";
        die;
    }
    ?>
</table>