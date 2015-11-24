
<?php
include_once('Database.php');
session_start ();
unset($_SESSION['userName']);
unset($_SESSION['panier']);
header ('location: homepage.php');

 
?>