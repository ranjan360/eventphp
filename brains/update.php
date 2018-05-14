<?php

	$ename = $_POST['ename'];
	$venue = $_POST['venue'];
	$gold = $_POST['gold'];
	$platenium = $_POST['platenium'];
	$sil = $_POST['sil'];
	$datei = $_POST['datei'];
	$des = $_POST['des'];
	$state = $_POST['state'];



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['row_id'])) {

        $rowToDelete = intval($_POST['row_id']);
        $query = "UPDATE event SET ename='$ename', venue='$venue', gold='$gold', platenium='$platenium', sil='$sil', datei='$datei', des='$des', state='$state'  WHERE eventid=$rowToDelete"; // Or whatever your primary key is for the row, in my case "id". LIMIT 1 kind of gives added assurance that it won't delete tons of stuff if you make a mistake.

       

/*        // Send the user back to the first page so they don't have that annoying pop-up if they hit the refresh button after deleting something.
        header('Location: http://localhost/event/brains/data.php'); // Obviously, replace with the location of the page that you need it to redirect to.*/
    }

}
	
?>

<?php
$servername = "localhost";
$username = "root";
$password = "navgurukul";
$dbname = "event";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (mysqli_query($conn, $query)) {
    header('Location: http://localhost/event/brains/data.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>