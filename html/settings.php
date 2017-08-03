<?php
include '../includes/common.php'
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
<?php include '../includes/header.php' ?>

	<div class="container">
	<div class="row  ">
		<div class="col-sm-4 col-sm-offset-4" style="margin-top:5%">
			<h2>Change Password</h2>
			<form method="POST" action="../php/setting_script.php" onsubmit="return check();">
			<div class="form-group">
            <input type="password" name="oldpass" class="form-control" placeholder="Enter Old PassWord" required>
			</div>
			<div class="form-group">
			<input type="password" name="newpass1" id="pass1"class="form-control"  placeholder="Enter New PassWord" required>
			</div>
			<div class="form-group">
			<input type="password" name="newpass2" class="form-control" id="pass2"  placeholder="Confirm New PassWord" required>
			</div>
			<div class="form-group">
			<a href=""><button type="submit" class="btn btn-primary">Change</button></a>
			</div>
			</form>
         </div>
		</div>
		
	</div>
	<footer class="navbar-fixed-bottom">
	<p>Copyright &copy; Lifestyle Store. All Rights
Reserved | Contact Us: +91 90000 00000</p>
	
	</footer>
	</body>
	</html>