	<?php
	$host="localhost";
	$user="root";
	$pass="1234";
	$db="aazam";

	$con=mysqli_connect($host,$user,$pass,$db);
	if (!$con) {
			echo "Site is Working";
		}

	if (isset($_POST['submit'])) {
		$first=$_POST['name'];
		$second=$_POST['rollno'];
		$thrid=$_POST['contact'];
		$four=$_POST['qualification'];


			echo $sql = "insert into table_3(name,rollno,contact,qualification) 
			value('$first','$second','$thrid','$four')";

			
		if(mysqli_query($con, $sql)){
 			echo "site is working</form>";
 			header('Location:insertselectpractice2.php'.$url);
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
		
		
		
		<input type="submit" name="submit">
	</form>
</body>
</html>