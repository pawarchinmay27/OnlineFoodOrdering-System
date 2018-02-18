<!DOCTYPE html>
<html>
<head>
	<title>Order Status</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

</body>
</html>

<?php

	//store the uploaded file
	$original_path= $_FILES["pimage"]["tmp_name"];
	//wamp/www/Online Food Ordering System/admin/productimages/images
	$destination_folder= "/wamp/www/Online Food Ordering System/admin/productimages/images/";//here new folder had been made to store images in the root folder ie slave 
	$destination_file_path= $destination_folder.$_FILES["pimage"]["name"];
	
	if(!move_uploaded_file($original_path, $destination_file_path)){
		echo "error";
	}

$dbentryimage="productimages/images/".$_FILES["pimage"]["name"];
$productname=$_POST["productName"];
$productprice=$_POST["productprice"];
$pcategory=$_POST["category"];

			$conn = new mysqli("localhost","root","","foodordering");
			if($conn -> connect_error){
				echo "Error connecting .Please try again".$conn -> connect_error;
			}
			else{
						$query= "insert into products(pname,pcategory,pprice,pimage)values ".
				"('$productname','$pcategory','$productprice','$dbentryimage')";
				
			}
			if($conn -> query($query) === TRUE){
				?>

				<div class="alert alert-success">
						<strong style="text-transform: uppercase;">PRODUCT ADDED!!!</strong>

				</div>	

				<?php
				}
				else {?>
					

						 <div class="alert alert-danger">
						    <strong>Sorry Product Could Not Be Added!</strong><br>Please try again Later
						  </div>
					<?php

							} 
					?>
				


	

