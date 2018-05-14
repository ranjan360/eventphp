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
<html>
<head>
	<title>data</title>
	<style>
	
		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		th, td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: #4CAF50;
		    color: white;
		}
	</style>
</head>
<body>

<?php
// include "auth.php";
include "delete.php";
include "edit.php";
$servername = "localhost";
$username = "root";
$password = "navgurukul";
$dbname = "event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM event";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    ?>
	<table>
			  <tr>
			    <th>eventid</th>
			    <th>Ename</th>
			    <th>venue</th>
			    <th>gold</th>
			    <th>platenium</th>
			    <th>sil</th>
			    <th>datei</th>
			    <th>des</th>
			    <th>pic</th>
			    <th>state</th>
			    <th>Edits</th>
			    <th>Deletes</th>

			  </tr>

	<?php
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>'.$row["eventid"].'</td><td id="ename">'.$row["ename"].'</td><td id="venue">'.$row["venue"].'</td><td id="gold">'.$row["gold"].'</td><td id="platenium">'.$row["platenium"].'</td><td id="sil">'.$row["sil"].'</td><td id="datei">'.$row["datei"].'</td><td id="des">'.$row["des"].'</td><td id="pic">'.$row["pic"].'</td><td id="state">'.$row["state"].'</td><td><form action="edit1.php" method="post"><input type="hidden" value="'.$row['eventid'].'" name="row_id"><input type="submit" value="Update"></form></td><td><form action="delete.php" method="post"><input type="hidden" value="'.$row['eventid'].'" name="row_id"><input type="submit" value="Delete"></form></td></tr>';
    }
    ?>

    
    </table>
    <?php
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>

<!-- .$row['eventid']. -->