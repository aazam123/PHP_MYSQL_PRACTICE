<?php
	$host="localhost";
	$user="root";
	$pass="1234";
	$db="ajay";


	$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

    $sql= "DELETE FROM 'first' WHERE id='4'";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
    	echo "Deleted";
    }
    else
    {
    	echo "Not Delete";
    }
}
?>
<h1>RRR</h1>
<h2>Hello World</h2>

</body>
</html>
