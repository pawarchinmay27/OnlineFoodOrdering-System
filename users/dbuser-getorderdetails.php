<?php

$oid= $_POST["orderno"];
	/*$conn = new mysqli("localhost","root","","foodordering");
	$getorderinfo="select * from orders";
	$resultset=$conn->query($getorderinfo);
	$pid=$row["pid"];
	$pname=$row["pname"];
	$customername=$row["uname"];
	$customercontact=$row["umobileno"];
*/
?>
<?php
session_start();
		if(!isset($_SESSION["uname"])){
			header("Location:user-login.php");
		}
		else{
				$oid= $_POST["orderno"];

		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>TEST ORDER LIST</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="css/jquery.js"></script>
			<link rel="stylesheet" type="text/css" href="css/w3.css">
  			<script src="css/boot.js"></script>
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<h1 style="text-align: center;">ORDERS LIST</h1>
<?php
//Build My dataset
$conn = new mysqli("localhost","root","","foodordering");

	$querygetid="select * from orders where oid='$oid'";
	$resultname=$conn->query($querygetid);

	?>
	

	<div style="background-color: green;color: white;text-transform: uppercase;margin-top: 100px;">
	<?php
			$rowname=$resultname->fetch_assoc();
			$oneimgpid=$rowname["pid"];
			
			//now i will get information about that product
			$querygetid="select * from products where id='$oneimgpid'";
			$resultnameimg=$conn->query($querygetid);
			$rowimg=$resultnameimg->fetch_assoc();



	?>
		  <a href="deleteorder.php?oid=<?php echo $rowname["oid"]; ?>"><button style="float: right;" type="button" class="btn btn-danger">REMOVE</button></a>
		 
		<h1>ORDER ID: <?php echo $rowname["oid"]; ?></h1><br>
				<h1>ORDER STATUS: <?php echo $rowname["orderstatus"]; ?></h1><br>
		<h1>CUSTOMER NAME: <?php echo $rowname["uname"]; ?></h1><br>
		<img src="<?php echo "../admin/".$rowimg["pimage"]; ?>" width="100%" height="300px">
		<h1>PRODUCT NAME: <?php echo $rowname["pname"]; ?></h1><br>
		<h1>QUANTITY: <?php echo $rowname["Quantity"]; ?></h1><br>
				
	<?php 		
	while ($row=$resultname->fetch_assoc()) {
			$pimgid=$row["pid"];
			$querygetid="select * from products where id='$pimgid'";
			$resultnameimg=$conn->query($querygetid);
			$rowimg=$resultnameimg->fetch_assoc();

		?>

			<img src="<?php echo "../admin/".$rowimg["pimage"]; ?>" width="100%" height="300px">
			<h1>PRODUCT NAME: <?php echo $row["pname"]; ?></h1><br>
			<h1>QUANTITY: <?php echo $row["Quantity"]; ?></h1><br>
			
			



	<?php 


		}?>
		<h1>CUSTOMER ADDRESS: <?php echo $rowname["uaddress"]; ?></h1><br>
		<h1>CUSTOMER CONTACT: <?php echo $rowname["umobileno"]; ?></h1>
	</div>		






</body>
</html>






