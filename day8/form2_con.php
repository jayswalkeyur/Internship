  
<?php 
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	if($con->connect_error)
    {
        die("Connection Failed" . $con->connect_error);
    }
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
	<form method="post" action="con_form.php">
		Student id: <input type="number" name="st_id" required><br/>

		Name: <input type="text" name="st_name" required><br/>

		Gender :<input type="radio" name="st_gender" value="male" checked>Male
		<input type="radio" name="st_gender" value="female">Female<br/>

		Date of birth: <input type="date" name="st_dob" required><br/>

		Address: <input type="text" name="st_address" required><br/>

		Area: <input type="text" name="st_area" required><br/>

		Pincode: <input type="number" name="st_pincode"><br/>

		Mobile Number: <input type="number" name="st_mobile" required><br/>

		Email id: <input type="email" name="st_email" required><br/>

		Password: <input type="password" name="st_password" required><br/>

		Bloodgroup: <select name="st_bloodgroup">
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
		</select><br/>

		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php
	echo "<a href = 'task3.php'>Delete Record</a>";
?>