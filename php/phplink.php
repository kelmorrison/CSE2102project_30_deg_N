<html>
<head><link rel="stylesheet" type="text/css" href="styles.php" ></head>
<body>
<h1><center><a href=""><img src="image2.jpg"></a></center></h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
db=
$con = new mysqli_connect($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>