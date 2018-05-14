<?php
include 'conn.php';
// include 'data.php';
session_start();
$save="";
if (isset($_SESSION["login"])) {
  if ($_SESSION["ut"]=="admin") {

  }
  else{
    $_SESSION["deauth"]="<div class='alert alert-info'>
    You Need to Login first.
    </div>";
    header('Location:../index.php#login');

        die();
  }
}
  else {
    $_SESSION["deauth"]="<div class='alert alert-info'> You Need to Login first.</div>";
  header('Location:../index.php#login');
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <div id="my" class="" style="height:100vh;">
  <div class=" col-md-12 col-lg-12" style="text-align:center;width: 99.8%;height:100%;">
    <h2 class="well" style="background: rgba(0,0,0,0.2);font-size:400%;margin-left:auto;"><b>SEE PEOPLE WHO REGISTERED</b></h2>
    <hr style="width:100%;margin-bottom:5%;">

        <?php


        $sql="select * from transactions where state=0 ";
      if($resul=$conn->query($sql)){
        while($row=$resul->fetch_assoc()){
            $ui=$row["uid"];
            $t=$row["t_type"];
                    $sql="select * from users where userid='$ui' ";
                  if($resu=$conn->query($sql)){
                    while($low=$resu->fetch_assoc()){
                      $pic="upload/".$low["pic"];
                      $name=$low["name"];

?>
<div class="well bd btn btn-primary col-md-2 col-lg-2 " style="margin-left: 2%;text-align:center;display:inline-block;background-color:skyblue;">


  <h2 class="well" style="color:green;text-transform:uppercase;font-size:120%;"><b> <?php echo $name; ?> </b></h2>
<div class="container-fluid well" style="text-align:justify;text-decoration:underline;text-transform:uppercase;color:black;">
  <b>ID:<?php echo $ui; ?></b><br>
  <b>Type : <?php echo $t; ?></b><br>
  <img src="<?php echo $pic; ?>" alt="" style="width:100%;height:20%!important;">
</div>
<style media="screen">

</style>
<hr style="margin-top:-1%;width:100%; margin-bottom:7%;">


</div>

<?php }}}}?>

       </div>
  <div class="well col-md-6 col-lg-6" style="text-align:center;margin-top:10%;">
  </div>
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
