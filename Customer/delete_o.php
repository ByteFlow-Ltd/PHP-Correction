<?php
$connect=mysqli_connect("localhost","root","","customer_info");
$id=$_GET['order_numb'];
$delete=mysqli_query($connect,"DELETE FROM Orders WHERE order_numb='$id'");
if($delete){
	header("location:ad orders.php");
}
?>