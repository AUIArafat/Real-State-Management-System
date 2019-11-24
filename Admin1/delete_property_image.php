<?php 

include'include/config.php';

$sid=$_GET['x'];

$query2=mysqli_query($con,"select * from Documents where DocumentId='$sid'");
$image1=mysqli_fetch_array($query2);

$img1=$image1['Src1'];
$img2=$image1['Src2'];
$img3=$image1['Src3'];
$img4=$image1['Src4'];

unlink("images/property_image/$img1");
unlink("images/property_image/$img2");
unlink("images/property_image/$img3");
unlink("images/property_image/$img4");


mysqli_query($con,"delete from Documents where DocumentId='$sid'");
echo"<script>window.location.href='view_property_image.php';</script>";		
	

?>