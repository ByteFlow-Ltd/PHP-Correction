
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
	<h1> INSERT STOCKIN</h1>
	<?php
	$connect=mysqli_connect("localhost","root","","stock_management");
	if(isset($_GET['Product_Id'])){
		$id=$_GET['Product_Id'];
		$select=mysqli_query($connect,"SELECT * FROM Products WHERE Product_Id='$id'");
		$row=mysqli_fetch_array($select);
	}
	?>
	<input type="number" name="Stockin_Id" value="<?php echo $row['Stockin_Id']?>"><br>
	<input type="number" name="Product_Id" value="<?php echo $row['Product_Id']?>"><br>
	<input type="date" name="Date" placeholder="enter date"><br>
	<input type="number" name="Quantity" placeholder="enter quantity"><br>
	<input type="number" name="Unit_Price" placeholder="enter unit price"><br>
	<input type="submit" name="Stockin" value="Stockin"><br>
</form>
</div>
</section>
<?php
$connect=mysqli_connect("localhost","root","","stock_management");
if(isset($_POST['Stockin'])){
	$st_id=$_POST['Stockin_Id'];
	$id=$_POST['Product_Id'];
	$date=$_POST['Date'];
	$quantity=$_POST['Quantity'];
	$unit=$_POST['Unit_Price'];
	$Total_Price=$quantity*$unit;
	$stockin=mysqli_query($connect,"INSERT INTO Stock_In VALUES('$st_id','$id','$date','$quantity','$unit','$Total_Price')");
	if($stockin){
		header("location:stockin.php");
	}
}
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table border="2">
	<h1>VIEW STOCKIN</h1>
	<tr>
		<th>Stockin_Id</th>
		<th>Product_Id</th>
		<th>Date</th>
		<th>Quantity</th>
		<th>Unit_Price</th>
		<th>Total_Price</th>
	</tr>
	<?php
	$connect=mysqli_connect("localhost","root","","stock_management");
	$select=mysqli_query($connect,"SELECT * FROM Stock_In");
	while ($row=mysqli_fetch_array($select)){
		?>
		<tr>
			<td><?php echo $row['Stockin_Id']?></td>
			<td><?php echo $row['Product_Id']?></td>
			<td><?php echo $row['Date']?></td>
			<td><?php echo $row['Quantity']?></td>
			<td><?php echo $row['Unit_Price']?></td>
			<td><?php echo $row['Total_Price']?></td>
		</tr>
		<?php
	}
	?>
</table>
</body>
</html>