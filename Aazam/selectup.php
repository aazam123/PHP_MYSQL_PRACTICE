<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="agm";


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
		
<?php 
if (isset($_POST['submit'])) {
		 $first=$_POST['name'];
	

$sql = "SELECT * FROM table_1 where id='$first'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
	     
	<form method="POST">
		<input type="text" name="id" value="<?php echo $row['id']; ?>">
		<input type="text" name="city" value="<?php echo $row['city']; ?>">
		<input type="text" name="distric" value="<?php echo $row['district']; ?>">
		<input type="text" name="states" value="<?php echo $row['states']; ?>">
		<input type="text" name="year" value="<?php echo $row['year']; ?>">
		<input type="submit" name="update" value="UPDATE DETAILS">
	</form>
	


	<?php } } }

	if (isset($_POST['update'])) {

			$ff = $_POST['id'];
			$second=$_POST['city'];
			$third=$_POST['distric'];
			$four=$_POST['states'];
			$five=$_POST['year'];

			echo $upd = "UPDATE table_1 SET city='$second', district='$third', states='$four', 
			        year='$five' WHERE id='$ff'";
			$mql = $conn->query($upd);
			
			if($mql)
			{
				echo "Yes";
			}
			else
			{
				echo "no";
			}
		}

		?>
</table>
</body>
</html>