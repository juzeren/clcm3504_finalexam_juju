<?php 
	include "dbinfo.inc"; 
	include "connectDB.php"; //lin to DB
?>

<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		// Taking all values from the form data(input)
		
		$email = $_REQUEST['Email'];
				
		// Performing insert query execution
		// here our table name is email list
		$sql = "INSERT INTO subscribelist (email_address) VALUES ('$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Thank you for subscribing! </br>";

			echo nl2br("$email\n ");
			

		} else{
			echo "ERROR: Hush! Sorry $sql. </br>"
				. mysqli_error($conn); 
			
		}
		
		// Close connection
		mysqli_close($conn);
		echo "</br> After 3s, go back to the previous page! </br>";
		
		header('Refresh: 3, URL=../index.html'); 	
		?>
	</center>
</body>

</html>




