<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">REGISTER HERE </h2><br>
  <form class="form-horizontal" action="dbuser-register.php" method="POST">
  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Name</label>
      <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="email" placeholder="Enter Full Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Mobile Number:</label>
      <div class="col-sm-10">
        <input name="mobilenumber" type="text" class="form-control" id="email" placeholder="Enter Mobile Number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address</label>
      <div class="col-sm-10">          
        <input type="text" name="address" class="form-control" id="pwd" placeholder="Enter Address">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>