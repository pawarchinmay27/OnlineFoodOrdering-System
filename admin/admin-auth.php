<?php 


	if($_POST["adminname"]==="admin"&&$_POST["adminpassword"]==="admin"){
		
					session_start();
					
					$_SESSION["username"]=$_POST["adminname"];
				
				header("Location:admin-home.php");

	}
	else{
				header("Location:admin-login.php?authfail=1");
	}

?>