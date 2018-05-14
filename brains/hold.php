<?php
session_start();
include 'conn.php';
if (isset($_SESSION["login"])) {
  if ($_SESSION["secret"]=="pp0299387479797") {
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
$t=$_REQUEST["r"];

$sql="select * from transactions where uid='$ui' and bid=$eid and state=0";
$lol=$conn->query($sql);
while($row = $lol->fetch_assoc()) {
  if($row["bid"]==$eid){
    $_SESSION["herr"]="<div class='alert alert-warning'>
    You already have booked this event.
<a href='profile.php' class='btn btn-primary'>Go Back</a>
    </div>";
    header('Location:../resp.php');
    die();
  }
}
$sql="select * from event where eventid='$eid'";
$lol=$conn->query($sql);
while($row = $lol->fetch_assoc()) {
  if($row["$t"]<0){
    $_SESSION["herr"]="seat out of stock";
    header('Location:../resp.php');
    die();
  }
}
  $sql1="UPDATE event SET $t = $t - 1 WHERE eventid = $eid";
  $result1=$conn->query($sql1);
  $sql2="INSERT INTO transactions (bid, uid, t_type) VALUES ($eid, '$ui','$t')";
  $result2=$conn->query($sql2);
  if(isset($result1) and isset($result2)){
    $_SESSION["suc"]="<div class='alert alert-info'>
    BOOK HOLDED SUCCESSFULLY.
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
