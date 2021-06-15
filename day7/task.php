<?php
	//db connection
	$con = mysqli_connect("localhost", "root", "", "db_internship");
	//Querty
	$q = mysqli_query($con, "select * from tbl_user") or die(mysql_error($con));
	//the below function would fetch data as a numerical array
	$row = mysqli_fetch_row($q);
	//Debug
	print_r($row);
	echo $row[0]. $row[1]. $row[2]. $row[3];

	//Numerical and associative
	$row = mysqli_fetch_array($q);
	echo "<pre >";
	print_r($row);
	echo $row[0]. $row[1]. $row[2]. $row[3];
	echo $row['user_id']. $row['user_name']. $row['user_gender']. $row['user_mobile'];
?>