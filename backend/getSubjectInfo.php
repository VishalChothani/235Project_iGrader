<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "select * from courses where ID=".$_POST['id'];
$result_overall_marks = $conn->query($sql);       
while($overall_marks = $result_overall_marks->fetch_assoc())
{
	$MaxHomework = $overall_marks['MHomework'];
	$MaxLabs = $overall_marks['MLabs'];
	$MaxProject = $overall_marks['MProject'];
	$MaxPresentation = $overall_marks['MPresentation'];
	$MaxMidterm = $overall_marks['MMidterm'];
	$MaxFinal = $overall_marks['MFinal'];	

	$ScaleHomework = $overall_marks['PHomework'];
	$ScaleLabs = $overall_marks['PLabs'];
	$ScaleProject = $overall_marks['PProject'];
	$ScalePresentation = $overall_marks['PPresentation'];
	$ScaleMidterm = $overall_marks['PMidterm'];
	$ScaleFinal = $overall_marks['PFinal'];	

	$ARangeStart = $overall_marks['ARangeStart'];
	$ARangeEnd = $overall_marks['ARangeEnd'];	

	$BRangeStart = $overall_marks['BRangeStart'];
	$BRangeEnd = $overall_marks['BRangeEnd'];	

	$CRangeStart = $overall_marks['CRangeStart'];
	$CRangeEnd = $overall_marks['CRangeEnd'];	

	$DRangeStart = $overall_marks['DRangeStart'];
	$DRangeEnd = $overall_marks['DRangeEnd'];

	$ERangeStart = $overall_marks['ERangeStart'];
	$ERangeEnd = $overall_marks['ERangeEnd'];

	$FRangeStart = $overall_marks['FRangeStart'];
	$FRangeEnd = $overall_marks['FRangeEnd'];	
}

echo $MaxHomework .'-'. $MaxLabs .'-'. $MaxProject .'-'. $MaxPresentation .'-'. $MaxMidterm .'-'. $MaxFinal .'-' ;
echo $ScaleHomework .'-'. $ScaleLabs .'-'. $ScaleProject .'-'. $ScalePresentation .'-'. $ScaleMidterm .'-'. $ScaleFinal .'-' ;
echo $ARangeStart .'-'. $ARangeEnd .'-'. $BRangeStart .'-'. $BRangeEnd .'-'. $CRangeStart .'-'. $CRangeEnd .'-' ;
echo $DRangeStart .'-'. $DRangeEnd .'-'. $ERangeStart .'-'. $ERangeEnd .'-'. $FRangeStart .'-'. $FRangeEnd .'-' ;

mysqli_close($conn);

?>