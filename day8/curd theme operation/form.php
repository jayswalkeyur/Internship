<html>
	<head>
		<title>Internship</title>
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<div class="main">
			<center>
			<fieldset style="text-align: center;">
			<legend>Registration Form</legend>
			<form method="post" action="con_form.php">
				<center><table>
					<tr><td id="a">Student ID:- </td><td id="b"> <input type="number" name="st_id" required> </td></tr>
					<tr><td id="a">Student Name:- </td><td id="b"> <input type="text" name="st_name" required> </td></tr>
					<tr><td id="a">Gender:- </td><td id="b">
					<input type="radio" name="st_gender" value="Male" checked>Male
					<input type="radio" name="st_gender" value="Female">Female </td></tr>
					<tr><td id="a">Date of Birth:- </td><td id="b"> <input type="date" name="st_dob" required> </td></tr>
					<tr><td id="a">Student Address:- </td><td id="b"> <textarea rows="3" cols="22" name="st_address" required></textarea> </td></tr>
					<tr><td id="a">Area:- </td><td id="b"> <input type="text" name="st_area" required> </td></tr>
					<tr><td id="a">Pincode:- </td><td id="b"> <input type="text" name="st_pincode" required> </td></tr>
					<tr><td id="a">mobile number:- </td><td id="b"> <input type="text" name="st_mobile" required> </td></tr>
					<tr><td id="a">Email Id:- </td><td id="b"> <input type="email" name="st_email" required> </td></tr>
					<tr><td id="a">Password:- </td><td id="b"> <input type="password" name="st_password" required> </td></tr>
					<tr><td id="a">Bloodgroup:- </td><td id="b"> <select name="st_bloodgroup">
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select></td></tr>
					<tr><td colspan="2" id="c"><input type="submit" name="submit" id="submit">
					<input type="reset" name="reset" value="reset" id="reset"></td></tr>
				</table></center>
				</form>
				<a href="task4.php">Delete And edit record</a>
			</fieldset>
			</center>
		</div>
	</body>
</html>