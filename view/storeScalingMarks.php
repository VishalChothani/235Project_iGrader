<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "update courses set PHomework=".$_POST['hw'].", PLabs=".$_POST['lb'].",PProject=".$_POST['pro'].", PPresentation =".$_POST['pre'].", PMidterm = ".$_POST['mid'].", PFinal =".$_POST['fin']." WHERE ID=".$_POST['id'];
$result_updated = $conn->query($sql);

mysqli_close($conn);

?>