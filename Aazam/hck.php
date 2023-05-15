<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "ajay";


$con = mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	echo "Something is wrong";
}


if(isset($_POST['submit']))
{
   $name = $_POST['name'];


  echo $sql = "insert into first(id, name) value('','$name')";
 if(mysqli_query($con, $sql))
{
	echo "Submitted";
}
else
{
	echo "not done";
}
}


?>

<html>
<head>
	<title>Hello World</title>
</head>
<body>

	<form method="POST">
		<input type="text" name="name"><br>
		<input type="submit" name="submit" value="Submit Details">
	</form>
</body>
</html>