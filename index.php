<!Doctype HTML>
<html>
<body>
	<?php

$servername = "sql2.njit.edu";
$username = "avs44";
$password = "APcA7GqK";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<b>Connected successfully</b>";
echo "<br><hr>";
?>
</body>
</html>

