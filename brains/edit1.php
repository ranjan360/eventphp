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

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['row_id'])) {

        $rowToDelete = intval($_POST['row_id']);

        $query = "SELECT * FROM event WHERE eventid=$rowToDelete"; // Or whatever your primary key is for the row, in my case "id". LIMIT 1 kind of gives added assurance that it won't delete tons of stuff if you make a mistake.

       

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
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$result = $conn->query($query);

if ($result->num_rows > 0) { ?>
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

			  </tr>
        <tr>
<?php


    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
    <form action="update.php" method="post">
    	<td><?php echo $row["eventid"]; ?>
    	</td><td><input name="ename" style="width: 100px;" value="<?php echo $ename = $row["ename"]; ?>" type="name"></td>
    	<td><input name="venue" style="width: 100px;" value="<?php echo $venue= $row["venue"]; ?>" type="name"></td>
    	<td><input name="gold" style="width: 100px;" value="<?php echo $gold= $row["gold"]; ?>" type="number"></td>
    	<td><input name="platenium" style="width: 100px;" value="<?php echo $platenium= $row["platenium"]; ?>" type="number"></td>
    	<td><input name="sil" style="width: 100px;" value="<?php echo $sil= $row["sil"]; ?>" type="number"></td>
    	<td><input name="datei" style="width: 100px;" value="<?php echo $datei= $row["datei"]; ?>" type="name"></td>
    	<td><input name="des" style="width: 100px;" value="<?php echo $des= $row["des"]; ?>" type="name"></td>
    	<td><?php echo $row["pic"]; ?></td>
    	<td><input name="state" style="width: 100px;" value="<?php echo $state= $row["state"]; ?>" type="name"></td>
    	<td>
    		<input type="hidden" value="<?php echo $rowToDelete; ?>" name="row_id">
    		<input type="submit" value="Update">
    	</td>
    </form>

    <?php    
    }
    ?>
    
        </tr>
		</table>
    <?php
} else {
    echo "0 results";
}
$conn->close();
?>