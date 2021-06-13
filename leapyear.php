<html>
<head>
	<title>Leap Year</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="day2_css.css">
</head>
<body>
	<center>
	<fieldset>
		<legend>Leap Year</legend>
		<form>
			Year: <input type="text" name="year"><br/><br/>
			<input type="submit" name="submit"><br/><br/>
			<?php 
				if (isset($_GET['submit'])) {
					$year = $_GET['year'];
					if (!is_numeric($year)) {
						echo "String is not allwoed here only numeric values are allowed." ;
					} else {
						if(($year%4==0 && $year%100!=0) || $year%400==0){
							echo "Year : $year is a leap year";
						}else{
							echo "Year : $year is not a leap year";
						}
					}
				}
			?>
		</form>	
	</fieldset>
	</center>
</body>
</html>
