<?php

	$host="localhost";
	$user="root";
	$pass="";
	$db="mns";


	$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<a href="index.php"><h1>Admin Panel</h1></a>
		
		<nav>
			<ul>
				
				<li><a href="add.php">Add Data</a></li>
				<li><a href="view.php">View Data</a></li>
				<li><a href="update.php">Update Data</a></li>
				<li><a href="delete.php">Delete Data</a></li>
				<form method="POST"><input type="text" name="sst">
				<input type="submit" name="suffer" value=" search data"></form>
			</ul>
		</nav>
	</header>
	<?php
		if (isset($_POST['suffer'])) {
			echo "yes";
			$twelve=$_POST['sst'];
			
			$sql = "SELECT * FROM table_1 where name='$twelve' OR id='$twelve' OR city='$twelve' OR state
			='$twelve'OR country='$twelve' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
<table>
	    <tr>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["mobile"]; ?></td>
		<td><?php echo $row["city"]; ?></td>
		<td><?php echo $row["state"]; ?></td>
		<td><?php echo $row["country"]; ?></td>

	</tr> 
	<?php } } }?>
</table>


<div class="site-sele">
		<h1>View Data</h1>

		<table border="1px solid black">
		<tr>
		<th>id</th>
		<th>Name</th>
		<th>Mobile No.</th>
		<th>City</th>
		<th>States</th>
		<th>Country</th>

	    </tr>
<?php 

$sql = "SELECT * FROM table_1 where 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
	    <tr>
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["mobile"]; ?></td>
		<td><?php echo $row["city"]; ?></td>
		<td><?php echo $row["state"]; ?></td>
		<td><?php echo $row["country"]; ?></td>
		
	</tr> 

	<?php } } ?>
</table>
	</div>

	</body>
</html>