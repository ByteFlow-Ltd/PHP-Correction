<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
$id=$_GET['PId'];
$up=mysqli_query($connect,"SELECT * FROM Position");
while ($row=mysqli_fetch_array($up)){}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
</head>
<body>
<form method="POST">
	<h1>CHANGE POSITION</h1>
	<input type="text" name="PName"placeholder="enter postion name"><br>
	<input type="submit" name="update"value="update">
</form>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
if(isset($_POST['update'])){
$name=$_POST['PName'];
$update=mysqli_query($connect,"UPDATE Position SET PName='$name' WHERE PId='$id'");
if($update){
	header("location:add position.php");
}
}
	?>