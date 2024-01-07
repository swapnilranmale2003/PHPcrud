<?php
include 'connect.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
    <button type="button" class = "btn btn-primary"><a href="user.php" class="text-light" >Add User</a> </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">slno</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>

    </tr>
  </thead>
  <tbody>
  <?php
$sql = "SELECT *FROM `crud`";
$result = mysqli_query($conn,$sql);
if($result)
{
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button type="button" class = "btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light" >Update User</a> </button>
        <button type="button" class = "btn btn-danger"><a href="delete.php ? deleteid='.$id.'" class="text-light" >Delete User</a> </button>
  
        </td>
      </tr>';

    }
}
?>
</table>
</div>

</body>
</html>