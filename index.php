<?php
echo "helo00";
try {
    $dbhost = $_SERVER["awseb-e-ez8jeiprkj-stack-awsebrdsdatabase-t4rcjts3piik.ciedmyepmavr.ap-south-1.rds.amazonaws.com:3306"];
    //$link = new mysqli($_SERVER['awseb-e-ez8jeiprkj-stack-awsebrdsdatabase-t4rcjts3piik.ciedmyepmavr.ap-south-1.rds.amazonaws.com:3306'], $_SERVER['admin'], $_SERVER['rajesh123A'], $_SERVER['react_crud'], $_SERVER['3306']);
    $dbname = $_SERVER["user"];
    $charset = 'utf8' ;

    $dsn = "mysql:host={$dbhost};dbname={$dbname};charset={$charset}";
    $username = $_SERVER['admin'];
    $password = $_SERVER['rajesh123A'];

    $pdo = new PDO($dsn, $username, $password);
    echo "done";
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}


?>