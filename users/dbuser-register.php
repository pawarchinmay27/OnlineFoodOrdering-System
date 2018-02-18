<?php


	$username=$_POST["username"];

	$mobilenumber=$_POST["mobilenumber"];

	 $password=$_POST["password"];

	$address=$_POST["address"];

	$conn=new mysqli("localhost","root","","foodordering");

				$query= "insert into users(name,password,mobile_no,address)values ".
				"('$username','$password','$mobilenumber','$address')";

				if($conn->query($query)===TRUE){
							header("Location:user-login.php?reg=1");
				}
				else{
						echo "Error  While Registering Please Try Again Later";
				}

?>