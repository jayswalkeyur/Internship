<?php
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	$id = $_GET['deleteid'];
	// echo $id;
	$q = mysqli_query($con , "update tbl_user set is_delete = 1 where user_id='{$id}'") or die(mysqli_error($con));
	if($q){
		// echo "done";
		echo "<script>alert('Record deleted');window.location='task2.php';</script>";
	}
?>