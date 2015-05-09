<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "select * from users where ID=".$_POST['id'];
$result_student_info = $conn->query($sql);       
while($student_info = $result_student_info->fetch_assoc())
{
    echo $student_info['ID'] .'-'. $student_info['FirstName'] .'-'. $student_info['LastName'] .'-'. $student_info['EmailId'] .'-'. $student_info['Phone'] .'-' ;
}

// mysqli_close($conn);

?>