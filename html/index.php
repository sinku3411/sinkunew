

<?php
require '../includes/common.php';
if(isset($_SESSION['email']))
{
	header('location:product.php');
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
<link rel="stylesheet" type="text/css" href="../css/home.css">
</head>
<body>
	<?php include '../includes/header.php'; ?>
	<div class="container-fluid" id="banner" style="background-image:url(../images/back.jpg) ">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-1 inner-banner-image">
				<div class="banner_content">
				<div class="items">
	    		<h1 >We Sell LifeStyle</h1>
	    		<p>Flat 15% off </p>
	    		</div>
	    		<a href="login.php" class=" col-xs-4 col-xs-offset-4 shopbutton">Shop Now</a>
	    		</div>
	    	</div>
			</div>
		</div>
	<div class="container" style="margin-top:50px">
	  <div class="row">
	 
	  	<div class="col-sm-4">
	  	 <div class="thumbnail">
	  		<a href="product.php"><img src="../images/camera.jpg"  alt="Camera"></a>
	  		<div class="caption">
	  			<h1 style="text-align:center">Cameras</h1>
	  			<p>Choose Among The Best Available in the World</p>
	  		</div>
	  	</div>
	  	</div>
	  	
	  		<div class="col-sm-4">
	  		<div class="thumbnail">
	  		<a href="product.php"><img src="../images/watch.jpg"  alt="Camera"></a>
	  		<div class="caption">
	  			<h1 style="text-align:center">Watches</h1>
	  			<p>Choose Among The Best Available in the World</p>
	  		</div>
	  	</div>
	  	</div>
	  	
	  		<div class="col-sm-4">
	  		<div class="thumbnail">
	  		<a href="product.php"><img src="../images/shirtii.jpg"  alt="Camera"></a>
	  		<div class="caption">
	  			<h1 style="text-align:center">Shirts</h1>
	  			<p>Choose Among The Best Available in the World</p>
	  		</div>
	  	</div>
	  	</div>
	  </div>
		
	</div>
	  <?php 
    include '../includes/footer.php';
    
   ?>


</body>


	

</html>