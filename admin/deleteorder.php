<!DOCTYPE html>
<html>
<head>
	<title>Deletion Acknowledgement</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="css/jquery.js"></script>
			<link rel="stylesheet" type="text/css" href="css/w3.css">
  			<script src="css/boot.js"></script>
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

</body>
</html>

<?php

$oid=$_GET["oid"];
$conn = new mysqli("localhost","root","","foodordering");

$deleteorderquery="DELETE   FROM orders WHERE oid='$oid' ";
if($conn->query($deleteorderquery)===TRUE){?>
<div class="alert alert-success">
						<strong style="text-transform: uppercase;">PRODUCT DELETED!!!</strong>

</div>		

<?php
}
else{?>	
	


 <div class="alert alert-danger">
    <strong>Sorry Something Went Wrong!</strong><br>Please try again Later
  </div>
		<?php
			}
		 ?>


