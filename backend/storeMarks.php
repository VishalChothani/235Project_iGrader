<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "update course_user set Homework=".$_POST['hw'].", Labs=".$_POST['lb'].",Project=".$_POST['pro'].", Presentation =".$_POST['pre'].", Midterm = ".$_POST['mid'].", Final =".$_POST['fin']." WHERE PUserId=".$_POST['id'];
$result_updated = $conn->query($sql);

mysqli_close($conn);

?>