<?php
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_GET['product_code'])){
$id=$_GET['product_code'];
$select=mysqli_query($connect,"SELECT * FROM products");
while($row=mysqli_fetch_array($select)){}
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
		<h1>CHANGE PRODUCT</h1>
		<input type="number" name="product_code"placeholder="enter product id"><br>
		<input type="text" name="product_name"placeholder="enter product name"><br>
		<input type="number" name="product_quantity"placeholder="enter quantity"><br>
		<input type="number" name="product_unit_price"placeholder="enter unit price"><br>
		<input type="submit" name="update"value="update">
	</form>
	</div>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_POST['update'])){
	$code=$_POST['product_code'];
	$name=$_POST['product_name'];
	$quantity=$_POST['product_quantity'];
	$unit=$_POST['product_unit_price'];
	$total=$unit*$quantity;
	$update=mysqli_query($connect,"UPDATE products SET product_code='$code',product_name='$name',product_quantity='$quantity',product_unit_price='$unit',product_total_price='$total' WHERE product_code='$code'");
	if($update){
		header("location:ad products.php");
	}

}
?>