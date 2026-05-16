<?php
$connect=mysqli_connect("localhost","root","","lavina_recruitment_management");
$id=$_GET['CandidateNationlId'];
$delete=mysqli_query($connect,"DELETE FROM CandidateResult WHERE CandidateNationlId='$id'");
if($delete){
	header("location:ad candidate.php");
}
?>