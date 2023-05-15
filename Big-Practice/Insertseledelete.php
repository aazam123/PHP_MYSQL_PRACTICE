<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="mns";


	$con = new mysqli($host, $user, $pass, $db);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
if (isset($_POST['adda'])) {
			
			$second=$_POST['name'];
			$thrid=$_POST['mobile'];
			$four=$_POST['city'];
			$five=$_POST['state'];
			$six=$_POST['country'];


			echo $sql = "insert into table(name,mobile,city,state,country) value('$second','$thrid','$four','$five','$six')";

			
		if(mysqli_query($con, $sql)){
 			echo "site is Working";
 			}
 		else{
 				echo "site is not working";
 			}			
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>


<section>
		<form method="POST">
		<h1>Add New Record</h1>
		<div class="cen">
			<div>Name</div>
				<input type="text" name="name">
			<div>Mobile No.</div>
				<input type="text" name="mobile">
			<div>City</div>
				<input type="text" name="city">
			<div>States</div>
				<input type="text" name="state">
			<div>Country</div>
				<input type="text" name="country"><br>
				<input type="submit" name="adda">
			</div>
			</form>
	</section>
</body>
</html>