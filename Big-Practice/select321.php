<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiren";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM table_1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["title"]. "  " . $row["author"]. " " . $row["date"]. $row["post"]. "<br>";
  }
} 
else 
{
  echo "0 results";
}
?>