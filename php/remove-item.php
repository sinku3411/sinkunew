<?php
include '../includes/common.php';
$id = $_GET['id'];
$query = "Delete from users_items where id ='$id'";
$exe = mysqli_query($con,$query) or die(mysqli_error($con));
header('location:../html/cart.php');

?>