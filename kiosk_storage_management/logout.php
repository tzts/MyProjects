<?php
session_start();
session_destroy();
echo '<div id="logout" align="center">';
echo 'Αποσυνδεθήκατε με επιτυχία!';
header ('Location: index.php');
echo '</div>';
?>