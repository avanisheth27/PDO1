<?php
$dsn = 'mysql:dbname=avs44;host=sql2.njit.edu';
$user = 'avs44';
$password = 'APcA7GqK';

try 
{
    $dbh = new PDO($dsn, $user, $password);
    echo "<b>Connected successfully</b>";
    echo "<br><hr>";

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

catch (PDOException $e) 
{
  echo 'Connection failed: ' . $e->getMessage();
}

$sql = "Select * from accounts";

try 
{
  $dbh->exec($sql);
} 
catch (PDOException $e) 
{
echo $sql . "<br>" . $e->getMessage();
}
echo 'done';
?>