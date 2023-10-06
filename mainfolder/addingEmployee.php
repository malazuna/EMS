<form method="POST">
    <input type="text" name="employee_name" placeholder="Employee Name" required autofocus />
    <input type="submit" value="Add Employee" name="submit">
</form>

<?php 

    if(isset($_POST['submit']))
    {
        require_once("config.php");
        $employee_name = $_POST['employee_name'];

        $query = "INSERT INTO attendance_employee(employee_name) VALUE('$employee_name')";
        $execQuery = mysqli_query($db, $query) or die(mysqli_error($db));

        echo "Employee has been added Successfully!";
    }

?>