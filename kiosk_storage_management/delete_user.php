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
        <h2>Αφαίρεση Χρήστη</h2>
    <br><br>
    <form action="" method="post">
      <p>Username: 
      <input type="text" name="username">
      </p>
      
     <br/><br/>
      <input type="submit" value="Αφαίρεση" method/>
  </form>
  <br/>
  <input type=button onClick="parent.location='user_choose.php'" value='Πίσω'>
  <br/>
  <input type=button onClick="parent.location='admin.php'" value='Αρχική'>
</div>
</body>
</html>

<?php
include ('config.php');
if(isset($_POST['username'])) {
    $username = $_POST['username']; 
}
$delete ="DELETE FROM users WHERE username='$username'";
$run = mysql_query($delete);
echo '<div id="messages" align="center">';
if($run) {
    echo 'Ο χρήστης αφαιρέθηκε';
} else {
    echo 'Ο χρήστης δεν αφαιρέθηκε. Προσπαθήστε πάλι αργότερα.';
}
mysql_close($link);
?>