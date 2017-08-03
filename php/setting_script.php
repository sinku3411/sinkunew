<?php 
include '../includes/common.php';
$oldpass = $_POST['oldpass'];
$pass1 = $_POST['newpass1'];
$pass2 = $_POST['newpass2'];
$id = $_SESSION["user_id"];

$query = "Select pass from users where id = '$id' ";
$exe = mysqli_query($con,$query);
$res = mysqli_fetch_array($exe);
if($pass1!=$pass2)
{
echo"Entered Password and Confirm Password are Mismatching";

}
else if($res[0]==$oldpass)
{
	$change = "UPDATE users set pass ='$pass1' WHERE id = '$id'";
	$exex = mysqli_query($con,$change);
	echo"Password Changed Successfully".$pass1;
	

}
else{
	echo "Please Enter Correct Old Password";


}

?>