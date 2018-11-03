<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
 header("Location: niceform.php");
} 
 include 'logoff.html';

?>