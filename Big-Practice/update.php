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
	<h1>Update Data</h1>
<div class="upda_1">

<form method="POST">
		<input type="text" name="sosad">
		<input type="submit" name="submit" value="Search">
	</form>
		
<?php 
if (isset($_POST['submit'])) {
		 
	$ten=$_POST['sosad'];

$sql = "SELECT * FROM table_1 where name='$ten' OR id='$ten' OR city='$ten' OR state='$ten'OR country='$ten' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
<form method="POST">
		ID<input type="text" name="id" value="<?php echo $row['id']; ?>"><br>
		Name<input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
		Mobile<input type="text" name="Mobile" value="<?php echo $row['mobile']; ?>"><br>
		City<input type="text" name="city" value="<?php echo $row['city']; ?>"><br>
		States<input type="text" name="state" value="<?php echo $row['state']; ?>"><br>
        Country<input type="text" name="country" value="<?php echo $row['country']; ?>"><br>
		<input type="submit" name="update" value="UPDATE DETAILS">
	</form>
	


	<?php } } 

	if (isset($_POST['update'])) {
			$gg=$_POST['id'];
			$second=$_POST['name'];
			echo $thrd=$_POST['mobile'];
			$four=$_POST['city'];
			$five=$_POST['state'];
			$six=$_POST['country'];
			

			 $upl = "UPDATE table_1 SET name='$second', mobile='$thrd',city='$four', 
			        state='$five', country='$six'  where id='$gg'";
			$fff = $conn->query($upl);
			
			if($upl)
			{
				echo "";
			}
			else
			{
				echo "no";
			}
		}
}
		?>
</div>
</body>
</html>