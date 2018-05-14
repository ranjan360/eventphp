<?php
include 'brains/conn.php';
session_start();
$save="";
if (isset($_SESSION["login"])) {
  if ($_SESSION["ut"]=="admin") {

  }
  else{
    $_SESSION["deauth"]="<div class='alert alert-info'>
    You Need to Login first.
    </div>";
    header('Location:index.php#login');
        die();
  }
}
  else {
    $_SESSION["deauth"]="<div class='alert alert-info'> You Need to Login first.</div>";
  header('Location:index.php#login');
      die();
  }

  if (isset($_SESSION["save"])) {
    $save=$_SESSION["save"];
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EVENT MANAGER</title>
<meta name="description" content="event">
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
<!-- Navigation-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html">EVENT MANAGER</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll"><i class="fas fa-home"></i>Profile</a></li>
        <li><a href="#my" class="page-scroll"><i class="fas fa-users"></i>My Books</a></li>
        <li><a href="#mye" class="page-scroll">SEE Events</a></li>
        <li><a href="#contact-section" class="page-scroll">Contact</a></li>

        <li><a href="out.php" class="page-scroll">Log Out</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<!-- Header -->

<header class="text-center rows-12" name="home" style="">

      <div class="intro-text col-sm-12 col-md-6 col-lg-6" style="margin-top:-4%;">
        <form class="well fu fu2" style="" id="fo" action="brains/savee.php" enctype="multipart/form-data" method="post" >
<?php echo $save; ?>
        <h3>Event Daalne form</h3>
          <div class="form-group">

          <input type="text" class="form-control" placeholder="Enter Event name" name="ename">
          </div>
          <div class="form-group">

          <input type="text" class="form-control" placeholder="Enter venue" name="venue">
          </div>
          <div class="form-group">

          <input type="text" class="form-control"  placeholder="Enter number of gold seats" name="gold">
          </div>
          <div class="form-group">

          <input type="text" class="form-control"  placeholder="enter number of silver seat" name="sil">
          </div>
          <div class="form-group">

          <input type="text" class="form-control"  placeholder="enter number of pletenium seat" name="pletenium">
          </div>
          <div class="form-group">

          <input type="text" class="form-control"  placeholder="enter date" name="date">
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  placeholder="enter diescription" name="des">
          </div>

          <div class="form-group">

          <input type="file" class="form-control"  placeholder="Choose a picture" name="image">
          </div>

          <input type="submit" class="btn btn-default btn-lg page-scroll" value="Save Event">

          </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="ajax.js">

        </script>
          <div class="but col-sm-12 col-md-6 col-lg-6">

            <br>
            <a href="#about-section" class="btn btn-default btn-lg page-scroll">About Us</a>
              <a href="#about-section" class="btn btn-default btn-lg page-scroll">share a Word</a>
          </div>

</header>

</div>

  <script type="text/javascript" src="aaa.js">

  </script>




  <div id="mye" class="" style="height:100vh;">
  <div class=" col-md-12 col-lg-12" style="text-align:center;width: 99.8%;height:100%;">
    <h2 class="well" style="background: rgba(0,0,0,0.2);font-size:400%;margin-left:auto;"><b>SEE EVENTS</b></h2>
    <hr style="width:100%;margin-bottom:5%;">

        <?php


        $sql="select * from event where state=0 order by eventid desc";
      if($resul=$conn->query($sql)){
        while($row=$resul->fetch_assoc()){

          $pic="brains/upload/".$row["pic"];
          $url="brains/list.php?q=".$row["eventid"];
          $url2="brains/close.php?q=".$row["eventid"];

?>
<div class="well bd btn btn-primary col-md-4 col-lg-4 " style="margin-left: 2%;text-align:center;display:inline-block;background-color:skyblue; width: 90%;">
<div class="col-md-6 col-lg-6">

  <h2 class="well" style=""><b> <?php echo $row["ename"]; ?> </b></h2>
<div class="container-fluid well" style="text-align:justify;text-decoration:underline;text-transform:uppercase;color:black;">
  <b>Vanue:<?php echo $row["venue"]; ?></b><br>
  <b><?php echo $row["datei"]; ?></b><br>
  <b><?php echo $row["des"]; ?></b><br>
  <img src="<?php echo $pic; ?>" alt="" style="width:100%;height:20%!important;">
</div>
<style media="screen">
  a{
    margin-top: 20%;
  }
</style>
<hr style="margin-top:-1%;width:100%; margin-bottom:7%;">
</div>
<div class="col-md-6 col-lg-6">

<a class="btn btn-primary" href="<?php echo $url; ?>">List of people</a> <br>
<a class="btn btn-danger" href="<?php echo $url2; ?>">Close Event</a>

</div>

<?php }}?>

       </div>
 <!--  <div class="well col-md-6 col-lg-6" style="text-align:center;margin-top:10%;">
  </div> -->
  </div>
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
