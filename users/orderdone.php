<?php
	//build my dataset for products


	session_start();	

	if(!isset($_SESSION["mobile_no"])){
			header("Location:user-login.php");
	}
	$conn = new mysqli("localhost","root","","foodordering");
	$pid=$_GET["par3"];
	$query="select * from products where id='$pid' ";
	$result=$conn->query($query);		

	setcookie("pid",$pid);
	$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Place Order</title>

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
	<div class="alert alert-success">
	<div class="row">
		<div class="col-xs-8">
			<img src="<?php echo "../admin/".$row["pimage"];  ?>" >
		</div>
		<div class="col-xs-4">

			<table border="1px" height="250px;" style="text-align:center;" width="350px;" cellpadding="10" cellspacing="2">
			<tr style="color:red;text-align: center;">
					<th>CATEGORY</th>
					<th>PRODUCT NAME</th>
					<th>PRICE</th>
			</tr>
			<tr style="text-transform: uppercase;color: black;size: 4px;">
					<td  >
								<?php   echo $row["pcategory"]; ?>
					</td>
					<td>
							<?php echo $row["pname"]; 

							setcookie("productnameck",$row["pname"]);
							?>

					</td>
					<td id="pprice">
								<?php echo "RS ".$row["pprice"]; ?>
							<?php setcookie("pprice",$row["pprice"]); ?>
					</td>
			</tr>				
	   	
		</div>
		</table>

		<div style="margin-top: 50px;">
		<label>PLEASE ENTER THE QUANTITY BELOW</label>
		<form action="dborderdone.php" method="POST">
			
			<input type="number" value="1" oninput="CurrencyConverter(this.value)" onchange="temperatureConverter(this.value)" placeholder="0" name="fquant" style="width: 50%;height: 50%;" min="1" max="5"><br><br>
		
			Address(Optional)<input placeholder="if empty default address would be considered" style="width: 80%;" type="text" name="newaddress"><br><br>

			Phone Number(Optional)<input placeholder="if empty default address would be considered" style="width: 80%;" type="text" name="phonenumber"><br><br>
				<button type="submit"  class="btn btn-success">PLACE ORDER</button>							
		</form>
		</div>
	</div>
    	</div>
    	</div>


    		
  </div>
  <a href="user-home.php">Continue Shopping</a>
  <script>
function CurrencyConverter(valNum) {
  valNum = parseFloat(valNum);

  /*document.getElementById("INR").innerHTML=(valNum*57.58);
  document.getElementById("YEN").innerHTML=(valNum*112.46);
  document.getElementById("EURO").innerHTML=(valNum*0.96);
  */
  document.getElementById("pprice").innerHTML=(valNum*<?php echo $row["pprice"];  ?>);
}
</script>
</body>
</html>
