<?php

	$usermobileno=$_POST["loginnumber"];

	$password=$_POST["userpassword"];


			$conn = new mysqli("localhost","root","","foodordering");
			if($conn -> connect_error){
				echo "Error connecting .Please try again".$conn -> connect_error;
			}
			else{
						$query= "select * from  users where mobile_no='$usermobileno' and password='$password' ";
			
							$result=$conn->query($query);
						

								if($result-> num_rows>0){
									$row=$result->fetch_assoc();
													
													session_start();
													$_SESSION["uname"]=$row["name"];
													$_SESSION["mobile_no"]=$row["mobile_no"];
													$_SESSION["address"]=$row["address"];
													header("Location:user-home.php");
								}
								else{
													header("Location:user-login.php?authfail=1");
								}


			}


?>