<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" >
</head>
<body>
<h1><center><a href="http://localhost/php/main.php"><img src="image2.jpg"></a></center><a href="./logoutd.php" style="text-align:right;">Logout</a></h1>

<?php
$db = "timetracker";
$con = mysqli_connect("localhost", "kelvinmorrison", "kelvin", $db);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

session_start();


// query username and password from appropriate database table based on username entered

//store query data $row['password']


//compare what user entered to what the database served
//if true reroute to appropriate page

//if false show error message
$sql = "SELECT DriversID, FirstName, LastName, TelephoneNO., licsensNO. FROM drivers";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["DriversID"]. "Name: " . $row["Firstname"]. " " . $row["LastName"]. "<br>" . $row["licenceNO."] . $row["telephoneNO."];
    }
} else {
    echo "0 results";
}
$con->close();

?>
</body>
</html>