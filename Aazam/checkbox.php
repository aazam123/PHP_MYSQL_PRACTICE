<?php
        $host="localhost";
		$user="root";
		$pass="1234";
		$db="aazam";

		$con=mysqli_connect($host,$user,$pass,$db);

		if (!$con) 
		{
			echo "Site is Not Working";
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>
	<form method="POST">
		Name<input type="text"  name="name"><br>
		Email<input type="email" name="email"><br>
		Address<input type="Address" name="address"><br>
		Gender<input type="radio" name="radio" value="male">Male
		<input type="radio" name="radio" value="female">Female<br>

		<label>Qualification</label>
		<select name="qualification">
			<option value="10th Pass" >10<small>th</small> Pass</option>
			<option value="12th Pass" >12<small>th</small> Pass</option>
			<option value="Diploma" >Graduate</option>
			<option value="Graduate" >Post Graduate</option>
		</select><br>

		<label>Course</label>
		<input type="checkbox" name="ccc" value="ccc">CCC
		<input type="checkbox" name="ccc" value="Photoshop">Photoshop
		<input type="checkbox" name="ccc" value="Web Devloping">Web Devloping<br>

		<label>About Me</label>
		<input  style="height: 150px;width: 230px;" type="text" name="message"><br>

		<input style="margin-left: 123px;" type="submit" name="submit">
		</form>
		<?php

		if (isset($_POST['submit'])) {
			
			$first=$_POST['name'];
			$second=$_POST['email'];
			$thrid=$_POST['address'];
			$four=$_POST['radio'];
			$five=$_POST['qualification'];
			$six=$_POST['ccc'];
			$seven=$_POST['message'];


	echo $sql = "insert into table_2 (name,email,address,gender,qualification,course,about) value('$first','$second','$thrid','$four','$five','$six','$seven')";

			
		if(mysqli_query($con, $sql))
		{
 			echo "site is Working";
 		}
 		else
 		{
 			echo "site is not working";
 		}				
		}
		?>
</body>
</html>