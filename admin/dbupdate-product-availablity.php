<!DOCTYPE html>
<html>
<head>
	<title>Update Product Available</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

</body>
</html>
<?php

$pid= $_POST["productselected"];
$availaible=$_POST["newavailable"];
$queupdatepoduct="update products set availaible='$availaible' where id='$pid'";
$conn = new mysqli("localhost","root","","foodordering");
if($conn->query($queupdatepoduct)===TRUE){

?>

<div class="alert alert-success">
						<strong style="text-transform: uppercase;">PRODUCT AVALABILITY UPDATED!!!</strong>

</div>	


<?php
}
else{
?>

						 <div class="alert alert-danger">
						    <strong>Sorry Product  Could Availability Not Be Updated!</strong><br>Please try again Later
						  </div>


<?php

}
?>