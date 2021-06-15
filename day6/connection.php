<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";
	//Connection function
	$con = mysqli_connect($host, $username, $passwd, $dbname);
	$q = mysqli_query($con, "INSERT INTO `tbl_user`(`user_id`, `user_name`, `user_gender`, `user_mobile`) VALUES ('1','Jay A','male','123')") or die("Error".mysqli_error($con)) ;
	if ($q) {
		echo "<script> alert('Record added'); </script>";
	}
?>