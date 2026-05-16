<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login form</title>
</head>
<body>
<form method="POST">
	<h1>LOGIN FORM</h1>
	<input type="text" name="UserName"placeholder="enter user name"><br>
	<input type="password" name="Password"placeholder="enter user password"><br>
	<input type="submit" name="login"value="login">
</form>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","stock_management");
if(isset($_POST['login'])){
	$name=$_POST['UserName'];
	$pass=$_POST['Password'];
	$login=mysqli_query($connect,"SELECT * FROM User WHERE UserName='$name'AND Password='$pass'");
	if(mysqli_num_rows($login)){
		$_SESSION['UserName']=$name;
		$_SESSION['Password']=$pass;
		header("location:index.php");
	}
	else{
 echo"<script>alert('Your UserName Or Password Is Incorrect ⚡');window.location.href='login.php' </script>";
	}
}
?>