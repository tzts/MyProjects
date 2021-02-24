<!DOCTYPE html>
<html>
    <head>
       
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         
        <title>«ΣΕΜΠΟΣ cash & carry Εισαγωγές -Εμπόριο»</title>
        </head>
    <body>
    <div id="headers" align="center">
        <h1>«ΣΕΜΠΟΣ cash & carry Εισαγωγές -Εμπόριο»</h1>  
        <h2>ΚΑΛΩΣΗPΘΑΤΕ ΣΤΟ ΣΥΣΤΗΜΑ ΔΙΑΧΕΙΡΗΣΗΣ</h2>
    <br><br>
    </div>
    <div id="aitisi" align="center">   
        <h3>Συνεργαζόμενοι Προμηθευτές</h3>
                <br><br>
        <table border="1">
<tr >
<th>ΑΦΜ</th>    
<th>ΟΝΟΜΑ</th>
<th>ΔΙΕΥΘΥΝΣΗ</th>
<th>ΤΗΛΕΦΩΝΟ</th>
<th>e-mail</th>
</tr>
<?php
$database = "sempos";                                   // the name of the database.
$server = "localhost";                                  // server to connect to.
$db_user = "root";                                    // mysql username to access the database with.
$db_pass = "";                                      // mysql password to access the database with.
$table = "suppliers";                                    // the table that this script will set up and use.
$link = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link);
$show= mysql_query("SELECT * FROM suppliers");
while ($rows = mysql_fetch_array($show)){
  
  echo '<tr>';
  echo '<td>'.$rows['afm'].'</td>';
  echo '<td>'.$rows['name'].'</td>';
  echo '<td>'.$rows['address'].'</td>';
  echo '<td>'.$rows['tel'].'</td>';
  echo '<td>'.$rows['email'].'</td>';
  echo '</tr>';

}
?>
</table>
<br><br>
<input type=button onClick="parent.location='admin.php'" value='Πίσω'>
</div>

</body>
</html>
  
  