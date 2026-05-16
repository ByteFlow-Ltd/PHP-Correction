<?php
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_GET['order_numb'])){
$id=$_GET['order_numb'];
$update=mysqli_query($connect,"SELECT * FROM Orders");
while ($row=mysqli_fetch_array($update)){} 
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>welcame to customers management🤷‍♂</h2>
<div class="menu">
	<a href="ad products.php">product</a>
	<a href="ad customers.php">customers</a>
	<a href="ad orders.php">orders</a>
	<a href="ad report.php">report</a> 
	<a href="logout.php">logout</a>
</div>
<div class="content">
<form method="POST">
	<h1>CHANGE ORDERS</h1>
	<?php
	$connect=mysqli_connect("localhost","root","","customer_info");
	if(isset($_GET['product_code'])){
	$id=$_GET['product_code'];
	$select=mysqli_query($connect,"SELECT * FROM  products WHERE product_code='$id'");
	$row=mysqli_fetch_array($select);
}
	?>
	<input type="date" name="order_date"placehoder="enter order date"><br>
	<input type="number" name="order_numb"placehoder="enter order number"><br>
	<input type="submit" name="update"value="update">
</form>
</div>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_POST['update'])){
	$date=$_POST['order_date'];
	$number=$_POST['order_numb'];
	$order=mysqli_query($connect,"UPDATE Orders SET order_date='$date',order_numb='$number'WHERE order_numb='$id'");
	if($update){
		header("location:ad orders.php");
	}
}
?>