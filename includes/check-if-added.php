<?php 

function check_if_added($item_id)

{
	include'common.php';
$user_id = $_SESSION["user_id"];
$query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
$res = mysqli_query($con,$query);
if(mysqli_num_rows($res))
{
return 1;
}
else{
	return false;
}
}

?>
