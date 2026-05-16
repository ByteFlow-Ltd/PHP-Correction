<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="POST">
<input type="text" name="username"placeholder="enter user name"><br>
<input type="password" name="password"placeholder="enter user password"><br>
<input type="submit" name="signup"value="signup">
</form>		
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_POST['signup'])){
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$signup=mysqli_query($connect,"INSERT INTO users VALUES('','$name','$pass')");
	if($signup){
		header("location:login.php");
	}
	
}
?>