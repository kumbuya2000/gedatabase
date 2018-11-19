

<html>
<head>
<title>MySQL Connection</title>
</head>
<body>

<?php

echo"<h1>PHP Test</h1>";

echo"<p>PHP is working now. It's about time.</p>";

echo "<p>Now let's test the connection to the server.</p>";

$servername = "den1.mysql6.gear.host";
$username = "gearexchange";
$password = "Keepitclean1!";
$dbname = "gearexchange";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<p>Connected successfully<p>";

?>

</body>
</html>


