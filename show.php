<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>show me the user</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	
<button type="submit" name="submit" class="btn btn-primary my-5"><a href="basic.php" class="text-light">Add User</a></button>
</div>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $sql='select * from `crud`';
     $result=mysqli_query($conn, $sql);
     if($result){
    while ($row=mysqli_fetch_assoc($result)) {
      $id= $row['id'];
      $name= $row['name'];
      $email= $row['email'];
      $mobile= $row['mobile'];
      $password= $row['password'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light"   >Update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button><td>
      </tr>';
      }
}

    ?>
    </tbody>
</table>
</body>
</html>