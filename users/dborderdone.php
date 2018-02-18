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

$pid=$_COOKIE["pid"];
$quant=$_POST["fquant"];
$pname=$_COOKIE["productnameck"];
$pamount=$_COOKIE["pprice"]*$quant;
session_start();
$uname=$_SESSION["uname"];
$mobile_no=$_SESSION["mobile_no"];
$address="";
if(!isset($_POST["newaddress"]) || strlen(trim($_POST["newaddress"])) == 0){
   		$address=$_SESSION["address"];

}
else{
			$address=$_POST["newaddress"];		
}
if(!isset($_POST["phonenumber"]) || strlen(trim($_POST["phonenumber"])) == 0){
   		$mobile_no=$_SESSION["mobile_no"];

}
else{
		$mobile_no=$_POST["phonenumber"];
}




$conn = new mysqli("localhost","root","","foodordering");
$maxid=0;

if(!isset($_COOKIE["oid"])){
			
$maxidquery="SELECT MAX(oid) AS LargestId
FROM orders";

$maxresult=$conn->query($maxidquery); 

$row=$maxresult->fetch_assoc();

$maxid=$row["LargestId"];
$maxid= $maxid+1;
setcookie("oid",$maxid);

}
else{

				$maxid=$_COOKIE["oid"];
}


$query="insert into orders(oid,pid,pname,uname,umobileno,uaddress,Quantity,Amount) values($maxid,$pid,'$pname','$uname','$mobile_no','$address',$quant,$pamount)";

	if($conn -> query($query) === TRUE){
			$queupdatepoduct="update products set availaible=availaible-$quant where id='$pid' and  availaible> 0";
			if(!$conn->query($queupdatepoduct)===TRUE){
				echo "error";
			} 
		?>
				<div class="alert alert-success">
						<strong style="text-transform: uppercase;">ORDER HAS BEEN SUCCESSFULLY PLACED!!!</strong>

							<a href="user-home.php">Continue Shopping</a>
				</div>	



				

			<?php

					}
					else{
			?>


 <div class="alert alert-danger">
    <strong>Sorry Order Could Not Be Placed</strong><br>Please try again Later
  </div>

<?php
		}

?>