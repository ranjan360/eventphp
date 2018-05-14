<?php
include 'brains/conn.php';
session_start();
if (isset($_SESSION["login"])) {
  if ($_SESSION["secret"]=="pp0299387479797") {
  $pic="brains/upload/".$_SESSION["pic"];

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
  header('Location: index.php#login');
      die();
  }
  if ($_SESSION["ut"]=="admin") {
    header('Location: admin.php');
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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
<!-- Navigation--->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php">EVENT MANAGER</a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll"><i class="fas fa-home"></i>Profile</a></li>
        <li><a href="#my" class="page-scroll">SEE EVENTS</a></li>
        <li><a href="#mye" class="page-scroll"><i class="fas fa-users"></i>My Events</a></li>
        <li><a href="#contact-section" class="page-scroll">Contact</a></li>

        <li><a href="out.php" class="page-scroll">Log Out</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<!-- Header -->
<?php
 ?>

<header class="text-center rows-12" name="home" style="">

      <div class="intro-text col-sm-12 col-md-6 col-lg-6">
        <img src="<?php echo $pic; ?>" alt="user" width="30%"  class="img-thumbnail" height="30%;">
        <h1>   <?php echo $_SESSION["un"]; ?></h1>

        <p>SO, wanna catch up</p>

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="mmm.js">

  </script>
  <div id="my" class="" style="height:100vh;">
  <div class=" col-md-12 col-lg-12" style="text-align:center;width: 99.8%;height:100%;">
    <h2 class="well" style="background: rgba(0,0,0,0.2);font-size:400%;margin-left:auto;"><b>SEE EVENTS</b></h2>
    <hr style="width:100%;margin-bottom:5%;">

        <?php

        $ui=$_SESSION["uid"];
        $sql="select * from event where state=0 order by eventid desc";
      if($resul=$conn->query($sql)){
        while($row=$resul->fetch_assoc()){

          $pic="brains/upload/".$row["pic"];
          $a="unavailable ";
                    $b="unavailable ";
                              $c="unavailable ";
if ($row["gold"]>0) {
  $a="book";
  $urla="brains/hold.php?q=".$row["eventid"]."&r=gold";
}
if ($row["sil"]>0) {
  $b="book";
  $urlb="brains/hold.php?q=".$row["eventid"]."&r=sil";
}
if ($row["platenium"]>0) {
  $c="book";
  $urlc="brains/hold.php?q=".$row["eventid"]."&r=platenium";
}
?>
<div class="well bd btn btn-primary col-md-4 col-lg-4 " style="margin-left: 2%;text-align:center;display:inline-block;background-color:skyblue;">
<div class="col-md-6 col-lg-6">

  <h2 class="well" style="color:green;text-transform:uppercase;font-size:120%;"><b> <?php echo $row["ename"]; ?> </b></h2>
<div class="container-fluid well" style="text-align:justify;text-decoration:underline;text-transform:uppercase;color:black;display: block;">
  <b>Vanue:<?php echo $row["venue"]; ?></b><br>
  <b><?php echo $row["datei"]; ?></b><br>
  <b><?php echo $row["des"]; ?></b><br>
  <img src="<?php echo $pic; ?>" alt="" style="width:100%;height:20%!important;">
</div>

<hr style="margin-top:-1%;width:100%; margin-bottom:7%;">
</div>
<div class="col-md-6 col-lg-6">

<a class="btn btn-primary" href="<?php echo $urla; ?>"><?php echo $a." Gold" ?></a>
<br> <br>
<a class="btn btn-warning" href="<?php echo $urlb; ?>"><?php echo $b." Silver" ?></a>
<br> <br>
<a class="btn btn-danger" href="<?php echo $urlc; ?>"><?php echo $c." Broach" ?></a>
</div>
</div>

<?php }}?>

       </div>
 <!--  <div class="well col-md-6 col-lg-6" style="text-align:center;margin-top:10%;">
  </div> -->
  </div>
  <div id="mye" class="" style="height:100vh;">
  <div class=" col-md-12 col-lg-12" style="text-align:center;width: 99.8%;height:100%;">
    <h2 class="well" style="background: rgba(0,0,0,0.2);font-size:400%;margin-left:auto; margin-top: 10px;"><b>MY EVENTS</b></h2>
    <hr style="width:100%;margin-bottom:5%;">

        <?php

        $ui=$_SESSION["uid"];
        $sql="select * from transactions where uid='$ui' and state=0";
        if($resul=$conn->query($sql)){
        while($row=$resul->fetch_assoc()){
          $eid=$row["bid"];
          $t=$row["t_type"];
          $sql="select * from event where eventid=$eid";
        if($resu=$conn->query($sql)){
          while($low=$resu->fetch_assoc()){
          $pic="brains/upload/".$low["pic"];
          $name=$low["ename"];

?>
<div class="well bd btn btn-primary col-md-2 col-lg-2 " style="margin-left: 2%;text-align:center;display:inline-block;background-color:skyblue; width: 300px;">


  <h2 class="well" style="color:green;text-transform:uppercase;font-size:120%;"><b> <?php echo $name; ?> </b></h2>
<div class="container-fluid well" style="text-align:justify;text-decoration:underline;text-transform:uppercase;color:black;">
  <b>Vanue:<?php echo $low["venue"]; ?></b><br>
  <b><?php echo $low["datei"]; ?></b><br>
  <b><?php echo $low["des"]; ?></b><br>
  <img src="<?php echo $pic; ?>" alt="" style="width:100%;height:20%!important;">
  <br>
  <b><?php echo "type ".$t; ?></b>
</div>
<style media="screen">
  a{
    margin-top: 20%;
  }
</style>
<hr style="margin-top:-1%;width:100%; margin-bottom:7%;">
</div>


<?php }}}}?>

       </div>
  <!-- <div class="well col-md-6 col-lg-6" style="text-align:center;margin-top:10%;">
  </div> -->
  </div>





</body>
</html>
