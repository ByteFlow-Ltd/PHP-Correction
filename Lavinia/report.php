<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
if(isset($_POST['report'])){
	$name=$_POST['PName'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>report</title>
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
	<h1>REPORT LAVINA RECRUITMENT MANAGEMENT</h1>
	<input type="text" name="PName"placeholder="enter position"><br>
	<input type="submit" name="report"value="report">
</form>
</div>
</section>
<table border="2">
	<tr>
		<th colspan="2">Position</th>
	    <th colspan="8">CandidateResult</th>
	</tr>
	<tr>
		<th>PId</th>
		<th>PName</th>

		<th>CandidateNationlId</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Gender</th>
		<th>DateOfBirth</th>
		<th>ExamDate</th>
		<th>PhoneNumber</th>
		<th>Marks</th>
	</tr>
	<?php
	$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
	$sele=mysqli_query($connect,"SELECT * FROM Position WHERE PId='$id'");
	while($rows=mysqli_fetch_array($sele)){
        $idd=$rows['PId'];

		$select=mysqli_query($connect,"SELECT * FROM CandidateResult WHERE PId='$idd'");
	    $row=mysqli_fetch_array($select);
		?>
		<tr>
		<td><?php echo $rows['PId']?></td>
		<td><?php echo $rows['PName']?></td>

		    <td><?php echo $row['CandidateNationlId']?></td>
			<td><?php echo $row['FirstName']?></td>
			<td><?php echo $row['LastName']?></td>
			<td><?php echo $row['Gender']?></td>
			<td><?php echo $row['DateOfBirth']?></td>
			<td><?php echo $row['ExamDate']?></td>
			<td><?php echo $row['PhoneNumber']?></td>
			<td><?php echo $row['Marks']?></td>
		</tr>
		<?php
	}
		?>
</table>
</body>
</html>
