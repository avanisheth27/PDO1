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
echo '<br>';



   //Print_r($result);
  echo "<table cellpadding='5px' border='1px' style='border-collapse: collapse'>";
 echo '<tr><th>id</th><th>email</th><th>fname</th><th>lname</th><th>phone</th><th>birthday</th><th>gender</th><th>password</th></tr>';
foreach ($result as $label)
{
    echo '<tr>';
       
        echo '<td>'.$label['id'].'</td>';
        echo '<td>'.$label['email'].'</td>';
        echo '<td>'.$label['fname'].'</td>';
        echo '<td>'.$label['lname'].'</td>';
        echo '<td>'.$label['phone'].'</td>';
        echo '<td>'.$label['birthday'].'</td>';
        echo '<td>'.$label['gender'].'</td>';
        echo '<td>'.$label['password'].'</td>';
        
    echo '</tr>';
}
echo '</table>';


 
 ?>