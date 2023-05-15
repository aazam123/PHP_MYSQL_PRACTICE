<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>

	<?php 

		$host="localhost";
		$user="root";
		$pass="1234";
		$db="ajju";


		
			$con=mysqli_connect($host,$user,$pass,$db);

			if (!$con) 
			{
				echo "Site is Not The Demo";
			}

				if (isset($_POST['submit'])){
			
			$first=$_POST['name'];
			$second=$_POST['number'];
			$third=$_POST['email'];

			echo $sql = "insert into aazam(name,number,email) value('$first','$second','$third')";
 			if(mysqli_query($con, $sql)){
 				echo "Site Is Working";
 			}
 			else{
 				echo "Site Is Not Working";
 			}
		 }
	 ?>

</body>
</html>