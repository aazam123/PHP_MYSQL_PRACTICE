<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajju";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tbl_1 order by name ASC limit 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. "  " . $row["maths"]. " " . $row["physic"].  $row["chemistry"]. $row["english"]."<br>";
  }
} 
else 
{
  echo "0 results";
}
?>