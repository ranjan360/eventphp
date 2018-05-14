<?php
include 'conn.php';
session_start();
//check done

if(isset($_FILES['image'])){
   $errors= array();
   $file_name = $_FILES['image']['name'];
   $file_size =$_FILES['image']['size'];
   $file_tmp =$_FILES['image']['tmp_name'];
   $file_type=$_FILES['image']['type'];
   $file_name=strtolower($file_name);
   $info=explode('.',$file_name);
   $file_ext=strtolower(end($info));

   $expensions= array("jpeg","jpg","png");
   if(in_array($file_ext,$expensions)=== false){
      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
   }



   if(empty($errors)==true){
      move_uploaded_file($file_tmp,"upload/".$file_name);
      echo "Success for ".$file_name;
      $name=$_POST["ename"];
      $venue=$_POST["venue"];
      $gold=$_POST["gold"];
      $sil=$_POST["sil"];
      $ple=$_POST["pletenium"];
      $date=$_POST["date"];

  // code...
        $sql="INSERT INTO event (ename, venue, gold, sil, platenium, datei, des, pic) VALUES ('$name','$venue','$gold','$sil','$ple','$date','$des','$file_name')";


        if($conn->query($sql)){
          $_SESSION["save"]="<div class='alert alert-info' style='font-size:300%;'>
          Your event has been saved .
          </div>";
          header('Location:../admin.php');
        }
        else{echo "failed".$conn->error;}

   }else{
      echo $errors;
   }
}
else {
  echo "garbar";
}
 ?>
