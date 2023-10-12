<?php 
    if(isset($_POST["submit"])){
        require_once("config.php");
        $first_name = $_POST["firstname"];
        $last_name = $_POST['lastname'];
        $email = $_POST['Email'];
        $number = $_POST['Phone_Number'];
        $qualification = $_POST['Qualification'];
        $experience = $_POST['Experience'];
        $timing = $_POST['Timing_Type'];

        $execquery = mysqli_query($db, "INSERT INTO apply_job_table(First_Name, Last_Name, Email, Phone_Number, Qualification, Experience, Timing_Type ) VALUE ('" . $first_name . "','" . $last_name . "','" . $email . "','" . $number . "','" . $qualification . "','" . $experience . "','" .  $timing . "')") or die(mysqli_error($db));
        if($execquery){
            echo "Job Application form Sent";
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
    <title> Responsive Job application Form </title>
    <link rel="stylesheet" href="./css/Leaveform.css ?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/style.css ?v=<?php echo time(); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php include("./Components/Navbar.php"); ?>
<div class="body">
  <div class="container">
    <div class="title">Job Application Form</div>
    <div class="content">
      <form action="applyForJob.php" method="POST">
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
            <span class="details">Qualification</span>
            <input type="text" placeholder="What is your qualifications" name="quailfication" required>
          </div>
          <div class="input-box">
            <span class="details">Past Experience</span>
            <input type="text" placeholder="Tell us about your past job experience" name="experience" required>
          </div>
         
          
        </div>
        <div class="timing-details">
          <input type="radio" name="time" value="Part Time" id="dot-1">
          <input type="radio" name="time" value="Full Time" id="dot-2">
          
          <span class="gender-title">Timing Type</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Part Time</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Full Time</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Send Job application Form" name="submit">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>