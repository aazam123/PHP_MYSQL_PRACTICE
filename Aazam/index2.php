<!DOCTYPE html>
<html>
<head>
	<title>HEllo World</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="name">
		 
		<select name="azam">
		<option>Gujrat</option>
		<option>Rajkot</option>
		<option>Ahemadabad</option>
		<option>Navagam</option>
		<option>Jetpur</option>
		<option>Junagadh</option>
		<option>Shapar</option>
		<option>Ghandinagar</option>
		<option>Porbandar</option></select>
		<input type="submit" name="submit">
	</form>
	<?php

	$host="localhost";
	$user="root";
	$pass="1234";
	$db="ajju";

	$con=mysqli_connect($host,$user,$pass,$db);

if (!$con)
	 {
		echo "Site Is Not Working";
	}

	if (isset($_POST['submit'])) {
		$first=$_POST['name'];
		$second=$_POST['azam'];
	

	echo $sql = "insert into table_1(name,azam) value('$first','$second')";

 if(mysqli_query($con, $sql)){
 	echo "site is Working";
 }
 else{
 	echo "site is not working";
 }
}
	
	?>
</body>
</html