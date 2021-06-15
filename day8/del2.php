<?php
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	$id = $_GET['deleteid'];
	$q = mysqli_query($con , "update tbl_student set is_delete = 1 where st_id='{$id}'") or die(mysqli_error($con));
	if($q){
		echo "<script>alert('Record deleted');window.location='task3.php';</script>";
	}
?>