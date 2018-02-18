<!DOCTYPE html>
<html>
<head>
	<title>Product Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

</body>
</html>

<?php


$productid= $_POST["productselected"];
$newprice= $_POST["newprice"];
$queupdatepoduct="update products set pprice='$newprice' where id='$productid' ";
$conn = new mysqli("localhost","root","","foodordering");

if($conn->query($queupdatepoduct)===TRUE){
?>	
<div class="alert alert-success">
						<strong style="text-transform: uppercase;">PRODUCT PRICE UPDATED!!!</strong>

</div>	
<?php
}else{
?>

						 <div class="alert alert-danger">
						    <strong>Sorry Product Could Not Be Updated!</strong><br>Please try again Later
						  </div>


<?php
}
?>





