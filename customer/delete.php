<?php
$connect=mysqli_connect("localhost","root","","customer_info");
$id=$_GET['product_code'];
$delete=mysqli_query($connect,"DELETE FROM products WHERE product_code='$id'");
if($delete){
	header("location:ad products.php");
}
?>