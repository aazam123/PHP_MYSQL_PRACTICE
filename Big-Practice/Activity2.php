<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="ajju";


	$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<form method="POST">
		Search<input type="text" name="azam">
		<input type="submit" name="submit">
	</form>

<?php 
if (isset($_POST['submit'])) {
	 $ten=$_POST['azam'];
	

$sql = "SELECT * FROM tbl_1 where name='$ten'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {



	    $a= $row["name"];
		$b= $row["maths"]; 
		$c= $row["physic"];
		$d= $row["chemistry"];
		$e= $row["english"]; 
		
		echo "Name".$a;echo"<br>";
		$sum=$b+$c+$d+$e;
		 echo"Total = ".$sum."<br>";

		  $dev=$sum/4;
		  echo "Parchentage = ".$dev;

		  echo"<br>";
		echo"Low Mark =".min($a,$b,$c,$d,$e); echo"<br>";
		echo"Hight Mark = ".max($b,$c,$d,$e);

		 ?>

<?php } } } ?>
</body>
</html>