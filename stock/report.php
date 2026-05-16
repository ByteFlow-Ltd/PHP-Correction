<?php
$connect=mysqli_connect("localhost","root","","stock_management");
if(isset($_POST['report'])){
	$id=$_POST['Product_Name'];
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
			<input type="text" name="Product_Name"placeholder="enter product name"><br>
			<input type="submit" name="report" value="report">
		</form>
	</div>
	</section>
		<table border="2">
			<tr>
				<th colspan="2">Products</th>
				<th colspan="5">Stockin</th>
				<th colspan="3">Stockout</th>
			</tr>
			<tr>
				<th>Product_Id</th>
				<th>Product_Name</th>

				<th>Stockin_Id</th>
				<th>Date</th>
				<th>Quantity</th>
				<th>Unit_Price</th>
				<th>Total_Price</th>

				<th>Stockout_Id</th>
				<th>Date</th>
				<th>Quantity_Out</th>
			</tr>
			<?php
			$connect=mysqli_connect("localhost","root","","stock_management");
			$select=mysqli_query($connect,"SELECT * FROM Products WHERE Product_Id='$id'");
		    while($row=mysqli_fetch_array($select)){
		    	$idd=$row['Product_Id'];

		    $sele=mysqli_query($connect,"SELECT * FROM Stock_In WHERE Product_Id='$idd'");
	        $ro=mysqli_fetch_array($sele);


		$select=mysqli_query($connect,"SELECT * FROM Stock_Out WHERE Product_Id='$idd'");
	    $rows=mysqli_fetch_array($select);
			?>
			<tr>
			<td><?php echo $row['Product_Id']?></td>
			<td><?php echo $row['Product_Name']?></td>

			<td><?php echo $ro['Stockin_Id']?></td>
			<td><?php echo $ro['Date']?></td>
			<td><?php echo $ro['Quantity']?></td>
			<td><?php echo $ro['Unit_Price']?></td>
			<td><?php echo $ro['Total_Price']?></td>

			<td><?php echo $rows['Stockout_Id']?></td>
			<td><?php echo $rows['Date']?></td>
			<td><?php echo $rows['Quantity_Out']?></td>
			</tr>
			<?php
		}
		?>
		</table>
</body>
</html>