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
    <h3>Παρακαλώ συμπληρώστε τη φόρμα νέας προμήθειας</h3>
    
<table border="1">
<tr >
<th>ΠΡΟΪΟΝΤΑ</th>
<th>ΛΗΦΘΕΙΣΑ ΠΟΣΟΤΗΤΑ</th>
</tr>

<?php
$database = "sempos";                                   // the name of the database.
$server = "localhost";                                  // server to connect to.
$db_user = "root";                                    // mysql username to access the database with.
$db_pass = "";                                      // mysql password to access the database with.
$table = "products";                                    // the table that this script will set up and use.
$link = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link);
$show= mysql_query("SELECT description FROM products");
while ($rows = mysql_fetch_array($show)){
  echo '<tr>';
  echo '<th>'.$rows['description'].'</th>';
  echo '<td>';
  echo '<form action="" method= "post">';
  echo '<input type="text" name="quantity" size="25">';
  echo '</form>';
  echo '</td>';
  echo '<td>';
  echo '<input type="submit" name="submit" value="Υποβολή">';
  echo '</td>';
  echo '</tr>';
}

?>
</table>
</div>
</body>
</html>

    
