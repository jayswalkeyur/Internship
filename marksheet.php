<html>
<head>
	<title>Marksheet</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<center>
		<fieldset>
			<legend>Marksheet</legend>
			<form>
				<center><table>
					<tr><td align="left">Enrolment Number:</td><td><input type="number" name="erno" minlength="12" maxlength="12" required></td></tr>
					<tr><td align="left">Student Name:</td><td><input type="text" name="name"></td></tr>
					<tr><td align="left">Maths:</td><td><input type="number" name="maths" required></td></tr>
					<tr><td align="left">Physics:</td><td><input type="number" name="physics" required></td></tr>
					<tr><td align="left">Chemistry:</td><td><input type="number" name="chemistry" required></td></tr>
					<tr><td colspan="2"><input type="submit" name="submit"></td></tr>
				</table></center><br/>
				
				<?php
					if (isset($_GET['submit'])) {
						$enrolment = $_GET['erno'];
						$name = $_GET['name'];
						$maths = $_GET['maths'];
						$physics = $_GET['physics'];
						$chemistry = $_GET['chemistry'];
						$total = $maths + $physics + $chemistry;
						$outof = 300;
						$percentage = $total / $outof * 100; 
						echo "$name <br/><br/>";
						echo "$enrolment <br/><br/> ";
				?>
						<center><table border="1">
							<tr>
								<th>Subject</th>
								<th>Marks</th>
								<th>Remarks</th>
								<th>Total</th>
								<th>Percentage</th>
							</tr>
							<tr>
								<td>Maths</td>
								<td><?php echo "$maths"; ?></td>
								<td>
									<?php 
										if ($maths == 100) {
											echo "full marks";
										} elseif ($maths > 85) {
											echo "distinction";
										} elseif($maths > 65) {
											echo "good marks";
										} elseif ($maths > 45) {
											echo "average marks";
										} elseif ($maths >= 23) {
											echo "just pass";
										} elseif ($maths < 23) {
											echo "fail";
										}
									?>
								</td>
								<td rowspan="3"><?php echo "$total"; ?></td>
								<td rowspan="3"><?php echo "$percentage"; ?></td>
							</tr>
							<tr>
								<td>Physics</td>
								<td><?php echo "$physics"; ?></td>
								<td>
									<?php 
										if ($physics == 100) {
											echo "full marks";
										} elseif ($physics > 85) {
											echo "distinction";
										} elseif($physics > 65) {
											echo "good marks";
										} elseif ($physics > 45) {
											echo "average marks";
										} elseif ($physics >= 23) {
											echo "just pass";
										} elseif ($physics < 23) {
											echo "fail";
										}
									?>
								</td>
							</tr>
							<tr>
								<td>Chemistry</td>
								<td><?php echo "$chemistry"; ?></td>
								<td>
									<?php 
										if ($chemistry == 100) {
											echo "full marks";
										} elseif ($chemistry > 85) {
											echo "distinction";
										} elseif($chemistry > 65) {
											echo "good marks";
										} elseif ($chemistry > 45) {
											echo "average marks";
										} elseif ($chemistry >= 23) {
											echo "just pass";
										} elseif ($chemistry < 23) {
											echo "fail";
										}
									?>
								</td>
							</tr>
						</table></center>
						<?php	
						//Total status
						echo "<br/>";

						if ($percentage >= 35 && $maths >= 23 && $physics >= 23 && $chemistry >= 23) {
							echo "The student has passed this exam ";
						} else {
							echo "The student has failed the exam ";
						}
					}
				?>
			</form>
		</fieldset>
	</center>
</body>
</html>