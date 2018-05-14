<?php
session_start();
include 'conn.php';
if (isset($_SESSION["login"])) {
  if ($_SESSION["ut"]=="admin") {
$ui=$_SESSION["uid"];
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

$eid=$_REQUEST["q"];


  $sql1="UPDATE event SET state =1 WHERE eventid = $eid";
  $result1=$conn->query($sql1);
  $sql2="UPDATE transactions  SET state =1 WHERE bid = $eid";
  $result2=$conn->query($sql2);
  if(isset($result1) and isset($result2)){
    $_SESSION["tuc"]="<div class='alert alert-info'>
    Event Removed SUCCESSFULLY.
    <a href='profile.php#my' class='btn btn-primary'>Go Back</a>
    </div>";
    header('Location:../resp.php');
  }
  else {
    $_SESSION["suc"]="<div class='alert alert-danger'>
    ERROR in connection

    </div>";
    header('Location:../resp.php');
  }
 ?>
