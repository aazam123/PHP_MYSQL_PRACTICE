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
			$four=$_POST['radio'];
			$five=$_POST['checkbox'];

			echo $sql = "insert into thrid (name,email,address,gender,Hobies) value('$first','$second','$thrid','$four','$five')";

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
		<h1>Form</h1>
		Name<input type="text" name="name"><br>
		Email<input type="email" name="email"><br>
		Address<input type="address" name="address"><br>
		Gender<input type="radio" name="radio" value="male">Male
		      <input type="radio" name="radio" value="female">Female<br>
		Hobbeis<input type="checkbox" name="checkbox" value="Cricket">Cricket
		<input type="checkbox" name="checkbox" value="Hockie">Hockie<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>