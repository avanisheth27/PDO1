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
try {
    $stmt = $dbh->prepare("SELECT * FROM accounts where id<6");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    //print_r($result);
    
    }
    
catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
echo '<b>Number of Records returned from the Accounts table are :</b> ' ;
Print_r(count($result));
echo '<br><hr>';

   //Print_r($result);

 
 ?>