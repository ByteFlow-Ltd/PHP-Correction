<?php
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
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
	<h1>INSERT ORDERS</h1>
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
	<input type="submit" name="order"value="order">
</form>
</div>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_POST['order'])){
	$date=$_POST['order_date'];
	$number=$_POST['order_numb'];
	$order=mysqli_query($connect,"INSERT INTO Orders VALUES('$date','$number')");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>view order</title>
</head>
<body>
<table border="2">
	<h1>VIEW ORDERS</h1>
	<tr>
		<th>order_date</th>
		<th>order_numb</th>
		<th colspan="2">action</th>
	</tr>
	<?php
	$connect=mysqli_connect("localhost","root","","customer_info");
	$select=mysqli_query($connect,"SELECT * FROM Orders");
	while($row=mysqli_fetch_array($select)){
    ?>
    <tr>
    	<td><?php echo $row['order_date']?></td>
    	<td><?php echo $row['order_numb']?></td>
    	<td><a href="delete_o.php?order_numb=<?php echo $row['order_numb']?>">delete</a></td>
    	<td><a href="update_o.php?order_numb=<?php echo $row['order_numb']?>">update</a></td>
    	<td><a href="ad products.php?order_numb=<?php echo $row['order_numb']?>">product</a></td>
    </tr>
    <?php
	}
	?>
</table>
</body>
</html>