<?php 
	$con = mysqli_connect("localhost", "root", "", "db_internship");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
	<form method="post">
		Name: <input type="Name" name="uname" required><br/>
		Gender :<input type="radio" name="gender" value="male" checked>Male
		<input type="radio" name="gender" value="female">Female<br/>
		Mobile Number: <input type="number" name="mobile_num" required><br/>
		<input type="submit" name="submit">
		<?php 
			if (isset($_POST['submit'])) {
				$name = $_POST['uname'];
				$gender = $_POST['gender'];
				$mobile = $_POST['mobile_num'];
				$q = mysqli_query($con, "INSERT INTO `tbl_user`(`user_name`, `user_gender`, `user_mobile`) VALUES ('{$name}','{$gender}','{$mobile}')") or die("Error".mysqli_error($con)) ;
				if ($q) {
					echo "<script> alert('Record added'); </script>";
				}
			}
		?>
	</form>
</body>
</html>