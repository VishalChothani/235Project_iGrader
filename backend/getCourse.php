<?php
$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "select ID,CourseName from courses";     
$result_courses = $conn->query($sql);    
while($course = $result_courses->fetch_assoc())
{
    echo $course['ID'] . ' - ' . $course['CourseName'] . ';';
}


mysqli_close($conn);

?>