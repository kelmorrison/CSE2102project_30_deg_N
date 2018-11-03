<?php
$con = mysql_connect("localhost", "kelvinmorrison", "kelvin");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($con);
?>