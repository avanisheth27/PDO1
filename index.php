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
    $query1 = $dbh->prepare("SELECT * FROM accounts where id<6");
    $query1->execute();
    $result = $query1->setFetchMode(PDO::FETCH_ASSOC);
    $result = $query1->fetchAll();
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