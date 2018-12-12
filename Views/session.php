<?php
session_start();

if ($_SESSION["validLogin"] !== true && basename($_SERVER['PHP_SELF']) !== 'index.php') {
   header ('Location: index.php');
 }
?>
