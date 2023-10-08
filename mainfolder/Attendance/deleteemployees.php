<table border="1" cellspacing="0" class="table table-hover table-bordered">
    <form method="POST">
        <tr>
            <th>Employee Name</th>
            <th> Action </th>
            
        </tr>
        <?php
            require_once("config.php");
            $fetchingEmployees = mysqli_query($db, "SELECT * FROM attendance_employee") OR die(mysqli_error($db));
            while($data = mysqli_fetch_assoc($fetchingEmployees))
            {
                $employee_name = $data['employee_name'];
                $employee_id = $data['id'] ;
                
        ?>
                <tr>
                    <td><?php echo $employee_name; ?></td>
                    <td> <input type="submit" name="delete" value="Delete" class="btn btn-primary"/>
                    <input type="hidden" name="id" value="<?php $employee_id; ?>"/></td>
                </tr>
        <?php

            }
        ?>
    </form>
    <?php 
    if(isset($_POST['delete']))
    {
        //require_once("config.php");
        // echo "hi";
        $Eid = $_POST['id'];
        //echo $Eid;
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
    ?>
</table>