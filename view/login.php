<?php

	session_start();	

	$error = "";	

	if(isset($_POST['submit']))
	{			
		$conn = mysqli_connect("localhost","root","","mydb");
		if(!$conn)
		{
			echo "Connection failed";
			die();
		}
		
		if(empty($_POST["email"]) || empty($_POST["password"]))
		{
			$error = "Mandatory fields";
		}
		else
		{
			$email = $_POST["email"];
			$password = $_POST["password"];

			$sql = "select * from Login where email='$email' and password='$password'";		
			$result = $conn->query($sql);		
			$count = mysqli_num_rows($result);
			if(empty($count))
			{
				$error = "Wrong Credential";			
			}
			else
			{
				$error = "";
				$_SESSION['email'] = $email;
				header("location: home.php");
			}
			mysqli_close($conn);
		}
	}
?> 		
	