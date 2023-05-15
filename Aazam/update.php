<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="aazam";


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
	

$sql = "SELECT * FROM tbl_1 where id='$first'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
<form method="POST">
		ID<input type="text" name="id" value="<?php echo $row['id']; ?>"><br>
		Name<input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
		Email<input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
		Address<input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
		Gender<input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br>
Qualification<input type="text" name="qualification" value="<?php echo $row['qualification']; ?>"><br>
		Coursh<input type="text" name="coursh" value="<?php echo $row['coursh']; ?>"><br>
		message<input type="text" name="message" value="<?php echo $row['message']; ?>"><br>
		<input type="submit" name="update" value="UPDATE DETAILS">
	</form>
	


	<?php } } }

	if (isset($_POST['update'])) {
			
			$gg = $_POST['id'];
			$second=$_POST['name'];
			$third=$_POST['email'];
			$four=$_POST['address'];
			$five=$_POST['gender'];
			$six=$_POST['qualification'];
			$seven=$_POST['coursh'];
			$eight=$_POST['message'];

			

			echo $upl = "UPDATE tbl_1 SET name='$second', email='$third',address='$four', 
			        gender='$five', qualification='$six', coursh='$seven', message='$eight'  where id='$gg'";
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