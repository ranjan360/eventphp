<!DOCTYPE html>
<html>
<head>
<title>Delete Data Using PHP- Demo Preview</title>

</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Delete Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", "navgurukul"); // Eastablishing Connection With Server.
$db = mysql_select_db("event", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from event where eventid=$del", $connection);
}
$query = mysql_query("select * from event", $connection); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {

}
?>
</div><?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysql_query("select * from event where eventid=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<form class="form">
<h2>---Details---</h2>
<span>Name:</span> <?php echo $row1['ename']; ?>
<span>E-mail:</span> <?php echo $row1['ename']; ?>
<span>Contact No:</span> <?php echo $row1['ename']; ?>
<span>Address:</span> <?php echo $row1['ename']; ?><

</form><?php
}
}
// Closing Connection with Server.
mysql_close($connection);
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</body>
</html>