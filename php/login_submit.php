<?php 
include'../includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$passw = $_POST['passw'];
$email_1 = "Select id from users where email='$email' AND pass = '$passw'";
$name= "Select name from users where email='$email' AND pass = '$passw'";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
$name_1 = mysqli_query($con,$name) or die(mysqli_error($con));
$name_2 = mysqli_fetch_array($name_1);
$row = mysqli_fetch_array($exe);
if(mysqli_num_rows($exe)==0)
{
	echo"No such User Exists";
}
else{
	$_SESSION["email"] = $email;
	$_SESSION["user_id"] = $row[0];
	$_SESSION["name"] = $name_2[0];
	header('location:../html/product.php');
}


?>