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
	<h1>LOGIN FORM</h1>
<input type="text" name="username"placeholder="enter user name"><br>
<input type="password" name="password"placeholder="enter user password"><br>
<input type="submit" name="login"value="login">
</form>		
</body>
</html>
<?php
session_start();
$connect=mysqli_connect("localhost","root","","customer_info");
if(isset($_POST['login'])){
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$login=mysqli_query($connect,"SELECT * FROM users WHERE username='$name' AND password='$pass'");
if(mysqli_num_rows($login)){
	$_SESSION['username']=$name;
	$_SESSION['password']=$pass;
	header("location:index.php");
}

	}
?>