<?php
	//db connection
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	//Querty
	$q = mysqli_query($con, "select * from tbl_student where is_delete = 0") or die(mysql_error($con));

	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Gender</th>";
	echo "<th>DOB</th>";
	echo "<th>Address</th>";
	echo "<th>Area</th>";
	echo "<th>Pincode</th>";
	echo "<th>Mobile</th>";
	echo "<th>Email</th>";
	echo "<th>Password</th>";
	echo "<th>Bloodgroup</th>";
	echo "<th>Action</th>";
	echo "</tr>";
	while ($row = mysqli_fetch_array($q)) {
		echo "<tr>";
		echo "<td>". $row['st_id'] ."</td>";
		echo "<td>". $row['st_name'] ."</td>";
		echo "<td>". $row['st_gender'] ."</td>";
		echo "<td>". $row['st_dob'] ."</td>";
		echo "<td>". $row['st_address'] ."</td>";
		echo "<td>". $row['st_area'] ."</td>";
		echo "<td>". $row['st_pincode'] ."</td>";
		echo "<td>". $row['st_mobile'] ."</td>";
		echo "<td>". $row['st_email'] ."</td>";
		echo "<td>". $row['st_password'] ."</td>";
		echo "<td>". $row['st_bloodgroup'] ."</td>";
		echo "<td><a href ='edit2.php?id={$row['st_id']}'>Edit</a> | <a href='del2.php?deleteid={$row['st_id']}'>Delete</a> </td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<a href= 'form2_con.php'>Add Record</a>";
?>