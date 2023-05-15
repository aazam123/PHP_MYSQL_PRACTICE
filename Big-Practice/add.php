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
			
			$sql = "SELECT * FROM table_1 where name='$twelve' OR id='$twelve' OR city='$twelve' OR state='$twelve'OR country='$twelve' ";
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

	
	<section>
		<form method="POST">
		<h1>Add New Record</h1>
		<div class="cen">
			<div>Name</div>
				<input type="text" name="name">
			<div>Mobile No.</div>
				<input type="text" name="mobile">
			<div>City</div>
				<input type="text" name="city">
			<div>States</div>
				<input type="text" name="state">
			<div>Country</div>
				<input type="text" name="country"><br>
				<input type="submit" name="submit">
			</div>
			</form>
			<?php
			if (isset($_POST['submit'])) {
			
			$second=$_POST['name'];
			$thrid=$_POST['mobile'];
			$four=$_POST['city'];
			$five=$_POST['state'];
			$six=$_POST['country'];
			

			echo $sql = "INSERT INTO table_1 (name,mobile,city,state,country) value('$second','$thrid','$four','$five','$six')";

			if (mysqli_query($conn,$sql)) {
				echo "Site Is Working";
			}
			else{
				echo "site is not working";
			}
		}

			?>
	</section>
</body>
</html>