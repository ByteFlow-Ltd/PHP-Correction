<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
$id=$_GET['PId'];
$delete=mysqli_query($connect,"DELETE FROM Position WHERE PId='$id'");
if($delete){
	header("location:add position.php");
}
?>