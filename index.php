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

$sql = "SELECT * from accounts";
$result = $conn->query($sql);

try {
  
$conn->exec($sql);
} catch (PDOException $e) {
echo $result1 . "<br>" . $e->getMessage();

}
echo 'done';
$conn->close();
?>
</body>
</html>

