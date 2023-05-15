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
	<form method="POST" >
		Name<input type="text" name="name"><br>
		Maths<input type="text" name="maths"><br>
		Physic<input type="text" name="physic"><br>
		Chemistry<input type="text" name="chemistry"><br>
		English<input type="text" name="english"><br>
		<input type="submit" name="submit">
	</form>
	<?php

			if (isset($_POST['submit'])) {
				
				$first=$_POST['name'];
				$second=$_POST['maths'];
				$thrid=$_POST['physic'];
				$four=$_POST['chemistry'];
				$five=$_POST['english'];

				

				 $sql = "insert into tbl_1(name,maths,physic,chemistry,english) value('$first','$second','$thrid','$four','$five')";
 			if(mysqli_query($conn, $sql)){
 				//header('location:Activity2.php');
 			}
 			else{
 				echo "Site Is Not Working";
 			}
 			echo"Name".$first;
 			echo"<br>";
 			$sum= $second+$thrid+$four+$five;
 			echo "Total = ".$sum;


		function get_percentage($total, $number)
		{
		  if ( $total > 0 ) {
		   return round($number * ($total / 100),2);
		  } else {
		    return 0;
		  }
		}
		echo"<br>";

		echo"Percentage = ";
		  echo get_percentage($sum,7).'%'; // 50%

		 
			}

			
	?>
		
</body>
</html>