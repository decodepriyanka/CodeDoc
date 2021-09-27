<?php

	include 'include/config.php';

if(isset($_GET['del']))
{
    mysqli_query($con,"delete from banner");
    header("location:.php");
}
if (isset($_POST['repo']))
{
    move_uploaded_file($_FILES['rep']['tmp_name'],'rep/'.$_FILES['rep']['name']);
	$loc="rep/".$_FILES['rep']['name'];
	$aadhar=$data["aadhar"];
    $qry=mysqli_query($con,"insert into reports(loc,aadhar) values('$loc','$aadhar')");
    if($qry)
    	header("location:manage-medhistory.php");
}

?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" accept="image/*" name="rep"></td>
    <button class="btn btn-info" type='submit' name="repo">UPLOAD</button>
</form>
