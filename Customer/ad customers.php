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
		<h1>INSERT CUSTOMERS</h1>
		<?php
	$connect=mysqli_connect("localhost","root","","customer_info");
	if(isset($_GET['product_code'])){
	$id=$_GET['product_code'];
	$select=mysqli_query($connect,"SELECT * FROM products,Orders WHERE product_code='$id'");
	$row=mysqli_fetch_array($select);
}
	?>
		<input type="number" name="customer_id"placeholder="enter customer id"><br>
		<input type="text" name="cust_fname"placeholder="enter first name"><br>
		<input type="text" name="cust_lname"placeholder="enter last name"><br>
		<input type="text" name="location"placeholder="enter location"><br>
		<input type="telephone" name="telephone"placeholder="enter phone number"><br>
		<input type="number" name="product_code" value="<?php echo $row['product_code']?>"><br>
		<input type="number" name="order_numb" value="<?php echo $row['order_numb']?>"><br>
		<input type="submit" name="customer"value="customer">
	</form>
</div>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_POST['customer'])){
	$id=$_POST['customer_id'];
	$fname=$_POST['cust_fname'];
	$lname=$_POST['cust_lname'];
	$location=$_POST['location'];
	$phone=$_POST['telephone'];
	$code=$_POST['product_code'];
	$number=$_POST['order_numb'];
	$customer=mysqli_query($connect,"INSERT INTO customers VALUES('$id','$fname','$lname','$location','$phone','$code','$number')");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>view customer</title>
</head>
<body>
<table border="2">
	<h1>VIEW CUSTOMER</h1>
	<tr>
		<th>customer_id</th>
		<th>firstname</th>
		<th>lastname</th>
		<th>location</th>
		<th>telephone</th>
		<th>product_code</th>
		<th>order_number</th>
		<th colspan="3">Action</th>
	</tr>
	<?php
	$connect=mysqli_connect("localhost","root","","customer_info");
	$select=mysqli_query($connect,"SELECT * FROM customers");
	while ($row=mysqli_fetch_array($select)){
	?>
	<tr>
		<td><?php echo $row['customer_id']?></td>
		<td><?php echo $row['cust_fname']?></td>
		<td><?php echo $row['cust_lname']?></td>
        <td><?php echo $row['location']?></td>
        <td><?php echo $row['telephone']?></td>
        <td><?php echo $row['product_code']?></td>
        <td><?php echo $row['order_numb']?></td>
        <td><a href="delete.php?product_code=<?php echo $row['product_code']?>">delete</a></td>
			<td><a href="update.php?product_code=<?php echo $row['product_code']?>">update</a></td>
			<td><a href="ad orders.php?product_code=<?php echo $row['product_code']?>">Orders</a>
        </tr>
	<?php
	}
	?>
</table>
</body>
</html>