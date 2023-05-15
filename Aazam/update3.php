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
		
<?php 
if (isset($_POST['submit'])) {
		 $first=$_POST['name'];
	

$sql = "SELECT * FROM user where id='$first'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
<form method="POST">
		ID<input type="text" name="id" value="<?php echo $row['id']; ?>"><br>
		Title<input type="text" name="title" value="<?php echo $row['title']; ?>"><br>
		Authore<input type="text" name="author" value="<?php echo $row['author']; ?>"><br>
		Date<input type="text" name="date" value="<?php echo $row['date']; ?>"><br>
		Post<input type="text" name="post" value="<?php echo $row['post']; ?>"><br>

		<input type="submit" name="update" value="UPDATE DETAILS">
	</form>
	


	<?php } } }

	if (isset($_POST['update'])) {
			
			$gg = $_POST['id'];
			$second=$_POST['title'];
			$third=$_POST['author'];
			$four=$_POST['date'];
			$five=$_POST['post'];
			

			

			echo $upl = "UPDATE table_1 SET title='$second', author='$third',date='$four', 
			        post='$five'where id='$gg'";
			$fff = $conn->query($upl);
			
			if($upl)
			{
				echo "Yes";
			}
			else
			{
				echo "no";
			}
		}

		?>
</body>
</html>