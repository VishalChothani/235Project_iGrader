<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

// echo $_POST['id'];

$sql = "select * from users where id in (select PUserId from course_user where PCourseId = " . $_POST['id'] . " )";     
// echo $sql;
$result_student = $conn->query($sql);       
while($student = $result_student->fetch_assoc())
{
    echo $student['ID'] . ' - ' . $student['FirstName'] . ';';
}

mysqli_close($conn);

?>