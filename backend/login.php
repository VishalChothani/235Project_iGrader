<?php
	
$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}
	
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql = "select * from login where email = '" . $email . "' and password= '" . $password . "'";
$result_login = $conn->query($sql); 
$count = mysqli_num_rows($result_login);
if(empty($count))
{
	echo false;
}
else
{
	echo true;
}


?> 		
	