<?php
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	if($con->connect_error)
    {
        die("Connection Failed" . $con->connect_error);
    } 

			if (isset($_POST['submit'])) {
				$st_id = mysqli_real_escape_string($con, $_POST['st_id']);
				$st_name = mysqli_real_escape_string($con, $_POST['st_name']);
				$st_gender = mysqli_real_escape_string($con, $_POST['st_gender']);
				$st_dob = mysqli_real_escape_string($con, $_POST['st_dob']);
				$st_address = mysqli_real_escape_string($con, $_POST['st_address']);
				$st_area = mysqli_real_escape_string($con, $_POST['st_area']);
				$st_pincode = mysqli_real_escape_string($con, $_POST['st_pincode']);
				$st_mobile = mysqli_real_escape_string($con, $_POST['st_mobile']);
				$st_email = mysqli_real_escape_string($con, $_POST['st_email']);
				$st_password = mysqli_real_escape_string($con, $_POST['st_password']);
				$st_bloodgroup = mysqli_real_escape_string($con, $_POST['st_bloodgroup']);
			
				$q = mysqli_query($con, " INSERT INTO `tbl_student`(`st_id`, `st_name`, `st_gender`, `st_dob`, `st_address`, `st_area`, `st_pincode`, `st_mobile`, `st_email`, `st_password`, `st_bloodgroup`) VALUES ('$st_id', '$st_name', '$st_gender', $st_dob, '$st_address', '$st_area', '$st_pincode', '$st_mobile', '$st_email', '$st_password', '$st_bloodgroup')") or die("Error".mysqli_error($con)); 

				if ($q) {
					echo "<script> alert('Record added'); </script>";
				}
		    }
	
?>