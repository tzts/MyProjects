<?php session_start();
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
        <br/>Καλωσήρθες χρήστη <?php echo $_SESSION['username'] ?>
    <br><br>
    <h3>Παρακαλώ επιλέξτε δραστηριότητα</h3>
	
    <div id="buttons" align="center">
        <input type=button onClick="parent.location='show_quant.php'" value='Έλεγχος αποθέματος'>
        <input type=button onClick="parent.location='new_pr.php'" value='Νέες Προμήθειες'>
        <input type=button onClick="parent.location='user_choose.php'" value='Διαχείρηση Χρηστών'>
        <input type=button onClick="parent.location='product.php'" value='Διαχείρηση Προϊόντων'>
        <input type=button onClick="parent.location='supplier.php'" value='Διαχείρηση Προμηθευτών'>
        <input type=button onClick="parent.location='show_sup.php'" value='Προβολή Προμηθευτών'>
        <br><br><input type=button onClick="parent.location='logout.php'" value='Αποσύνδεση'>
    </div>

    </div>  
    </body>
</html>