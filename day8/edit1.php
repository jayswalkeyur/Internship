<?php
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	if (!isset($_GET['id'])) {
		header("location: task2.php");
	}
	$editid = $_GET['id'];
	$q = mysqli_query($con, "select * from tbl_user where user_id = '{$editid}'") or die(mysqli_error($con));
	$editdata = mysqli_fetch_array($q);
	if ($_POST) {
		$name = $_POST['uname'];
		$gender = $_POST['gender'];
		$mobile = $_POST['mobile'];
		$up = mysqli_query($con, "update tbl_user set user_name = '{$name}', user_gender = '{$gender}', user_mobile = '$mobile' where user_id = '{$editid}'") or die(mysqli_error($con));
		if($up){
			echo "<script>alert('Record updated');window.location='task2.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<body>
	<form method="post">
		Name: <input type="Name" name="uname" value="<?php echo $editdata['user_name']; ?>"><br/>
		
		Gender :<input type="radio" name="gender" value="male" <?php if ($editdata['user_gender'] == "male") { echo "checked"; } ?>>Male
		<input type="radio" name="gender" value="female" <?php if ($editdata['user_gender'] == "female") { echo "checked"; } ?>>Female<br/>

		Mobile Number: <input type="number" name="mobile" value="<?php echo $editdata['user_mobile']; ?>" required><br/>

		<input type="submit" name="submit">
	</form>
</body>
</html>