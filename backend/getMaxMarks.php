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
	$Homework = $student_marks['MHomework'];
	$Labs = $student_marks['MLabs'];
	$Project = $student_marks['MProject'];
	$Presentation = $student_marks['MPresentation'];
	$Midterm = $student_marks['MMidterm'];
	$Final = $student_marks['MFinal'];	
}
echo $Homework .'-'. $Labs .'-'. $Project .'-'. $Presentation .'-'. $Midterm .'-'. $Final .'-' ;

mysqli_close($conn);

?>