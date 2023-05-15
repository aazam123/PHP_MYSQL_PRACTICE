<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="hiren";


    $conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit" value="Search">
    </form>

   
<?php
    if (isset($_POST['submit']))
     {
        $first=$_POST['name'];

        $del = "DELETE FROM table_1 WHERE id='$first'";
        $dl = mysqli_query($conn, $del);

        if($dl)
        {
            echo "$first"." "."is delete";
        }
        else
        {
            echo "City Is Smart";
        }
    }
?>
</table>
</body>
</html>