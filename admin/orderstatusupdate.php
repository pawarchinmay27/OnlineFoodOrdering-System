<?php
session_start();
		if(!isset($_SESSION["username"])){
			header("Location:admin-login.php");
		}
				else{
						$conn = new mysqli("localhost","root","","foodordering");
						
						$getselectitems="SELECT * FROM products";
						$result=$conn->query($getselectitems);



		}


		
		


?>

<!DOCTYPE html>
<html>
<head>
	<title> ORDER STATUS UPDATE</title>
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link type="text/css" href="css/theme.css" rel="stylesheet">
<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FOOD GO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin-home.php">Home</a></li>
     </ul>
  </div>
</nav>
		



	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>


	<div class="wrapper" style="margin-top:160px;">
		<div class="container">
			<div class="row">
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Update Product</h3>
							</div>
							<div class="module-body">
							<div class="control-group">
<form action="dborderstatusupdate.php" method="POST" enctype="multipart/form-data">
											<label class="control-label" for="basicinput">PRODCUT LIST</label>
											<div class="controls">
											<select style="text-transform: uppercase;"   name="orderstatus"  id="subcategory" class="span8 tip" required>
											<option value="ORDER TAKEN">ORDER TAKEN</option>
											<option value="ORDER EXPEDITE">ORDER EXPEDITE</option>
											<option value="ORDER DELIVERED">ORDER DELIVERED</option>
											</select>
											</div>
											</div>


											<div class="control-group">
											<label class="control-label" for="basicinput">ORDER NUMBER</label>
											<div class="controls">
											<select name="orderno" style="text-transform: uppercase;" id="subcategory" class="span8 tip" required >
												<?php
													while($row=$result->fetch_assoc()){

												?>

													<option value="<?php echo $row["id"]; ?>"><?php echo $row["id"]; ?></option>

												<?php

														}
												?>
											</select>
											</div>
											</div>
											<div class="control-group">
																						<div class="controls">
																							<button type="submit" name="submit" class="btn">UPDATE</button>
																						</div>
																					</div>
									</form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->



</body>
</html>