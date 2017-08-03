<?php
include 'common.php';
$item_id = $_GET["id"];
$user_id = $_SESSION["user_id"];
$name = "Select name from items where id = '$item_id'";
$name_1 = mysqli_query($con,$name);
$res_name = mysqli_fetch_array($name_1);
$price = "Select price from items where id = '$item_id'";
$price_1 = mysqli_query($con,$price);
$res_price = mysqli_fetch_array($price_1);
$query = "INSERT INTO users_items(name_item,user_id, item_id,Price, status) VALUES('$res_name[0]','$user_id', '$item_id', '$res_price[0]','Added to cart')";
$res = mysqli_query($con,$query) or die(mysqli_error($con));
header('location:../html/product.php')




 ?>