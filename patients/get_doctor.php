<?php 
	include_once 'include/config.php';
	$spec=$_POST['specilizationid'];
	echo $spec;
	$doc=mysqli_query($con,"select * from doctors where specilization='$spec'");

 ?>
 
 	<?php while ($res=mysqli_fetch_assoc($doc)) {
 ?>
<option><?php //echo $res['fullName']; ?></option>
 <?php
 } ?>
