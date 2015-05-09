<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "update courses set MHomework=".$_POST['hw'].", MLabs=".$_POST['lb'].",MProject=".$_POST['pro'].", MPresentation =".$_POST['pre'].", MMidterm = ".$_POST['mid'].", MFinal =".$_POST['fin']." WHERE ID=".$_POST['id'];
$result_updated = $conn->query($sql);

mysqli_close($conn);

?>