<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="update `crud` set id=$id ,name='$name' ,email='$email' ,mobile='$mobile' ,password='$password' where id=$id ";
    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Data Update succefully";
        header('location:show.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Registeration Form</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="#"/>
        <!-- EOF CSS INCLUDE --> 
        <!-- Bootstrap link-->

        <link rel="stylesheet" type="bootstap/bootstrap.min.css"><!--it isnot work you have to check it which downloaded -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> <!--it is working only with internet -->
        <!-- end Bootstrap link-->                                  
    </head>
    <body>
<div class="container my-5 fd-justify-content-center"><!-- there is two types classes on bootsrap container it is bootstrap class and there is also container flowed  ## my that class means give margin top and bottom  for my -->
   <form method="post">
    <div class="form-group ">
        <label>ID:</label>
        <input type="text" name="id" class="form-control" placeholder="Enter Your ID" autocomplete="off"value="<?php echo $id;?>">
    </div>
       
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" autocomplete="off" value="<?php echo $name;?>">
       </div>
       
      <div class="form-group">
        <label>email:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" autocomplete="off" value="<?php echo $email;?>">
       </div>
       
      <div class="form-group">
        <label>Mobile Number:</label>
        <input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" autocomplete="off" value="<?php echo $mobile;?>"><!-- autocomplete that means without getting suugetion data to gai-->
       </div><!--form-control class make as break line with label-->

      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" autocomplete="off" value="<?php echo $password;?>">
       </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
      
    </form>  
</div>

 </body>
</html>