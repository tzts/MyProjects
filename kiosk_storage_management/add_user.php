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
        <h2>Προσθήκη Νέου Χρήστη</h2>
    <br><br>
    <form action="" method="post">
      <p>Username: 
      <input type="text" name="new_username">
      </p>
      <p>Password: 
      <input type="password" name="new_password">
      </p>  
     <br/><br/>
      <input type="submit" value="Προσθήκη" method/>
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
if(isset($_POST['new_username'])) {
    $username = $_POST["new_username"]; 
}

if (isset($_POST["new_password"])) {
    $password = $_POST["new_password"];
}

$insert ="INSERT INTO users (id,username,password,type) VALUES (NULL,'$username','$password','user')";
$run = mysql_query($insert);
  echo '<div id="messages" align="center">';
if($run) {
    echo 'Ο χρήστης προστέθηκε';
} else {
    echo 'Ο χρήστης δεν προστέθηκε. Προσπαθήστε πάλι αργότερα.';
}

mysql_close($link);

?>