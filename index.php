
<html>
<body>

<?php

$servername = "sql2.njit.edu";
$username = "avs44";
$password = "APcA7GqK";
$query="SELECT * from accounts";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<b>Connected successfully</b>";
echo "<br><hr>";

function runQuery($query) {
 	global $conn;
     try {
 		$q = $conn->prepare($query);
 		$q->execute();
 	$results = $q->fetchAll();
 	$q->closeCursor();
 		return $results;	
 	} catch (PDOException $e) {
 		http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
 	}	  
 }

/*$sql = "SELECT * from accounts";
$result = $conn->query($sql);

try {
  
$conn->exec($sql);
} catch (PDOException $e) {
echo $result1 . "<br>" ;

}*/

echo 'done';
$conn->close();
?>
</body>
</html>

