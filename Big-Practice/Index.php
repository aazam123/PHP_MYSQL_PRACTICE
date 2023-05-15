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
		<h1>Admin Panel</h1>
		<nav>
			<ul>
				
				<li><a href="add.php">Add Data</a></li>
				<li><a href="view.php">View Data</a></li>
				<li><a href="update.php">Update Data</a></li>
				<li><a href="delete.php">Delete Data</a></li>
				<input type="text" name="name">
				<li><a name="suffer" href="">Search Data</a></li>
			</ul>
		</nav>
	</header>
	
	
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
<h1>Delete Data</h1>
<form method="POST">
		
		

		<table border="1px solid black">
		<tr>
		<th>Name</th>
		<th>Mobile No.</th>
		<th>City</th>
		<th>States</th>
		<th>Country</th>
		<th>Delete</th>

	    </tr>
<?php 

		
		
$sql = "SELECT * FROM table_1 where 1 ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
?>
	    <tr>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["mobile"]; ?></td>
		<td><?php echo $row["city"]; ?></td>
		<td><?php echo $row["state"]; ?></td>
		<td><?php echo $row["country"]; ?></td>
		<td><form method="POST"><input type="submit" name="delete" value="Delete Data"></form></td>
		<?php
			
				
				$del = "DELETE FROM table_1 WHERE city=''";
		$dl = mysqli_query($conn, $del);

		if($dl)
		{
			echo "City Is Gayab";
		}
	    else
	    {
	    	echo "City Is Smart";
	    }

		?>
	</tr> 
	<?php } } ?>
</table>

<h1>Update Data</h1>
<div class="upda_1">

<form method="POST">
		<input type="text" name="name1">
		<input type="submit" name="submit" value="Search">
	</form>
		
<?php 
if (isset($_POST['submit'])) {
		 
	

$sql = "SELECT * FROM table_1 where 1 ";

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
	


	<?php } } }

	if (isset($_POST['update'])) {
			
			$second=$_POST['name'];
			$thrid=$_POST['mobile'];
			$four=$_POST['city'];
			$five=$_POST['state'];
			$six=$_POST['country'];
			

			echo $upl = "UPDATE table_1 SET name='$second', mobile='$third',city='$four', 
			        state='$five', country='$six'  where id='$gg'";
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
</div>
	
</body>
</html>