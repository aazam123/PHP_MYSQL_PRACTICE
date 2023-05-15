<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="hiren";

	$con=mysqli_connect($host,$user,$pass,$db);
	if (!$con) {
			echo "Site is Working";
		}

	if (isset($_POST['submit'])) {
		$first=$_POST['title'];
		$second=$_POST['author'];
		$thrid=$_POST['date'];
		$four=$_POST['post'];


			echo $sql = "insert into table_1(title,author,date,post) 
			value('$first','$second','$thrid','$four')";

			
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
	<title>Insert Select</title>
</head>
<body>
	<form method="POST">
		
		Title  <input type="text" name="title"><br>
		Authore  <input type="text" name="author"><br>
		Date  <input type="date" name="date"><br>
		Post <input type="file" name="post"><br>
		     <input type="submit" name="submit">
	</form>

</body>
</html>

