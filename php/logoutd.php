<?php
 session_start();
 session_destroy();
 header('Location: formd.php');
exit;
?>