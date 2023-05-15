<?php
	$host="localhost";
	$user="root";
	$pass="1234";
	$db="agm";


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
	<form method="POST">
	<table>
		<tr>
		<th>ID</th>
		<th>City</th>
		<th>District</th>
		<th>States</th>
		<th>Year</th>
		<th>Delete Value</th>

	    </tr>

<?php
$sql = "SELECT * FROM table_1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
	<tr>
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["city"]; ?></td>
		<td><?php echo $row["district"]; ?></td>
		<td><?php echo $row["states"]; ?></td>
		<td><?php echo $row["year"]; ?></td>
	    <td><button><a href="?id=<?php echo $row['id']; ?>">Delete</a></button></td>
	    <td><input type="submit" name="submit"></td>
	</tr>
<?php
} 
}

if(isset($_POST))
{
	echo "yes";
}
?>
</table>
</form>

</body>
</html>