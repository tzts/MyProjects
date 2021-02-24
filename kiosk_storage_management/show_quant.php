<?php 
$database = "sempos";  																	// the name of the database.
$server = "localhost";  																// server to connect to.
$db_user = "root";  																	// mysql username to access the database with.
$db_pass = "";  																		// mysql password to access the database with.
$table = "products";    																// the table that this script will set up and use.
$link = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link);

$match = mysql_query("select * from products") ;

 while ($rows = mysql_fetch_array($match)){
	echo '<div id="quantity" align="center">';
	echo $rows['description'].' '.$rows['quantity'];
	echo '</br>';
	echo '</br> </div>';
	}
	echo '<div id="button" align="center">';
mysql_close($link);
?>
 <input type=button onClick="parent.location='admin.php'" value='Πίσω'>