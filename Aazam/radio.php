<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="name" ><br>
		<input type="radio" name="radio" value="Male">male
		<input type="radio" name="radio" value="Female">female
		<input type="submit" name="submit">
		</form>

		<?php
		$host="localhost";
		$user="root";
		$pass="1234";
		$db="ajju";

		$con=mysqli_connect($host,$user,$pass,$db);

		if (!$con) {
			echo "Site Is Working";
		}

		if (isset($_POST['submit'])) 
		{
			echo $first=$_POST['name'];
			echo $second=$_POST['radio'];
			
		

		echo $sql = "insert into radio(name,radio) value('$first','$second')";

 if(mysqli_query($con, $sql)){
 	echo "site is Working";
 }
 else{
 	echo "site is not working";
 }
}
?>
</body>
</html>