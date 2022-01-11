<?php
$serverName='localhost';
$userName='root';
$password='';
$dbName='registerform';
$conn=new mysqli($serverName,$userName,$password,$dbName);
if(!$conn){
	//echo "Data Connect Succesfully";
	die(mysqli_error());
}
/*else{
	die(mysqli_error());
}*/
?>