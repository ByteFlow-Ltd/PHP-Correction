
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>trade</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Welcome Stock  management🧆🥗</h2>
	<section class="conteiner">
		<div class="menu">
			<a href="ad product.php"><div>Product</div></a>
			<a href="stockin.php"><div>Stockin</div></a>
			<a href="stockout.php"><div>Stockout</div></a>
			<a href="report.php"><div>Report</div></a>
			<a href="logout.php"><div>Logout</div></a>
		</div>
		<div class="content">
<form method="POST">
	<h1>INSERT PRODUCTS</h1>
	<input type="text" name="Product_Name"placeholder="enter Product"><br>
	<input type="submit" name="Product"value="Product">
</form>
</div>
</section>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","stock_management");
if(isset($_POST['Product'])){
	$name=$_POST['Product_Name'];
	$Product=mysqli_query($connect,"INSERT INTO Products VALUES('','$name')");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>view Product</title>
</head>
<body>
	<div class="content">
<table border="2">
	<h1>VIEW PRODUCT YOU HAVE</h1>
	<tr>
		<th>Product_Id</th>
		<th>Product_Name</th>
		<th colspan="4">Action</th>
	</tr>
	<?php
	$connect=mysqli_connect("localhost","root","","stock_management");
	$select=mysqli_query($connect,"SELECT * FROM Products");
	while ($row=mysqli_fetch_array($select)){
		?>
		<tr>
			<td><?php echo $row['Product_Id']?></td>
			<td><?php echo $row['Product_Name']?></td>
			<td><a href="delete.php?Product_Id=<?php echo $row['Product_Id']?>">delete</a></td>
			<td><a href="update.php?Product_Id=<?php echo $row['Product_Id']?>">update</a></td>
			<td><a href="stockin.php?Product_Id=<?php echo $row['Product_Id']?>">stockin</a></td>
			<td><a href="stockout.php?Product_Id=<?php echo $row['Product_Id']?>">stockout</a></td>
		</tr>
		<?php
	}
	?>
</table>
</div>
</body>
</html>