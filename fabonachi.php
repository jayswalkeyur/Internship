<html>
	<head>
		<title>Fibonachi</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="day2_css.css">
	</head>
	<body>
		<center>
		<fieldset>
			<legend>Fibonachi</legend>
		<form method="GET">
			Number:<input type="text" name="number" id="fact"><br/><br/>
			<input type="submit" name="submit" id="submit"><br/><br/>
			<?php
			$a=0;
			$b=1;
			if(isset($_GET['submit'])){
				$n=$_GET['number'];	
				echo"The Fabonacci Series :-";
				echo $a, ' ', $b, ' '; 
				for($i=2; $i<=$n; $i++)
				{
					$c=$a+$b;
					echo $c, "<br/>";
					$a=$b;
					$b=$c;
				} 
			}
			?>
		</form>
		</fieldset>
		</center>
	</body>
</html>