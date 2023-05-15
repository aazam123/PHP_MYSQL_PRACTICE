<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="hiren";


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
		<th>Title</th>
		<th>Authore</th>
		<th>Date</th>
		<th>Post</th>
	    </tr>
<?php 
if (isset($_POST['submit'])) {
		echo $first=$_POST['name'];
	

$sql = "SELECT * FROM table_1 where id='$first'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
	    <tr>
		<td><?php echo $row["title"]; ?></td>
		<td><?php echo $row["author"]; ?></td>
		<td><?php echo $row["date"]; ?></td>
		<td><?php echo $row["post"]; ?></td>
	</tr> 
	<?php } } }?>
</table>
</body>
</html>