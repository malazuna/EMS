<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap."> </script>


</head>
<body>

   <div class="container">

        <div class="text-center mb-4 bg-danger">

                <h3>Add new employee</h3>
                <p class ="text-center mb-4">
                    <p class="text-muted" > Complete the form to add the new user.</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <form class="row g-3">
                
            <div class="col-md-6">
                
                <label for="firstname" class="form-label">First Name</label>
                
                  <input type="text" class="form-control" id="firstname">
</div>
<div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                
                  <input type="text" class="form-control" id="lastname">
                </div>
              
                
                <div class="col-12">
                
                <label for="inputAddress2" class="form-label">Address</label>
                
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                
                </div>
                
                <div class="col-md-6">
                
                <label for="inputDesig" class="form-label">Designation</label>
                
                  <input type="text" class="form-control" id="inputDesig"></br>
                
                </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>


</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Designation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>

    
    
    
  </tbody>
</table>


<?php
$i=1;
$sql="select * from emp_table";
$query=mysqli_query($conn,$sql);
while($res=mysqli_fetch_array($query))
{
  ?>
  <div class="row my-3">
    <div class="col-1">
      <?php echo $i++;?>
</div>
<div class="col">
  <?php echo $res['firstname'];?>
</div>

<div class="col">
  <?php echo $res['lastname'];?>
</div>

<div class="col">
  <?php echo $res['address'];?>
</div>

<div class="col">
  <?php echo $res['designation'];?>
</div>

<div>     
       <a href ="edit.php?id=<?php echo $res['id'];?>"
      class="btn btn-danger" onclick="myalert()">Edit</a>

</div>

<div>     
       <a href ="edit.php?id=<?php echo $res['id'];?>"
      class="btn btn-danger" onclick="myalert()">Edit</a>

</div>
<p> pankaj karki</p>
<p>test</p>





</body>
</html>