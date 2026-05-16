<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add candidate</title>
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
	<h1>INSERT CANDIDATE RESULTS</h1>
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
	<input type="submit" name="candidate"value="candidate">
</form>
</div>
</section>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
if(isset($_POST['candidate'])){
	$fn=$_POST['FirstName'];
	$ln=$_POST['LastName'];
	$ge=$_POST['Gender'];
	$date=$_POST['DateOfBirth'];
	$pid=$_POST['PostId'];
	$edate=$_POST['ExamDate'];
	$phone=$_POST['PhoneNumber'];
	$mark=$_POST['Marks'];
	$candidate=mysqli_query($connect,"INSERT INTO CandidateResult VALUES('','$fn','$ln','$ge','$date','$pid','$edate','$phone','$mark')");
	if($candidate){
		header("location:ad candidate.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>view candidate</title>
</head>
<body>
<table border="2">
	<h1>VIEW CANDIDATE RESULTS</h1>
	<tr>
		<th>CandidateNationalId</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Gender</th>
		<th>DateOfBirth</th>
		<th>PostId</th>
		<th>ExamDate</th>
		<th>PhoneNumber</th>
		<th>Marks</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
	$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
	$select=mysqli_query($connect,"SELECT * FROM CandidateResult");
	while($row=mysqli_fetch_array($select)){
		?>
		<tr>
			<td><?php echo $row['CandidateNationlId']?></td>
			<td><?php echo $row['FirstName']?></td>
			<td><?php echo $row['LastName']?></td>
			<td><?php echo $row['Gender']?></td>
			<td><?php echo $row['DateOfBirth']?></td>
			<td><?php echo $row['PostId']?></td>
			<td><?php echo $row['ExamDate']?></td>
			<td><?php echo $row['PhoneNumber']?></td>
			<td><?php echo $row['Marks']?></td>
			<td><a href="delete_ca.php?CandidateNationlId=<?php echo $row['CandidateNationlId']?>">delete</a></td>
		    <td><a href="update_ca.php?CandidateNationlId=<?php echo $row['CandidateNationlId']?>">update</a></td>
		</tr>
		<?php
	}
	?>
</table>
</body>
</html>