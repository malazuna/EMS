<div>
    <?php 
    require_once("config.php");

    $firstDayOfMonth = date("1-m-Y");
    $totalDaysInMonth = date("t", strtotime($firstDayOfMonth));
   
    // Fetching Employees 
    $fetchingEmployees = mysqli_query($db, "SELECT * FROM emp_table where sn='".$_SESSION["ID"]."'") OR die(mysqli_error($db)); //attendance_employee
    $totalNumberOfEmployees = mysqli_num_rows($fetchingEmployees);  //$fetchingEmployees
//$totalNumberOfEmployees

    $employeesNamesArray = array(); //$studentsNamesArray
    $employeesIDsArray = array(); //$studentsIDsArray
    $counter = 0;
    // $employees = mysqli_fetch_assoc($fetchingEmployees);
    // $employeeName = $employees['Name'];
    // $employeeID = $employees['sn']; 
    
    while($employees = mysqli_fetch_assoc($fetchingEmployees)) //$students  //$fetchingStudents
    {
        // $employeesNamesArray[] = $employees['Name']; //$studentsNamesArray[]   //$students['student_name']
        // $employeesIDsArray[] = $employees['sn']; //$studentsIDsArray   //$students
        $employeeName = $employees['Name'];
    $employeeID = $employees['sn']; 
    // echo $employeeID;
?>


<table border="1" cellspacing="0" class="table table-hover table-bordered">
<?php 
   
    for($i = 1; $i<=3; $i++)  //$totalNumberOfStudents
    {
       
        if($i == 1)
        {
            echo "<tr>";
            echo "<td rowspan='2'>Names</td>";
            for($j = 1; $j<=$totalDaysInMonth; $j++)
            {
                echo "<td>$j</td>";
            }
            echo "</tr>";
            
        }else if($i == 2)
        {
            echo "<tr>";
            for($j = 0; $j<$totalDaysInMonth; $j++)
            {
                echo "<td>" . date("D", strtotime("+$j days", strtotime($firstDayOfMonth))) . "</td>";
            }
            echo "</tr>";
        }else 
        {
            echo "<tr>";
            echo "<td>" . $employeeName . "</td>"; //$studentsNamesArray
            // echo "<td>ABC</td>";
            // echo $counter;
            for($j = 1; $j<=$totalDaysInMonth; $j++)
            {
                
                $dateOfAttendance = date("Y-m-$j");
                $fetchingEmployeesAttendance = mysqli_query($db, "SELECT attendance FROM attendance WHERE employee_id = '".$_SESSION["ID"]."' AND curr_date = '". $dateOfAttendance ."'") OR die(mysqli_error($db));
                // $fetchingStudentsAttendance                                                             //student_id          //$studentsIDsArray
                $isAttendanceAdded = mysqli_num_rows($fetchingEmployeesAttendance);
                if($isAttendanceAdded > 0)
                {
                    $employeeAttendance = mysqli_fetch_assoc($fetchingEmployeesAttendance);  //$studentAttendance
                    if($employeeAttendance['attendance'] == "P")  //$studentAttendance
                    {
                        $color = "green";
                    }else if($employeeAttendance['attendance'] == "A")
                    {
                        $color = "red";
                    }else if($employeeAttendance['attendance'] == "H")
                    {
                        $color = "blue";
                    }else if($employeeAttendance['attendance'] == "L")
                    {
                        $color = "brown";
                    }

                    echo "<td style='background-color: $color; color:white'>" . $employeeAttendance['attendance'] . "</td>"; //$studentAttendance
                }else {
                    echo "<td></td>";
                }
               
                
            }
            echo "</tr>";
            $counter = $counter + 1;
        }
        
      
    }
    
?>
</table>
<?php
    }
?>
</div>