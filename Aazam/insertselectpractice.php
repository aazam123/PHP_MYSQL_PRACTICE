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
			values('$first','$second','$thrid','$four')";

			
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
		
		Student Name  <input type="text" name="name"><br>
		Roll No.  <input type="text" name="rollno"><br>
		Contact No.  <input type="number" name="contact"><br>
		Std  <select name="qualification">
			<option value="10 PASS" >10 PASS</option>
			<option value="12 PASS">12 PASS</option>
			<option value="Graduate">Graduate</option>
			<option value="Post Graduate">Post Graduate</option>
		</select><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>