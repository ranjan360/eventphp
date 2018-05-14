<?php
include 'conn.php';
//check done


if(isset($_POST['Register'])){
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 90000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $image = basename( $_FILES["fileToUpload"]["name"]);
        echo $image;
        $name=$_POST["usern"];
        $p=$_POST["passw"];
        $c=$_POST["cpassw"];
        $ui=$_POST["useri"];
          $em=$_POST["em"];
  if ($p==$c) {
    // code...
          $sql="INSERT INTO users (name, userid, password, email, utype, pic, did) VALUES ('$name','$ui','$p','$em', '','$image', '0')";


          if($conn->query($sql)){

            header('Location:../#login');
          }
          else{echo "failed".$conn->error;}

        }
        else {
          echo "password mismatch";
        }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}else{
  echo "world";
};



?>
