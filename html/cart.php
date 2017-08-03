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
    <div class="container" style="margin-top:2%">
    	<div class="row ">
    		<div class="col-sm-5 col-sm-offset-4 well">
    		<h2>Your Order</h2>
                  <?php
                    $user_id = $_SESSION["user_id"];
                    $query = "Select * from users_items where user_id = '$user_id'";
                    $result = mysqli_query($con,$query)or die(mysqli_error($con));
                    $num_rows = mysqli_num_rows($result);
                    $sum=0;
                     ?>
    			<div class="table-responsive">
    			 <table class="table table-hover">
    			 <tbody>
    			 	<tr>
    			 	   <th>
    			 		Product Id
    			 	   </th>
    			 	   <th>
    			 		Item Name
    			 	   </th>
    			 	   <th>
    			 		Prize
    			 	   </th>
    			 	</tr>
               <?php while($num_rows>0) { 
                 $row = mysqli_fetch_array($result) or die(mysqli_error($con));?>
                     <tr>
                        <td><?php echo $row['item_id']; ?></td>
                     
                        <td><?php echo $row['name_item']; ?></td>
                     
                        <td><?php echo $row['Price']; 
                        $ress = $row['id'];?></td>

                        <td><a href='../php/remove-item.php?id=<?php echo $row['id'];?>' class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
                        <?php
                         $num_rows=$num_rows-1;
                          $sum = $sum+$row['Price'];}?>

                          </td>
                     </tr>
                     <tr>
                         <td></td>
                         <td style="font-weight:bold">Total :</td>
                         <td style="font-weight:bold"><?php echo $sum ;?></td>
                     </tr>
    			 </tbody>
    				    			
    			</table>

    		</div>
            <?php echo'<button class="btn btn-success">Confirm and Pay</button> ';?>
            <a href="product.php"<button class="btn btn-info">Shop More!</button></a>
    	</div>
    </div>
    <footer class="navbar-fixed-bottom">
    <p>Copyright &copy; Lifestyle Store. All Rights
Reserved | Contact Us: +91 90000 00000</p>
    
    </footer>

	</body>
	</html>