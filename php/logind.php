<?php

if($_REQUEST['usrname']=="kel" && $_REQUEST['pass']=="pass")
{
$_SESSION['usrname'] = "kel";
$_SESSION['pass'] = "pass";
header("Location: logoffd.php");
}
else{
header("Location: formd.php");




}
?>