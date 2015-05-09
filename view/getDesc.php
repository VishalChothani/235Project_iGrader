<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "select * from courses where ID = " . $_POST['id'];

$result_max_marks = $conn->query($sql);       
while($student_marks = $result_max_marks->fetch_assoc())
{	
	echo $student_marks['Description'];	
}

mysqli_close($conn);

?>