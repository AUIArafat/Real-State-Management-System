<?php
extract($_REQUEST);
$input_name = $_REQUEST['input_name'];
$input_email = $_REQUEST['input_email'];
$input_comment = $_REQUEST['message'];
$id = $_REQUEST['id'];
date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d H:i:s');
include'config.php';
$query="insert into comments values('','$input_name','$input_email','$input_comment','$date','$id')";  
// print_r($query);
  $r=mysqli_query($con,$query);
$msg='';
if($r){
    $msg='1';
}

// header( "Location: ../property-single.php?id=".$id."&msg=".$msg);
echo "<script>window.location.href='../property-single.php?id=".$id."&msg=".$msg."';</script>";
?>