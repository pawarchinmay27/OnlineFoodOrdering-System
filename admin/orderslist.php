<?php
//Build My dataset
$conn = new mysqli("localhost","root","","foodordering");

$getorderquery="select * from orders ORDER BY  oid";
$result=$conn->query($getorderquery);

//here I have my orders list ready

?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders List</title>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="css/jquery.js"></script>
			<link rel="stylesheet" type="text/css" href="css/w3.css">
  			<script src="css/boot.js"></script>
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<?php
			while($row=$result->fetch_assoc()){
?>


					
										<div style="display: block;background-color:#43A047;margin-bottom: 30px; border: 10px;border-color:red;color: white;" >

													<div class="r1">
													<font style="text-transform: uppercase;" size="5" color="white"><i class="fa fa-heart-o" style="font-size:36px;">ORDER ID:
														<?php echo $row["oid"]  ?>
														
														</i>
													</font> <br><br>
														
													</div>
			<div class="r3"><font  color="white" style="text-transform: uppercase;">PRODUCT:&nbsp;<?php   echo $row["pname"] ?></font></div><br><br>

			<div class="r3"><font color="white" >QUANTITY:&nbsp; <?php   echo $row["Quantity"] ?></font></div><br><br>
			<div class="r3"><font  color="white" style="text-transform: uppercase;">CUSTOMER:&nbsp;<?php   echo $row["uname"] ?></font></div><br><br>
			<div class="r3"><font  color="white" style="text-transform: uppercase;">CUSTOMER CONTACT:&nbsp;<?php   echo $row["umobileno"] ?></font></div><br><br>
			
				<div style="margin-bottom: 80px;" class="r3">
							 <a href="deleteorder.php?oid=<?php echo $row["oid"]; ?>"><button type="button" style="float: right;margin-bottom: 50px;" class="btn btn-danger btn-primary btn-lg">Remove</button></a>
				</div>
				</div>







<?php
		}//while loop closes
?>



</body>
</html>