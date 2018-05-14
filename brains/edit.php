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

// sql to delete a record

if (mysqli_query($conn, $query)) {
    header('Location: http://localhost/event/brains/data.php');
} else {
    /*echo "Error deleting record: " . mysqli_error($conn);*/
}

mysqli_close($conn);
?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['row_id'])) {

        $rowToDelete = intval($_POST['row_id']);

        $index = 1; ?>
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
        while ($index < 10) { 

        	if ($index == 1) { ?>

        	<td><?php echo $rowToDelete; ?></td>

 <?php

        		}?>
        
        	
        		<td><input style="width: 100px;" value="Shakruddin" type="name"></td>
        	
        
        <?php
         $index++;
        }
        ?>
        <td><input type="submit" value="Update"></td>
        </tr>
		</table>
        <?php

/*        $query = "DELETE FROM event WHERE eventid=$rowToDelete"; // Or whatever your primary key is for the row, in my case "id". LIMIT 1 kind of gives added assurance that it won't delete tons of stuff if you make a mistake.
*/
       

/*        // Send the user back to the first page so they don't have that annoying pop-up if they hit the refresh button after deleting something.
        header('Location: http://localhost/event/brains/data.php'); // Obviously, replace with the location of the page that you need it to redirect to.*/
    }

}
	
?>
