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
    <h3>Προσθέστε νέο προμηθευτή</h3>
    <form action="" method="post">
      <p>ΑΦΜ: 
      <input type="text" name="new_afm">
      </p>
      <p>Όνομα: 
      <input type="text" name="new_name">
      </p>  
      <p>Διεύθυνση: 
      <input type="text" name="new_addr">
      </p>
      <p>Τηλέφωνο: 
      <input type="text" name="new_tel">
      </p>
      <p>e-mail: 
      <input type="text" name="new_mail">
      </p>
      <br/><br/>
      <input type="submit" value="Προσθήκη" method/>
      
    </form>
    <input type=button onClick="parent.location='supplier.php'" value='Πίσω'>
    <br/>
  <input type=button onClick="parent.location='admin.php'" value='Αρχική'>
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

  if(isset($_POST['new_afm'])) {
  $afm = $_POST["new_afm"]; 
}
  if(isset($_POST['new_name'])) {
  $name = $_POST["new_name"]; 
} 
  if(isset($_POST['new_addr'])) {
  $address = $_POST["new_addr"]; 
} 
  if(isset($_POST['new_tel'])) {
  $tel = $_POST["new_tel"]; 
} 
  if(isset($_POST['new_mail'])) {
  $email = $_POST["new_mail"]; 
} 
if ($afm) {

$insert ="INSERT INTO suppliers VALUES ('$afm','$name','$address','$tel','$email')";
$run = mysql_query($insert);
echo '<div id="messages" align="center">';
if($run) {
  echo 'O προμηθευτής προστέθηκε';
} else {
  echo 'Ο προμηθευτής δεν προστέθηκε. Προσπαθήστε πάλι αργότερα.';
}

}
mysql_close($link);

?>