<?php
$connect=mysqli_connect("localhost","root","","customer_info");
$id=$_GET['customer_id'];
$delete=mysqli_query($connect,"DELETE FROM customers WHERE customer_id='$id'");
if($delete){
	header("location:ad customers.php");
}
?>