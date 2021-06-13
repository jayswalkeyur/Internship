<html>
	<head>
		<title>Registration form</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<center>
		<fieldset>
		<legend>Data Entered</legend>
		<?php
			$na=$_POST['name'];
			$ad=$_POST['add'];
			$e=$_POST['email'];
			$mn=$_POST['mnum'];
			$pa=$_POST['pass'];
			$cpa=$_POST['cpass'];
			$g=$_POST['gender'];
			$f=$_POST['field'];
			$b=$_POST['branch'];
		?>

		<?php
			if($pa == $cpa)
			{
		?>
		<center>
		<table>
			<tr><td id="a"><?php echo "Name:- " ?></td><td id="b"><?php echo $na; ?></td></tr>
			<tr><td id="a"><?php echo "Address:- " ?></td><td id="b"><?php echo $ad; ?></td></tr>
			<tr><td id="a"><?php echo "Email Id:- " ?></td><td id="b"><?php echo $e; ?></td></tr>
			<tr><td id="a"><?php echo "Mobile number:- " ?></td><td id="b"><?php echo $mn; ?></td></tr>
			<tr><td id="a"><?php echo "Gender:- " ?></td><td id="b"><?php echo $g; ?></td></tr>
			<tr><td id="a"><?php echo "Field:- " ?></td><td id="b"><?php echo $f; ?></td></tr>
			<tr><td id="a"><?php echo "Branch:- " ?></td><td id="b"><?php echo $b; ?></td></tr>
		<?php
		}
		else 
			{
				header('location:library.php');
			}
		?>
		</table><br/><br/> 
		</center>
		<footer>
			<?php
				date_default_timezone_set("Etc/GMT+6");
				echo "The time is = ".date("h:i:sa")."<br/>";
				echo "The date today is = ".date("d-m-y")."<br/>";
			?>
		</footer>
		</fieldset>
	</center>
	</body>
</html>