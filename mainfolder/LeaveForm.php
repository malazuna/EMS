<?php 
    if(isset($_POST["submit"])){
        require_once("config.php");
        $first_name = $_POST["firstname"];
        $last_name = $_POST['lastname'];
        $email = $_POST['Email'];
        $number = $_POST['number'];
        $days = $_POST['days'];
        $reason = $_POST['reason'];
        $starting = $_POST['starting'];
        $ending = $_POST['ending'];
        $leave = $_POST['leave'];

        $execquery = mysqli_query($db, "INSERT INTO leave_table(First_Name, Last_Name, Email, Phone_Number, No_of_Days, Reason, Starting_Date, Ending_Date, Leave_Type) VALUE ('" . $first_name . "','" . $last_name . "','" . $email . "','" . $number . "','" . $days . "','" . $reason . "','" . $starting . "','" . $ending . "','" . $leave . "')") or die(mysqli_error($db));
        if($execquery){
            echo "Leave Request Sent";
        }
        else{
            echo "Failed";
        }
    }
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="./css/Leaveform.css ?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/style.css ?v=<?php echo time(); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php include("./Components/Navbar.php"); ?>
<div class="body">
  <div class="container">
    <div class="title">Leave Request Form</div>
    <div class="content">
      <form action="LeaveForm.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name" name="firstname" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your Last name" name="lastname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="Email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="number" required>
          </div>
          <div class="input-box">
            <span class="details">No of Days</span>
            <input type="text" placeholder="No of days leave requested" name="days" required>
          </div>
          <div class="input-box">
            <span class="details">Reason For leave</span>
            <input type="text" placeholder="Reason for leave" name="reason" required>
          </div>
          <div class="input-box">
            <span class="details">From</span>
            <input type="date" name="starting" required>
          </div>
          <div class="input-box">
            <span class="details">To</span>
            <input type="date" name="ending" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="leave" value="Annual Leave" id="dot-1">
          <input type="radio" name="leave" value="Sick Leave" id="dot-2">
          <input type="radio" name="leave" value="Unpaid Leave" id="dot-3">
          <span class="gender-title">Leave Type</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Annual Leave</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Sick Leave</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Unpaid Leave</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Send Leave Request" name="submit">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>