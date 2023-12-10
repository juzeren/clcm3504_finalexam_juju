<?php 
	include "dbinfo.inc"; 
	include "connectDB.php"; //lin to DB
?>

<!DOCTYPE html>
<html>

<head>
	<title>Signup Page</title>
</head>

<body>
	<center>
		<?php		

		//if(!isset($_POST['submit'])){
		//	exit("错误执行");
		//}//判断是否有submit操作

		$username = $_REQUEST['username'];//get the username from sign up
		$email    = $_REQUEST['email'];//get the email from sign up
		$password = $_REQUEST['password'];////get the password from sign up

		$sql = "INSERT INTO users (username, email, userpassword) VALUES ('$username', '$email', '$password')";

		if(mysqli_query($conn, $sql)){
			echo "<h3>Registered successfully! </br>";
		} else{
			echo "ERROR: Hush! Sorry $sql. </br>"
				. mysqli_error($conn); 			
		}
		
		// Close connection
		mysqli_close($conn);
		echo "</br> After 3s, go back to the Signin page! </br>";
		
		header('Refresh: 3, URL=../sign in.html'); 	
		?>
	</center>
</body>

</html>




