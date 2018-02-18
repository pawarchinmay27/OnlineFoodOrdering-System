<?php
session_start();
		if(!isset($_SESSION["username"])){
			header("Location:admin-login.php");
		}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Customer Home</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="css/jquery.js"></script>
			<link rel="stylesheet" type="text/css" href="css/w3.css">
  			<script src="css/boot.js"></script>
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
			#if:link, #if:visited {
    background-color:#E91E63;
    color: white;
    padding: 14px 25px;
    text-align: center;
    
    text-decoration: none;
    display: inline-block;
}


#if:hover, #if:active {
    background-color: white;
    color: black;
}

</style>
</head>
<body>	




		<nav class=" nav navbar-DEFAULT">
					<div class="navbar-header">
													<a class="navbar-brand" href="#">FOOD GO</a>
					</div>


					<div class=" nav navbar-nav navbar-left">
								<li style="text-transform: uppercase;">	<a>WELCOME</a></li>

					</div>


						<div class=" nav navbar-nav navbar-right">
								<li><a href="admin-logout.php">LOGOUT</a></li>
									<li><a href="#sec">ABOUT US</a></li>


					</div>

					

		</nav>
			
						

	
			
				
				
				
			<h1><a href="upload-product.php" id="if" style="width: 100%;border-radius: 10px;">ADD PRODUCT</a></h1>
			
			<h1><a href="testorderlist.php" id="if" style="width: 100%;border-radius: 10px;margin-top: 150px;">TRACK ORDERS</a></h1>	
				
		<h1><a href="admin-updateproductprice.php" id="if" style="width: 100%;border-radius: 10px;margin-top: 150px;">UPDATE PRODUCT PRICE</a></h1>	
			

		<h1><a href="update-product-availablity.php" id="if" style="width: 100%;border-radius: 10px;margin-top: 150px;">UPDATE PRODUCT AVAILABILITY</a></h1>	
		
		<h1><a href="getorderdetails.php" id="if" style="width: 100%;border-radius: 10px;margin-top: 150px;">VIEW ORDER DETAILS</a></h1>	
			
			
		<h1><a href="orderstatusupdate.php" id="if" style="width: 100%;border-radius: 10px;margin-top: 150px;">UPDATE ORDER STATUS</a></h1>		
			

						
		
					
					
					
									
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/wow.js"></script> 
 <script src="/Banking/contact/jqBootstrapValidation.js"></script>
<!-- <script src="contact/contact_me.js"></script> -->
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="plugins/moment/moment.min.js"></script>
<script type="text/javascript" src="plugins/datepicker/daterangepicker.js"></script>
</body>

</html>