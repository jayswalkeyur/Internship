<?php
	//db connection
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	//Querty
	$q = mysqli_query($con, "select * from tbl_user where is_delete = 0") or die(mysql_error($con));

	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Gender</th>";
	echo "<th>Mobile</th>";
	echo "<th>Action</th>";
	echo "</tr>";
	$i = 1;
	while ($row = mysqli_fetch_array($q)) {
		echo "<tr>";
		echo "<td>". $i++ ."</td>";
		echo "<td>". $row['user_name'] ."</td>";
		echo "<td>". $row['user_gender'] ."</td>";
		echo "<td>". $row['user_mobile'] ."</td>";
		echo "<td> <a href='edit1.php?id={$row['user_id']}'>Edit</a>|<a href='del1.php?deleteid={$row['user_id']}'>Delete</a> </td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<a href= 'form_con.php'>Add Record</a>";
?>