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
</body>
</html>