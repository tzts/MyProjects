<?php session_start();
include("config.php"); 			//including config.php in our file
$username = $_POST["username"]; //Storing username in $username variable.
$password = $_POST["password"]; //Storing password in $password variable.


$match = "select * from users where username='$username' and password='$password'";

$qry = mysql_query($match);

$num_rows = mysql_num_rows($qry); 

if ($num_rows == 0) { 
	echo "Λυπούμαστε αλλα δεν υπάρχει username " .$username. " με αυτόν τον κωδικό.";
	echo "Προσπαθηστε πάλι!";
	exit; 
} 
		else {

	$type = mysql_query("select type from users where username='$username'") or die(mysql_error());
	$data = mysql_fetch_assoc($type);


	if ($data['type'] == 'user') {
		$_SESSION['username'] = $username;
		header("location: user.php"); // It is the page where you want to redirect user after login.
	}else if ($data['type']  == 'admin') {
		$_SESSION['username'] = $username;
		header("location: admin.php"); // It is the page where you want to redirect user after login.
	} else {
		echo 'Λάθος στοιχεία!';
	}
}
mysql_close($link);
?>