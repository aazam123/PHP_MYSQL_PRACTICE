<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajju";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tbl_1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    "Name: " . $row["name"]. "  " . $row["maths"]. " " . $row["physic"]. $row["chemistry"]. $row["english"] ."<br>";
  }
} 
else 
{
  echo "0 results";
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<form method="POST">
		<select name="name">
			<option value="name">Name</option>
			<option value="maths">Maths <?php echo $row["maths"] ?></option>
			<option value="physic">physic <?php echo $row["physic"] ?></option>
			<option value="chemistry">Chemistry <?php echo $row["chemistry"] ?></option>
			<option value="english">english <?php echo $row["english"] ?></option>
		</select>

			<select name="limit">
			<option>Limit</option>
			<option value="1">1 </option>
			<option value="2">2 </option>
			<option value="3">3 </option>
			<option value="4">4 </option>
			<option value="5">5 </option>
			<option value="6">6 </option>
			<option value="7">7 </option>
			<option value="8">8 </option>
			<option value="9">9 </option>
			<option value="10">10 </option>
		</select>

		<select name="asc">
			<option value="ASC">ASC</option>
			<option value="DESC">DESC</option>
		</select>

		<input type="submit" name="submit">
	</form>
			<?php
					if (isset($_POST['submit'])) {
						
					     echo $first=$_POST['name'];
					     echo $second=$_POST['limit'];
						 echo $third=$_POST['asc'];

 			echo $ipo = "SELECT $first FROM tbl_1 ";
						
$stock = $conn->query($ipo);

if ($stock-> num_rows > 0) {
 
  while($rw = $stock->fetch_assoc()) {
    echo  $rw["$first"]."<br>";
  }
} 
else 
{
  echo "0 results";
}

} 
else 
{
  echo "0 results";
}
?>
</body>
</html>