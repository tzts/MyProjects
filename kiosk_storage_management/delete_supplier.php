
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html>
    <head>
       
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>«ΣΕΜΠΟΣ cash & carry Εισαγωγές -Εμπόριο»</title>
        </head>
    <body>
    <div id="containt" align="center">
        <h1>«ΣΕΜΠΟΣ cash & carry Εισαγωγές -Εμπόριο»</h1>  
        <h2>ΣΥΣΤΗΜΑ ΔΙΑΧΕΙΡΗΣΗΣ</h2>
        <h2>Αφαίρεση Προμηθευτή</h2>
    <br><br>
    <form action="" method="post">
      <p>ΑΦΜ: 
      <input type="text" name="afm">
      </p>
      
     <br/><br/>
      <input type="submit" value="Αφαίρεση" method/>
  </form>
  <br/>
  <input type=button onClick="parent.location='supplier.php'" value='Πίσω'>
  <br/>
  <input type=button onClick="parent.location='admin.php'" value='Αρχική'>
</div>
</body>
</html>

<?php
$database = "sempos";                                   // the name of the database.
$server = "localhost";                                  // server to connect to.
$db_user = "root";                                    // mysql username to access the database with.
$db_pass = "";                                      // mysql password to access the database with.
$table = "suppliers";                                    // the table that this script will set up and use.
$link = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($database,$link);

  if(isset($_POST['afm'])) {
  $afm = $_POST["afm"]; 
}
  
if ($afm) {

$insert ="DELETE FROM suppliers WHERE afm=$afm";
$run = mysql_query($insert);
echo '<div id="messages" align="center">';
if($run) {
  echo 'O προμηθευτής αφαιρέθηκε';
} else {
  echo 'Ο προμηθευτής δεν αφαιρέθηκε. Προσπαθήστε πάλι αργότερα.';
}

}
mysql_close($link);

?>