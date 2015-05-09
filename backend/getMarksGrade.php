<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "select * from course_user where PUserId=".$_POST['id'];
$result_student_marks = $conn->query($sql);       
while($student_marks = $result_student_marks->fetch_assoc())
{
	$Homework = $student_marks['Homework'];
	$Labs = $student_marks['Labs'];
	$Project = $student_marks['Project'];
	$Presentation = $student_marks['Presentation'];
	$Midterm = $student_marks['Midterm'];
	$Final = $student_marks['Final'];	
}
echo $Homework .'-'. $Labs .'-'. $Project .'-'. $Presentation .'-'. $Midterm .'-'. $Final .'-' ;

mysqli_close($conn);

?>