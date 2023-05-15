<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="name"><br>
		<input type="text" name="email"><br>
		<input type="text" name="msg"><br>
		<input type="submit" name="submit">
	</form>
	<?php 

		$host="localhost";
		$user="root";
		$pass="1234";
		$db="hiren";

		$con=mysqli_connect($host,$user,$pass,$db);

		if (!$con) 
		{
			echo "Working Site";
		}


		if (isset($_POST['submit'])) 
		{
			$first=$_POST['name'];
			$second=$_POST['email'];
			$third=$_POST['msg'];

		
       echo $sql = "insert into table_1(name,email,message) value('$first','$second','$third')";

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