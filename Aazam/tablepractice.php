<?php
	$host="localhost";
	$user="root";
	$pass="1234";
	$db="aazam";


	$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<style>
		table{
			border: 1px solid black;
		}
		tr th{
			border: 1px solid black;
		}
		td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<table>
		<tr>
		<th>Name</th>
		<th>Roll No.</th>
		<th>Number</th>
		<th>Qualification</th>
	    </tr>

<?php
$sql = "SELECT * FROM table_3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
	<tr>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["rollno"]; ?></td>
		<td><?php echo $row["contact"]; ?></td>
		<td><?php echo $row["qualification"]; ?></td>

	</tr>
	<?php
} 
}
?>
	</table>

</body>
</html>