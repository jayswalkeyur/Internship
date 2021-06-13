<html>
<head>
	<title>Pyramid Pattern</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" title="text/css" href="day2_css.css">
</head>
<body>
	<center>
	<fieldset>
		<legend>Pyramid Pattern</legend>
		<form method="get">
			Number : <input type="number" name="num"><br/><br/>
			<input type="submit" name="submit"><br/><br/>
			<?php
				if(isset($_GET['submit'])){
					$num = $_GET['num'];
					echo "Number of starts in the pyramid are $num<br/><br/>";
					for($i=1;$i<=$num;$i++){
					  for($j=1;$j<=$i;$j++){
						echo " * ";
					  }
					  echo '</br>';
					}
				}
			?>
	</form>
	</fieldset>
	</center>
</body>
</html>