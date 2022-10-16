<?php
echo "helo00";
try {
    $dbhost = $_SERVER["127.0.0.1:3306"];
    //$link = new mysqli($_SERVER['awseb-e-ez8jeiprkj-stack-awsebrdsdatabase-tcz1qn5j8iij.ciedmyepmavr.ap-south-1.rds.amazonaws.com'], $_SERVER['admin'], $_SERVER['rajesh123A'], $_SERVER['user'], $_SERVER['3306']);
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