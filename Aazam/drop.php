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
	<title>table</title>
</head>
<body>
	

<?php
$sql = "SELECT * FROM table_1";
$result = $conn->query($sql);

?>
<form method="post">
	<select name="city">
		<option>Select City</option>
	  	<?php
	  	$sql = "SELECT city FROM table_2";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) 
        {
        ?>
        <option value="<?php echo $row['city']; ?>"><?php echo $row["city"]; ?></option>
	   <?php } ?>
    </select>

	<select name="district">
	  <option>Select District</option>
	  <?php
	  $sql = "SELECT district FROM table_2";
      $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) 
        {
        ?>
        <option value="<?php echo $row['district']; ?>"><?php echo $row["district"]; ?></option>
	 <?php } ?>
	</select>

	<select name="states">
	  <option>Select State</option>
	  <?php
	  $sql = "SELECT states FROM table_2";
      $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) 
        {
        ?>
        <option value="<?php echo $row['states']; ?>"><?php echo $row["states"]; ?></option>
	   <?php } ?>
	</select>

	<select name="year">
	  <option>Select Year</option>
	  <?php
	  $sql = "SELECT year FROM table_2";
      $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) 
        {
        ?>
        <option value="<?php echo $row['year']; ?>"><?php echo $row["year"]; ?></option>
	    <?php } ?>
	</select>

	<input type="submit" name="submit" value="Submit Data">

	<?php
			if (isset($_POST['submit'])) {
				
				$first=$_POST['city'];
				$second=$_POST['district'];
				$thrid=$_POST['states'];
				$four=$_POST['year'];

				echo $sql = "insert into table_3(city,district,states,year) 
			value('$first','$second','$thrid','$four')";

			
		if(mysqli_query($conn, $sql)){
 			echo "site is working</form>";
 			}
 		else{
 				echo "site is not working";
 			}			
	}	
	?>
</form>
</body>
</html>