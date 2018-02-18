<?php
	//build my dataset for products
	
	session_start();	

	if(!isset($_SESSION["mobile_no"])){
			header("Location:user-login.php");
	}
	$conn = new mysqli("localhost","root","","foodordering");
	$query="select * from products";
	$result=$conn->query($query);
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<style type="text/css">
		.mySlides {display:none;}
	</style>
</head>
<body>
			<h2>FOOD GO</h2>
			<h2><a href="user-getorderdetails.php">GET ORDER DETAILS</a></h2>
			<a href="user-logout.php" style="float: right;margin-top: -50px;text-decoration: none;"><h2>LOGOUT</h2></a>
			<div>
					<div class="w3-content w3-section" style="max-width:100%;">
					  <img class="mySlides" src="images/ss1.jpg" style="width:100%">
					  <img class="mySlides" src="images/ss2.jpg" style="width:100%">
					  <img class="mySlides" src="images/ss3.jpg" style="width:100%">
					</div>
			</div>

		<?php  

				while($row=$result->fetch_assoc()){


		?>
				<div class="row" style="padding-top: 150px;">
							
							<div class="col-xs-4">

									  <div class="w3-card-4" style="width:30%">
									    <img src="<?php echo "../admin/".$row["pimage"];  ?>" height="300" width="400"  style="border-radius: 8px;" >
									    <div class="w3-container w3-center">
									      <p style="text-transform: uppercase;"><h4 style="text-transform: uppercase;"><?php echo $row["pcategory"]." ".$row["pname"];  ?></h4></p>
									      <button type="button"  style="margin-left: -20px;"  class="btn alert alert-info"><?php echo "AVAILABLE ".$row["availaible"]   ?></button><br><br>
									        
									        <button type="button"   class="btn btn-primary"><?php echo "RS ".$row["pprice"]   ?></button><br><br>
									        <a href="orderdone.php?par3=<?php echo $row["id"];?>"><button type="button" style="margin-top: 20px; " class="btn btn-success">Order</button></a>
							

									    </div>
									  </div>
									</div>



											<!-- Second Element-->
					  						<?php if($row=$result->fetch_assoc()){ ?>
					  						<div class="col-xs-4">

									  <div class="w3-card-4" style="width:30%">
									    <img src="<?php echo "../admin/".$row["pimage"];  ?>" height="300" width="400"  >
									    <div class="w3-container w3-center">
									      <p style="text-transform: uppercase;"><h4 style="text-transform: uppercase;"><?php echo $row["pcategory"]." ".$row["pname"];  ?></h4></p>
									      		      <button type="button"  style="margin-left: -15px;"  class="btn alert alert-info"><?php echo "AVAILABLE ".$row["availaible"]   ?></button><br><br>
							
									        <button type="button"   class="btn btn-primary"><?php echo "RS ".$row["pprice"]   ?></button><br><br>
									        <a href="orderdone.php?par3=<?php echo $row["id"];?>"><button type="button" style="margin-top: 20px; " class="btn btn-success">Order</button></a>
							

									    </div>
									  </div>
									</div>

					  				

											<?php } ?>

					  				
									<!--third element -->
					  				<?php if($row=$result->fetch_assoc()){ ?>
					  					
					  						<div class="col-xs-4">

									  <div class="w3-card-4" style="width:30%">
									    <img src="<?php echo "../admin/".$row["pimage"];  ?>" height="300" width="400"  >
									    <div class="w3-container w3-center">
									      <p style="text-transform: uppercase;"><h4 style="text-transform: uppercase;"><?php echo $row["pcategory"]." ".$row["pname"];  ?></h4></p>
									      		      <button type="button"  style="margin-left: -20px;"  class="btn alert alert-info"><?php echo "AVAILABLE ".$row["availaible"]   ?></button><br><br>
							
									        <button type="button"   class="btn btn-primary"><?php echo "RS ".$row["pprice"]   ?></button><br><br>
									        <a href="orderdone.php?par3=<?php echo $row["id"];?>"><button type="button" style="margin-top: 20px; " class="btn btn-success">Order</button></a>
							

									    </div>
									  </div>
									</div>


									<?php } ?>

							
					</div>
							


				</div>

				
				


		<?php
			}
		?>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>