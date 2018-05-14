<?php
session_start();
if (isset($_SESSION["LOG"])) {
  if ($_SESSION["LOG"]=="KFDBLKJSALV8OEDHOIUHOQWFOE8OH@#") {
    header('Location:admin.php');
  }
  else{
    $onmi="nope";
  }
}
 ?>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>B & S</title>
<meta name="description" content="LoginPage">
<meta name="author" content="Badal Mishra">
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
<!-- Navigation--->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">PixelDust</a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll"><i class="fas fa-home"></i>Home</a></li>
        <li><a href="#about-section" class="page-scroll"><i class="fas fa-users"></i>About</a></li>
        <li><a href="#services-section" class="page-scroll"><i class="fas fa-calendar-alt"></i>Services</a></li>
        <li><a href="#works-section" class="page-scroll">Gallery</a></li>
        <li><a href="#contact-section" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="text-center rows-12" name="home" id="lo" style="padding-top:10%;">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="auth.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value=Submit" name="login" >
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <!--  <div class="bbb">

  <form class="well" id="msd" action="brains/adm.php" method="post" style="width:40%;margin:auto;">

    <div class="form-group">
    <label for="pwd">User:</label>
    <input type="text" class="form-control" placeholder="Enter user name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="pass">
    </div>

    <input type="submit" class="btn btn-default btn-lg page-scroll" value="Submit" style="font-size:120%;">
      </form>
    </div>
 -->
</header>
</body>
</html>
