<?php
echo "helo00";
try {

    $dbhost = $_SERVER['awseb-e-vjmh8svkrk-stack-awsebrdsdatabase-ckov2yb0cvbk.ciedmyepmavr.ap-south-1.rds.amazonaws.com'];
    $dbport = $_SERVER['3306'];
    $dbname = $_SERVER['new_db'];
    $charset = 'utf8' ;

    $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
    $username = $_SERVER['admin'];
    $password = $_SERVER['rajesh123A'];

    $pdo = new PDO($dsn, $username, $password);

}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>