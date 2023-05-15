<?php
			$host="localhost";
			$user="root";
			$pass="1234";
			$db="ajay";

			$con=mysqli_connect($host,$user,$pass,$db);
				 if (!$con) {
				 	echo "Site is Working";
				 }

		if (isset($_POST['submit'])) {
			
			$first=$_POST['name'];
			$second=$_POST['email'];
			$thrid=$_POST['address'];

			echo $sql = "insert into second (name,email,address) value('$first','$second','$thrid')";

			if (mysqli_query($con,$sql)) {
				echo "Site Is Working";
			}
			else{
				echo "site is not working";
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="name"><br>
		<input type="email" name="email"><br>
		<input type="address"name="address"><br>
		<input type="submit" name="submit">
	</form>
	</body>
</html>