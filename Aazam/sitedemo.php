<?php
	$host="localhost";
	$user="root";
	$pass="1234";
	$db="agm";

	$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HEllo World</title>
	
</head>
<body>
	<form>
		<select>
		<option>City</option>
		<option><?php $sql = "SELECT * FROM table_1 where name='city'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {echo  $row["city"];}} ?></option></select>

		<select>
		<option>District</option>
	     <option><?php $sql = "SELECT * FROM table_1 where name='district'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {echo $row["district"];}} ?></option></select>

		</option><select>
		<option>State</option>
		<option><?php  $sql = "SELECT * FROM table_1 where name='states'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {echo $row["states"];}} ?></select>

		<select>
		<option>Years</option>
		<option><?php  $sql = "SELECT * FROM table_1 where name='year'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {echo $row["year"];}} ?></select>
		<input type="submit" name="submit">


</form>
</body>
</html>