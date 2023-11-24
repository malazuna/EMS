<table border="1" cellspacing="0" class="table table-hover table-bordered">
    <form method="POST">
        <tr>
            <th>Employee Name</th>
            <th> P </th>
            <th> A </th>
            <th> L </th>
            <th> H </th>
            
        </tr>
        <?php
            require_once("config.php");
            $fetchingEmployees = mysqli_query($db, "SELECT * FROM emp_table") OR die(mysqli_error($db));
            while($data = mysqli_fetch_assoc($fetchingEmployees))
            {
                $employee_name = $data['Name'];
                $employee_id = $data['sn']  ;
                
        ?>
                <tr>
                    <td><?php echo $employee_name; ?></td>
                    <td> <input type="checkbox" name="employeePresent[]" value="<?php echo $employee_id; ?>" /></td>
                    <td> <input type="checkbox" name="employeeAbsent[]" value="<?php echo $employee_id; ?>" /></td>
                    <td> <input type="checkbox" name="employeeLeave[]" value="<?php echo $employee_id; ?>" /></td>
                    <td> <input type="checkbox" name="employeeHoliday[]" value="<?php echo $employee_id; ?>" /></td>
                </tr>
        <?php

            }
        ?>
        <tr>
            <td>Select Date (Optional)</td>
            <td colspan="4"> <input type="date" name="selected_date" /> </td>
        </tr>
        <tr>
            <th colspan="5"> <input class="btn btn-primary" type="submit" name="addAttendanceBTN" /></th>
        </tr>
    </form>
</table>


<?php 
    if(isset($_POST['addAttendanceBTN']))
    {
        date_default_timezone_set("Asia/Kathmandu");

        // Date Logic Starts 
        if($_POST['selected_date'] == NULL)
        {
            $selected_date = date("Y-m-d");
        }else {
            $selected_date = $_POST['selected_date'];
        }
        // Date Logic Ends
        $attendance_month = date("M", strtotime($selected_date));
        $attendance_year = date("Y", strtotime($selected_date));

        if(isset($_POST['employeePresent']))
        {
            $employeePresent = $_POST['employeePresent'];
            $attendance = "P";

            foreach($employeePresent as $atd)
            {
                
                mysqli_query($db, "INSERT INTO attendance(employee_id, curr_date, attendance_month, attendance_year, attendance) VALUES('" . $atd . "', '". $selected_date ."', '". $attendance_month ."', '". $attendance_year ."', '". $attendance ."')") OR die(mysqli_error($db));
                
            }

        }

        if(isset($_POST['employeeAbsent']))
        {
            $employeeAbsent = $_POST['employeeAbsent'];
            $attendance = "A";

            foreach($employeeAbsent as $atd)
            {
                mysqli_query($db, "INSERT INTO attendance(employee_id, curr_date, attendance_month, attendance_year, attendance) VALUES('" . $atd . "', '". $selected_date ."', '". $attendance_month ."', '". $attendance_year ."', '". $attendance ."')") OR die(mysqli_error($db));
            }
        }

        if(isset($_POST['employeeLeave']))
        {
            $employeeLeave = $_POST['employeeLeave'];
            $attendance = "L";

            foreach($employeeLeave as $atd)
            {
                mysqli_query($db, "INSERT INTO attendance(employee_id, curr_date, attendance_month, attendance_year, attendance) VALUES('" . $atd . "', '". $selected_date ."', '". $attendance_month ."', '". $attendance_year ."', '". $attendance ."')") OR die(mysqli_error($db));
            }
        }

        if(isset($_POST['employeeHoliday']))  //'studentHoliday'
        {
            $employeeHoliday = $_POST['employeeHoliday']; //'studentHoliday'
            $attendance = "H";

            foreach($employeeHoliday as $atd)
            {
                mysqli_query($db, "INSERT INTO attendance(employee_id, curr_date, attendance_month, attendance_year, attendance) VALUES('" . $atd . "', '". $selected_date ."', '". $attendance_month ."', '". $attendance_year ."', '". $attendance ."')") OR die(mysqli_error($db));
            }
         }
          echo "Attendance added successfully";

    }
?>