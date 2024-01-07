<?php
include 'connect.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];


$sql="insert into `crud`(name,email,mobile,password)values('$name','$email','$mobile','$password')";
$result=mysqli_query($conn,$sql);

if($result){
  header("location:display.php");
}
else{

  die (mysqli_error($conn));
}

}


?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body> 
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Name </label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete="off">
</div>
<div class="form-group">
    <label >email </label>
    <input type="text" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off">
</div>
<div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile" name="mobile" autocomplete="off">
</div>
<div class="form-group">
    <label >password </label>
    <input type="text" class="form-control"  placeholder="Enter your password"  name="password" autocomplete="off">
</div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
 
   
  </body>
</html>