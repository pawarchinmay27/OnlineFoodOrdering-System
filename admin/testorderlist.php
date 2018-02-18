<?php
session_start();
		if(!isset($_SESSION["username"])){
			header("Location:admin-login.php");
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


//here I have my orders list ready


$getorderquery="SELECT MAX(oid) AS LargestId
FROM orders";



$result=$conn->query($getorderquery);


$row=$result->fetch_assoc();
//here I have my orders list ready
	$largestId=$row["LargestId"];


$mingetorderquery="SELECT MIN(oid) AS MinId
FROM orders";
$result=$conn->query($mingetorderquery);


$row=$result->fetch_assoc();

$minid=$row["MinId"];
	


for($i=$minid;$i<=$largestId;$i++){
	//here I will Write My outer div

	$querygetid="select * from orders where oid='$i'";
	$result=$conn->query($querygetid);
	$querygetid="select * from orders where oid='$i'";
	$resultname=$conn->query($querygetid);

	?>

	<div style="background-color: green;color: white;text-transform: uppercase;margin-top: 100px;">
	<?php
			$rowname=$resultname->fetch_assoc();
	?>
		  <a href="deleteorder.php?oid=<?php echo $rowname["oid"]; ?>"><button style="float: right;" type="button" class="btn btn-danger">REMOVE</button></a>

		<h1>ORDER ID: <?php echo $rowname["oid"]; ?></h1><br>
		<h1>CUSTOMER NAME: <?php echo $rowname["uname"]; ?></h1><br>
	<?php 		
	while ($row=$result->fetch_assoc()) {?>


			<h1>PRODUCT NAME: <?php echo $row["pname"]; ?></h1><br>
			<h1>QUANTITY: <?php echo $row["Quantity"]; ?></h1><br>
			
			



	<?php 


		}?>
		<h1>CUSTOMER ADDRESS: <?php echo $rowname["uaddress"]; ?></h1>

	</div>		



<?php
//for loop closes below

		


}
?>



</body>
</html>






