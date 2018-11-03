<?php
session_start();
 if($_REQUEST['usrname']=="val" && $_REQUEST['pass']=="password")
 {
 $_SESSION['usrname'] = "val";
 $_SESSION['pass'] = "password";
 header("Location: logoffe.html");
 }
 else{
 header("Location: formd.php");
 }
?>