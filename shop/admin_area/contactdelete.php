<?php
include("config.php");
$cid = $_GET['id'];
$sql = "DELETE FROM contact WHERE cid = {$cid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	echo "<script> alert('Message Has Been Deleted') </script>";

	echo "<script>window.open('index.php?view_slides','_self')</script>";
}
else{
echo "<script> alert('Message Not Deleted') </script>";

	echo "<script>window.open('index.php?view_slides','_self')</script>";
}
mysqli_close($con);
?>