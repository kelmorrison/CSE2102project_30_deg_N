<?php
session_start();
 if($_REQUEST['usrname']=="noel" && $_REQUEST['pass']=="pa55")
 {
 $_SESSION['usrname'] = "noel";
 $_SESSION['pass'] = "pa55";
 header("Location: logoffa.html");
 }
 else{
 header("Location: forma.php");
 }
?>