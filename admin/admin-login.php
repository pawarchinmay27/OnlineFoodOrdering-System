<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
			<script src="css/jquery.js"></script>
			<link rel="stylesheet" type="text/css" href="css/w3.css">
  			<script src="css/boot.js"></script>
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
  <h2 style="text-align: center;">ADMIN LOGIN</h2><br><br>
  <form class="form-horizontal" action="admin-auth.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="adminname" id="email" placeholder="Enter Username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="adminpassword" placeholder="Enter Password">
      </div>
    </div>
    <div class="form-group">        
     
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
   <?php
            if(isset($_GET["authfail"])){

      ?>
       <div class="alert alert-danger">
          <strong>Authetication Failed</strong> Please Check The Username And Password!
      </div>
      <?php
          }
      ?>
</div>

</body>
</html>