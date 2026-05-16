<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
$id=$_GET['CandidateNationlId'];
$up=mysqli_query($connect,"SELECT  * FROM CandidateResult");
while ($row=mysqli_fetch_array($up)){}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add candidate</title>
</head>
<body>
<form method="POST">
	<h1>CHANGE CANDIDATE RESULTS</h1>
	<?php
	$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
	if(isset($_GET['PostId'])){
	$id=$_GET['PostId'];
	$select=mysqli_query($connect,"SELECT * FROM Position WHERE PostId='$id'");
	while ($row=mysqli_fetch_array($select));
}
		?>

	<input type="text" name="FirstName"placeholder="enter firstname"><br>
	<input type="text" name="LastName"placeholder="enter lastname"><br>
	<input type="text" name="Gender"placeholder="enter gender"><br>
	<input type="date" name="DateOfBirth"placeholder="enter birth day"><br>
	<input type="number" name="PostId" value="<?php echo $row['PostId']?>"placeholder="enter post id"><br>
	<input type="date" name="ExamDate"placeholder="enter date of exam"><br>
	<input type="phonenumber" name="PhoneNumber"placeholder="enter phoneNumber"><br>
	<input type="number" name="Marks"placeholder="enter marks"><br>
	<input type="submit" name="update"value="update">
</form>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
if(isset($_POST['update'])){
	$fn=$_POST['FirstName'];
	$ln=$_POST['LastName'];
	$ge=$_POST['Gender'];
	$date=$_POST['DateOfBirth'];
	$pid=$_POST['PostId'];
	$edate=$_POST['ExamDate'];
	$phone=$_POST['PhoneNumber'];
	$mark=$_POST['Marks'];
	$update=mysqli_query($connect,"UPDATE CandidateResult SET FirstName='$fn',LastName='$ln',Gender='$ge',DateOfBirth='$date',PostId='$pid',ExamDate='$edate',PhoneNumber='$phone',Marks='$mark' WHERE CandidateNationlId='$id' ");
	if($update){
		header("location:ad candidate.php");
	}
}
?>