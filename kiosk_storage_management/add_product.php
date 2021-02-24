<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
 <html>
  <head>
  	<meta set-charset="utf-8">
  	<title>«ΣΕΜΠΟΣ cash & carry Εισαγωγές -Εμπόριο»</title>
  </head>
  <body>
  	<div id='user' align='center'>
  		<h1>«ΣΕΜΠΟΣ cash & carry Εισαγωγές -Εμπόριο»</h1>  
  		<h2>ΣΥΣΤΗΜΑ ΔΙΑΧΕΙΡΗΣΗΣ</h2>
  		<br><br>
    <h3>Προσθέστε νέο προϊόν</h3>
    <form action="" method="post">
    	<p>Barcode: 
    	<input type="text" name="new_barcode">
    	</p>
    	<p>Περιγραφή Προϊόντος: 
    	<input type="text" name="new_descr"></p>
    	<p>Είδος:
    	<select name="new_type">
    		<option value="biscuit">ΜΠΙΣΚΟΤΟΕΙΔΗ</option>
    		<option value="smoke">ΤΣΙΓΑΡΑ</option>
    		<option value="beverages">ΡΟΦΗΜΑΤΑ</option>
    		<option value="food">ΦΑΓΩΣΙΜΑ</option>
    		<option value="other">ΑΛΛΟ</option> 
        </select>   		
    	</p>
    	<p>Τίμη Προϊόντος: 
    	<input type="text" name="new_price"></p>
    	<p>Ποσότητα Προϊόντος: 
    	<input type="text" name="new_quantity"></p>
    	<p>Ημερομηνία Λήξης Προϊόντος: (με μορφη: χχχχ-μμ-ημ) 
    	<input type="text" name="new_expr"></p>
    	<br/><br/>
    	<input type="submit" value="Προσθήκη" />
    	</p>
    </form>
    <input type=button onClick="parent.location='admin.php'" value='Πίσω'>
     <br/>
    <input type=button onClick="parent.location='admin.php'" value='Αρχική'>
  </div>
  </body>
  </html>

<?php
$database = "sempos";  	// the name of the database.
$server = "localhost"; // server to connect to.
$db_user = "root";  // mysql username to access the database with.
$db_pass = "";  // mysql password to access the database with.
$table = "products";  // the table that this script will set up and use.
$link = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link);

if(isset($_POST['new_barcode'])) {
	$barcode = $_POST["new_barcode"]; 
}
if (isset($_POST["new_descr"])) {
	$description = $_POST["new_descr"];
}
if (isset($_POST["new_type"])) {
	$type = $_POST["new_type"];
}
if (isset($_POST["new_price"])) {
	$price = $_POST["new_price"];
}
if (isset($_POST["new_expr"])) {
	$expr = $_POST["new_expr"];
}
if (isset($_POST["new_quantity"])) {
	$quantity = $_POST["new_quantity"];
}

if ($price) {

$insert ="INSERT INTO products VALUES ('$barcode','$description','$type','$price','$expr','$quantity')";
$run = mysql_query($insert);
echo '<div id="messages" align="center">';
if($run) {
	echo 'Το προϊόν προστέθηκε';
} else {
	echo 'Το προϊόν δεν προστέθηκε. Προσπαθήστε πάλι αργότερα.';
}

}
mysql_close($link);

?>

