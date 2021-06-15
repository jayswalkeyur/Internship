<?php
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	if (!isset($_GET['id'])) {
		header("location: task3.php");
	}
	$editid = $_GET['id'];
	$q = mysqli_query($con, "select * from tbl_student where st_id = '{$editid}'") or die(mysqli_error($con));
	$editdata = mysqli_fetch_array($q);
	if ($_POST) {

		$st_id = $_POST['st_id'];
		$st_name = $_POST['st_name'];
		$st_gender = $_POST['st_gender'];
		$st_dob = $_POST['st_dob'];
		$st_address = $_POST['st_address'];
		$st_area = $_POST['st_area'];
		$st_pincode = $_POST['st_pincode'];
		$st_mobile = $_POST['st_mobile'];
		$st_email = $_POST['st_email'];
		$st_password = $_POST['st_password'];
		$st_bloodgroup = $_POST['st_bloodgroup'];

		$up = mysqli_query($con, "update tbl_student set st_id = '{$st_id}', st_name = '{$st_name}', st_gender = '{$st_gender}', st_dob = '{$st_dob}', st_address = '{$st_address}', st_area = '{$st_area}', st_area = '{$st_area}', st_mobile = '$st_mobile', st_email = '{$st_email}', st_password = '{$st_password}', st_bloodgroup = '{$st_bloodgroup}' where st_id = '{$editid}'") or die(mysqli_error($con));
		if($up){
			echo "<script>alert('Record updated');window.location='task4.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<body>
	<form method="post">
		Student id: <input type="number" name="st_id" value="<?php echo $editdata['st_id']; ?>" required><br/>

		Name: <input type="text" name="st_name" value="<?php echo $editdata['st_name']; ?>" required><br/>

		Gender :<input type="radio" name="st_gender" value="male" <?php if ($editdata['st_gender'] == "male") { echo "checked"; } ?>>Male
		<input type="radio" name="st_gender" value="female" <?php if ($editdata['st_gender'] == "female") { echo "checked"; } ?>>Female<br/>

		Date of birth: <input type="date" name="st_dob" value="<?php echo $editdata['st_dob']; ?>" required><br/>

		Address: <input type="text" name="st_address" value="<?php echo $editdata['st_address']; ?>" required><br/>

		Area: <input type="text" name="st_area" value="<?php echo $editdata['st_area']; ?>" required><br/>

		Pincode: <input type="number" name="st_pincode" value="<?php echo $editdata['st_pincode']; ?>" required><br/>

		Mobile Number: <input type="number" name="st_mobile" value="<?php echo $editdata['st_mobile']; ?>" required><br/>

		Email id: <input type="email" name="st_email" value="<?php echo $editdata['st_email']; ?>" required><br/>

		Password: <input type="password" name="st_password" value="<?php echo $editdata['st_password']; ?>" required><br/>

		Bloodgroup: <select name="st_bloodgroup">
			<option value="A+" <?php if ($editdata['st_bloodgroup'] == "A+") { echo "selected"; } ?>>A+</option>
			<option value="A-" <?php if ($editdata['st_bloodgroup'] == "A-") { echo "selected"; } ?>>A-</option>
			<option value="B+" <?php if ($editdata['st_bloodgroup'] == "B+") { echo "selected"; } ?>>B+</option>
			<option value="B-" <?php if ($editdata['st_bloodgroup'] == "B-") { echo "selected"; } ?>>B-</option>
			<option value="AB+" <?php if ($editdata['st_bloodgroup'] == "AB+") { echo "selected"; } ?>>AB+</option>
			<option value="AB-" <?php if ($editdata['st_bloodgroup'] == "AB-") { echo "selected"; } ?>>AB-</option>
			<option value="O+" <?php if ($editdata['st_bloodgroup'] == "O+") { echo "selected"; } ?>>O+</option>
			<option value="O-" <?php if ($editdata['st_bloodgroup'] == "O-") { echo "selected"; } ?>>O-</option>
		</select><br/>

		<input type="submit" name="submit">
	</form>
</body>
</html>