html>
<head>
	<title>Factorial</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="day2_css.css">
</head>
<body>
	<center>
	<fieldset>
		<legend>Factorial</legend>
		<form>
			Number: <input type="text" name="num"><br/><br/>
			<input type="submit" name="submit"><br/><br/>
			<?php 
				if (isset($_GET['num'])) {
					$num = $_GET['num'];
					$fact = 1;
					for ($x=$num; $x >0 ; $x--) { 
						$fact = $fact*$x;
					}
					echo "the factorial value of $num is $fact";
				}
			?>
		</form>
	</fieldset>
	</center>
</body>
</html>