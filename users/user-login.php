


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>USER LOGIN</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


 
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FOOD GO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">LOGIN HERE</a></li>
      <li><a href="user-register.php">REGISTER </a></li>
      
    </ul>
  </div>
</nav>


  <?php
          if(isset($_GET["reg"])){
    ?>
          <h1 style="color: black;text-align: center;">REGISTERED SUCCESSFULLY</h1>
    <?php
      }

    ?>
<!--Header_section-->

<!--Header_section--> 

<section class="page_section" id="login"><!--page_section-->
<br/> <br/> <br/> 
<br/> 
<br/> 
<br/> 
<br/> 
<br/> 
	
  
<!--page_section-->
  
  <div class="col-lg-8 wow fadeInLeft delay-06s">
  
  				<div class="container">
			  <h2> PLEASE LOGIN HERE</h2>
			  <form action="authenticateuser.php" method="POST">
			    <div class="form-group" >
			      <label for="text">MOBILE NUMBER</label>
			      <input type="text" class="form-control" name="loginnumber"  placeholder="Enter MOBILE NUMBER">
			    </div>
			    <div class="form-group">
			      <label for="pwd">PASSWORD:</label>
			      <input type="password" class="form-control" name="userpassword"  placeholder="ENTER PASSWORD">
			    </div>
			    
								<button type="submit" class="btn btn-primary input-btn pull-center" name="login" > Login </button><br /><br/>


			  </form>


			</div>
      <?php
            if(isset($_GET["authfail"])){

      ?>
       <div class="alert alert-danger">
          <strong>Authetication Failed</strong> Please Check The Mobile Number And Password!
      </div>
      <?php
          }
      ?>

	</div>	
  


<br/> <br/> <br/> 
<br/> 
<br/> 
<br/> 
<br/> 
<br/> <br/> 
<br/> 
<br/> 

</section>



<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/wow.js"></script> 
 <script src="contact/jqBootstrapValidation.js"></script>
<!-- <script src="contact/contact_me.js"></script> -->
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="plugins/moment/moment.min.js"></script>
    <script type="text/javascript" src="plugins/datepicker/daterangepicker.js"></script>
	
	<script type="text/javascript">
            $(document).ready(function() {
              $('#joinbdate').daterangepicker({dateFormat: 'dd-mm-yyyy', 
                singleDatePicker: true,
Success!
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
    </script>
	
	<script type="text/javascript">
            $(document).ready(function() {
              $('#loginbdate').daterangepicker({dateFormat: 'dd-mm-yyyy', 
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
    </script>
	

</body>
</html>