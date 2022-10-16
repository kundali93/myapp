<?php
$dbhost = $_SERVER['awseb-e-ez8jeiprkj-stack-awsebrdsdatabase-t4rcjts3piik.ciedmyepmavr.ap-south-1.rds.amazonaws.com'];
$dbport = $_SERVER['3306'];
$dbname = $_SERVER['react_crud'];
$charset = 'utf8' ;

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = $_SERVER['admin'];
$password = $_SERVER['rajesh123A'];

$pdh = new PDO($dsn, $username, $password);

$sth = $dbh->prepare("SELECT * FROM user");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
print_r($result);
?>