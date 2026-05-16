<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup form</title>
</head>
<body>
<form method="POST">
	<h1>SIGNUP FORM</h1>
	<input type="text" name="UserName"placeholder="enter user name"><br>
	<input type="password" name="Password"placeholder="enter user password"><br>
	<input type="submit" name="signup"value="signup">
</form>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","stock_management");
if(isset($_POST['signup'])){
	$name=$_POST['UserName'];
	$pass=$_POST['Password'];
	$signup=mysqli_query($connect,"INSERT INTO User VALUES('','$name','$pass')");
	if($signup){
		header("location:login.php");
	}
}
?>