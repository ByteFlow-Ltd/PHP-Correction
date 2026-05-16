<?php
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_POST['report'])){
	$name=$_POST['product_name'];
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
	<H1>REPORT CUSTOMERS</H1>
	<input type="text" name="product_name"placeholder="enter customers name"><br>
	<input type="submit" name="report"value="report">
</form>
</div>
<table border="2">
	<tr>
		<th colspan="5">customer</th>
		<th colspan="2">order</th>
		<th colspan="5">product</th>
	</tr>
	<tr>
		<th>customer_id</th>
		<th>cust_fname</th>
		<th>cust_lname</th>
		<th>location</th>
		<th>telephone</th>

		<th>order_date</th>
		<th>order_numb</th>

		<th>product_code</th>
		<th>product_name</th>
		<th>product_quantity</th>
		<th>product_unit_price</th>
		<th>product_total_price</th>
	</tr>
	<?php
	$connect=mysqli_connect("localhost","root","","customer_info");
 $select=mysqli_query($connect,"SELECT * FROM products WHERE product_name='$name'");
	while ($r=mysqli_fetch_array($se){
		$idd=$r['product_code']

    $sele=mysqli_query($connect,"SELECT * FROM Orders WHERE product_code='$idd'");
	$ro=mysqli_fetch_array($sele);

    $select=mysqli_query($connect,"SELECT * FROM products WHERE product_code='$idd'");
	$row=mysqli_fetch_array($select);
	?>
	<tr>
		<td><?php echo $r['customer_id']?></td>
		<td><?php echo $r['cust_fname']?></td>
		<td><?php echo $r['cust_lname']?></td>
        <td><?php echo $r['location']?></td>
        <td><?php echo $r['telephone']?></td>

        <td><?php echo $ro['order_date']?></td>
    	<td><?php echo $ro['order_numb']?></td>

    	<td><?php echo $row['product_code']?></td>
		<td><?php echo $row['product_name']?></td>
		<td><?php echo $row['product_quantity']?></td>
		<td><?php echo $row['product_unit_price']?></td>
		<td><?php echo $row['product_total_price']?></td>     
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>