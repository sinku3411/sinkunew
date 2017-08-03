<?php 
include '../includes/common.php';
if(!isset($_SESSION["email"]))
{
	header('location:login.php');
}
function check_if_added($item_id)
{
$con = mysqli_connect("localhost","root","","store");
$user_id = $_SESSION["user_id"];
$query = "SELECT item_id FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
$res = mysqli_query($con,$query) or die(mysqli_error($con));
$result = mysqli_num_rows($res);
echo $result[0];
if(mysqli_num_rows($res))
{
return 1;
}
else{
	return 0;
}
}
?>


<html>
<head>
<title>LifeShop</title>
	<!-- Latest compiled and minified CSS -->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../css/product.css">
</head>
<body>
<?php include '../includes/header.php' ;
      
?>
	<div class="container" style="margin-top:2%">
	<div class="row">
		<div class="col-sm-12">
			<div class="jumbotron">
				<h1 style="text-align:center">Welcome To Our Lifestore !</h1>
				<h2 style="text-align:center">We have the best Camera Watches and Shirts For You Just Surf them all</h2>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/olympus.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>Olympus DSLR</h2>
					<p>Price 80000 Rs</p>
					<?php if(check_if_added(1))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=1" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
					
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/canon1.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>Canon EOS</h2>
					<p>Price 36000 Rs</p>
						<?php if(check_if_added(5))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=5" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
					
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/sony.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>SONY DSLR</h2>
					<p>Price 50000 Rs</p>
						<?php if(check_if_added(4))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=4" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/canon2.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>Canon EOS</h2>
					<p>Price 40000 Rs</p>
						<?php if(check_if_added(3))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=3" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/titan.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>Titan Model #301</h2>
					<p>Price 13000 Rs</p>
						<?php if(check_if_added(2))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=2" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/faber.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>Faber Cuba</h2>
					<p>Price 8000 Rs</p>
						<?php if(check_if_added(7))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=7" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/titan2.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>Titan Model #201</h2>
					<p>Price 10000 Rs</p>
						<?php if(check_if_added(8))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=8" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/hmt.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>HMT Milan</h2>
					<p>Price 2000 Rs</p>
						<?php if(check_if_added(9))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=9" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/shirt1.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>H&W Shirt</h2>
					<p>Price 3000 Rs</p>
						<?php if(check_if_added(10))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=10" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/shirt2.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>Luis Phil</h2>
					<p>Price 8000 Rs</p>
						<?php if(check_if_added(6))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=6" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/shirt3.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>John Zok</h2>
					<p>Price 3000 Rs</p>
						<?php if(check_if_added(11))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=11" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
			<div class="thumbnail">
				<img src="../images/shirt4.jpg" alt="Olympus Camera">
				<div class="Caption">
					<h2>Jhalsani</h2>
					<p>Price 250 Rs</p>
						<?php if(check_if_added(12))
                      {
                      	echo'<button class="btn btn-success btn-block" disabled>Added</button>';
                      }
                      else {
                        echo'<a href="../includes/cart-add.php?id=12" value="add" name="add" class="btn btn-primary btn-block">Add to Cart</a>';
                      }
                    
					?>
				</div>
			</div>
			</div>
			
		</div>
	</div>

   <?php include '../includes/footer.php' ?>
</body>
	

	</html>