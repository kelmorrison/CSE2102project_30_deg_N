<?php
 session_start();
 session_destroy();
 header('Location: forme.php');
exit;
?>