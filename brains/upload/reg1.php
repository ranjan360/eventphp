<?php
include 'conn.php';
//check done
if(isset($_POST['image'])){
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
      $name=$_POST["usern"];
      $p=$_POST["passw"];
      $c=$_POST["cpassw"];
      $ui=$_POST["useri"];
        $em=$_POST["em"];
if ($p==$c) {
  // code...
        $sql="INSERT INTO users (name, userid, password, email, pic) VALUES ('$name','$ui','$p','$em','$file_name')";


        if($conn->query($sql)){

          header('Location:../#login');
        }
        else{echo "failed".$conn->error;}

      }
      else {
        echo "password mismatch";
      }













   }else{
      echo $errors;
   }
}
else {
  echo "garbar";
}
 ?>
