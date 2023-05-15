<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "ajju";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM radio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
  	echo "<table border='1px solid black'>";
    echo  "<th>"."Name:"."</th>"."<tr>".$row["name"]. "  " ."<td>". $row["radio"]. "</td>"." " ."</tr>". "<br>";
    echo "</table>";
  }
} 
else 
{
  echo "0 results";
}
?>