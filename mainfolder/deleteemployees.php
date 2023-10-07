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
                $employee_id = $data['id']  ;
                
        ?>
                <tr>
                    <td><?php echo $employee_name; ?></td>
                    <td> <input type="submit" name="delete" value="Delete" class="btn btn-primary"/><input type="hidden" name="employeeid" value="<?php $employee_id; ?>"/></td>
                </tr>
        <?php

            }
        ?>
    </form>
    <?php 
    if(isset($_POST['delete']))
    {
        require_once("config.php");
        // echo "hi";
        $Eid = $_POST['employeeid'];
        echo $Eid;
        $query = "DELETE FROM 'attendance_employee' WHERE 'employeeid' = '$Eid'";
        mysql_select_db('ems');
        $execQuery = mysqli_query($db, $query) or die(mysqli_error($db));

        if(! $execQuery) {
            die('Could not delete data: ' . mysql_error());
         }
         
         echo "Deleted data successfully\n";
         
         mysql_close($db);
    }
    ?>
</table>