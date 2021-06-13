<html>
	<head>
		<title>Internship</title>
			<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
			<center>
			<fieldset style="text-align: center;">
			<legend>Registration Form</legend>
			<form method="POST" action="form_post_data.php">
				<center><table>
					<tr><td id="a">Name:- </td><td id="b"> <input type="text" name="name" required> </td></tr>
					<tr><td id="a">Email Id:- </td><td id="b"> <input type="email" name="email" required> </td></tr>
					<tr><td id="a">Password:- </td><td id="b"> <input type="password" name="pass" required> </td></tr>
					<tr><td id="a">Confirm Password:- </td><td id="b"> <input type="password" name="cpass" required> </td></tr>
					<tr><td id="a">mobile number:- </td><td id="b"> <input type="text" name="mnum" required> </td></tr>
					<tr><td id="a">Address:- </td><td id="b"> <textarea rows="3" cols="22" name="add" required></textarea> </td></tr>
					<tr><td id="a">Gender:- </td><td id="b">
					<input type="radio" name="gender" value="Male" checked>Male
					<input type="radio" name="gender" value="Female">Female </td></tr>
					<tr><td id="a">Field:- </td><td id="b">
						<input type="checkbox" name="field" value="degree" checked>Degree
						<input type="checkbox" name="field" value="diploma" checked>Diploma
						<input type="checkbox" name="field" value="architecture" checked>Architecture </td></tr>
					<tr><td id="a">Qualification:- </td><td id="b"> <select name="branch">
						<option>Computer</option>
						<option>IT</option>
						<option>Electrical</option>
						<option>Mechanical</option>
						<option>Civil</option>
					</select></td></tr>
					<tr><td colspan="2" id="c"><input type="submit" name="submit" value="submit" id="submit">
					<input type="reset" name="reset" value="reset" id="reset"></td></tr>
				</table></center>
				</form>
				<p style="color: red;">Note:- Please compare your password with your confirm password if they both are not same then page might get reset!!!!</p>
			</fieldset>
			</center>
	</body>
</html>