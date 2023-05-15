<?php
	$host="localhost";
	$user="root";
	$pass="1234";
	$db="ajju";


	$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="name">
		<input type="submit" name="submit" value="Search">
	</form>

	<table border="1px solid black">
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Village</th>
		<th>Gender</th>
		<th>Qualification</th>
		<th>course</th>
		<th>Message</th>

	    </tr>
<?php 
if (isset($_POST['submit'])) {
		echo $first=$_POST['name'];
	

$sql = "SELECT * FROM tbl_2 where name='$first'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
	    <tr>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["qualification"]; ?></td>
		<td><?php echo $row["coursh"]; ?></td>
		<td><?php echo $row["message"]; ?></td>
	</tr> 
	<?php } } }?>
</table>
</body>
</html>