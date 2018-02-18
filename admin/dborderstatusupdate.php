<!DOCTYPE html>
<html>
<head>
	<title>Update Order Status</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

</body>
</html>
<?php
$orderid=$_POST["orderno"];

$orderstatus=$_POST["orderstatus"];

$queupdateorder="update orders set orderstatus='$orderstatus' where oid='$orderid' ";
$conn = new mysqli("localhost","root","","foodordering");

if($conn->query($queupdateorder)===TRUE){

?>
<div class="alert alert-success">
						<strong style="text-transform: uppercase;">ORDER STATUS  UPDATED!!!</strong>

</div>	
<?php
}else{
?>

						 <div class="alert alert-danger">
						    <strong>Sorry Order Status Could Not Be Updated!</strong><br>Please try again Later
						  </div>

<?php
}
?>