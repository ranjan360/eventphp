<?php
session_start();
if (isset($_SESSION["done"])) {
$msg=$_SESSION["done"];
unset($_SESSION["done"]);
}
else {
  $msg="";
}
if (isset($_SESSION["login"])) {
  if ($_SESSION["secret"]=="pp0299387479797") {
    header('Location:profile.php');
  }
  else{
    $onmi="nope";
  }

}
if (isset($_SESSION["err"])) {
$err=$_SESSION["err"];
unset($_SESSION["err"]);
}
else {
  $err="";
}
if (isset($_SESSION["deauth"])) {
$deauth=$_SESSION["deauth"];
unset($_SESSION["deauth"]);
}
else {
  $deauth="";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EVENT MANAGER</title>
<meta name="description" content="Event">
<meta name="author" content="Badal Mishra">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php">EVENT MANAGER </a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="#about" class="page-scroll"><i class="fas fa-users"></i>About</a></li>
          <li><a href="#services-section" class="page-scroll"><i class="fas fa-calendar-alt"></i>Events</a></li>
          <li><a href="#login" class="page-scroll">Login</a></li>
      </ul>
    </div>

  </div>
  <!-- /.container-fluid -->
</nav>

<!-- Header -->

<header  class="text-center" name="home">

    <div class="intro-text col-sm-12 col-md-6 col-lg-6" style="padding-top:20%;">
      <h1>Welcome to:<span class="color">EVENT MANAGER</span></h1>

      <p>Never miss the mob</p>

    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="ajax.js">

  </script>
      <div class="but col-sm-12 col-md-6 col-lg-6" style="padding-top:2%;">
       <a href="#">

          </a> <br>
        <a href="#about" class="btn btn-default btn-lg page-scroll">About Us</a>
          <a href="#about-section" class="btn btn-default btn-lg page-scroll">share a Word</a>
      </div>

</header>

<!-- About Section -->
<div id="about" style="padding-top:5%;text-align:center;">
  <br><br>
  <div class="container" >
    <div class="section-title">
      <h2>About Us</h2>

    </div>
    <div  class="space"></div>
    <div class="row texta">
      <div style="text-align:justify;" class="col-md-6">
        <center><h4>Some Words on Us</h4></center>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
      </div>
      <div class="col-md-6" style="text-align:justify;">
      <center>  <h4>Why We</h4></center>
        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum.</p>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<script type="text/javascript" src="mmm.js">

</script>

<!-- Portfolio Section -->

<div id="login">

<form class="well fu fu1" id="fo" action="brains/stu.php" method="post">
<?php echo $err; ?>
<?php echo $deauth; ?>
<div class="form-group">
<label for="pwd">User:</label>
<input type="text" class="form-control" placeholder="Enter user name" name="useri">
</div>
<div class="form-group">
<label for="pwd">Password:</label>

<input type="password" class="form-control"  placeholder="Enter password" name="passw">

</div>

<input type="submit" class="btn btn-default btn-lg page-scroll" value="Login">
<button type="button"class="btn btn-default btn-lg sw" name="button">Register</button>
</form>


<form class="well fu fu2" style="display:none;" id="fo" action="brains/reg1.php" enctype="multipart/form-data" method="post" >
<h3>Registration</h3>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Your Full Name" name="usern">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="User Name" name="useri">
  </div>

  <div class="form-group">
    <input type="password" class="form-control"  placeholder="Enter password" name="passw">
  </div>

  <div class="form-group">
    <input type="password" class="form-control"  placeholder="Confirm password" name="cpassw">
  </div>

  <div class="form-group">
    <input type="file" class="form-control"  placeholder="Choose a picture" name="fileToUpload">
  </div>

  <div class="form-group">
    <input type="email" class="form-control"  placeholder="Enter email id" name="em">
  </div>

  <input type="submit" class="btn btn-default btn-lg page-scroll" name="Register" value="Register">
  <button type="button" name="button" class="btn btn-default btn-lg sw">Login</button>
</form>


</div>
<script type="text/javascript">
  $('.sw').click(function() {
$('.fu').toggle();
  });
</script>




<div id="footer">
  <div class="container">
    <p>Copyright &copy; Ranjan. Designed by Ranjan Roy</a></p>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
