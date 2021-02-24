<?php
@session_start()
?>

<html>
	<head>
		<meta charset="utf8">
		<title>Welcome Administrator!</title>
	</head>
	<body style="background-image: url('background.jpg');">
		<div style="margin: auto;width: 300;">
			<h1>Admin Menu</h1>
			<form name ="admin_form" method="post" action="admin_apot.php">
				<input type="submit" name="submit" value="Search">
				<select name="radio" id="radio">
					<option value="1">Miko Yoko</option>
					<option value="2">Faya Kabul</option>
					<option value="3">Maya Jaka</option>
				</select>
			</form>
			<form name ="principal_form" method="post" action="admin_school.php">
				<input type="submit" name="submit" value="Search">
				Συνολικη επιδοση του σχολειου.
			</form>
			<div>
				<form name ="teachers_all" method="post" action="teacher_all.php">
					
					<input type="submit" name="submit" value="Search">
					Αριθμός των εκπαιδευτικών.
			</form>
			</div>
			<form  name="unesco" method="post" action="logout.php">
				<input type="submit" name="button" value="Logout" />
			</form>
		</div>
	</body>
	<footer>
	</footer>
</html>