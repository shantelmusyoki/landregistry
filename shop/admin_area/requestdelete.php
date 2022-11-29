<?php
include("config.php");
$cid = $_GET['id'];
$sql = "DELETE FROM jonn WHERE cid = {$cid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	echo "<script> alert('Request Has Been Deleted') </script>";

	echo "<script>window.open('index.php?view_slides','_self')</script>";
}
else{
echo "<script> alert('Request Not Deleted') </script>";

	echo "<script>window.open('index.php?view_slides','_self')</script>";
}
mysqli_close($con);
?>