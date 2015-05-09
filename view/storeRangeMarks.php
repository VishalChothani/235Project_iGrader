<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "update courses set ARangeStart=".$_POST['ARange'].", BRangeEnd=".$_POST['ARange'].", BRangeStart=".$_POST['BRange'].", CRangeEnd=".$_POST['BRange'].", CRangeStart=".$_POST['CRange'].", DRangeEnd=".$_POST['CRange'].", DRangeStart=".$_POST['DRange'].", ERangeEnd=".$_POST['DRange'].", ERangeStart=".$_POST['ERange'].", FRangeEnd=".$_POST['ERange']." WHERE ID=".$_POST['id'];
$result_updated = $conn->query($sql);

mysqli_close($conn);

?>