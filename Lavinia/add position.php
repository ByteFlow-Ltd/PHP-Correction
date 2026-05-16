<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ad postion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Welcome to lavinia recruitment management👨‍🎓🏡</h2>
	<section class="conteiner">
		<div class="menu">
			<a href="add position.php"><div>position</div></a>
			<a href="ad candidate.php"><div>candidate</div></a>
			<a href="report.php"><div>Report</div></a>
			<a href="logout.php"><div>Logout</div></a>
		</div>
<div class="content">
<form method="POST">
	<h1>INSERT POSITION</h1>
	<input type="text" name="PName"placeholder="enter postion name"><br>
	<input type="submit" name="position"value="position">
</form>
</div>
</section>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
if(isset($_POST['position'])){
$name=$_POST['PName'];
$position=mysqli_query($connect,"INSERT INTO Position VALUES('','$name')");
}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>view</title>
	</head>
	<body>
	<table border="2">
		<tr>
			<th>PostId</th>
			<th>PostName</th>
			<th colspan="3">Action</th>
		</tr>
		<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
$select=mysqli_query($connect,"SELECT * FROM Position");
while ($row=mysqli_fetch_array($select)){
	?>
	<tr>
		<td><?php echo $row['PId']?></td>
		<td><?php echo $row['PName']?></td>
		<td><a href="delete.php?PId=<?php echo $row['PId']?>">delete</a></td>
		<td><a href="update.php?PId=<?php echo $row['PId']?>">update</a></td>
		<td><a href="ad candidate.php?PId=<?php echo $row['PId']?>">candidat resuts</a></td>
	</tr>
	<?php
}
		?>
	</table>
	</body>
	</html>
