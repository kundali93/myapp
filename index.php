<?php
$mysqli = new mysqli("database-2.ciedmyepmavr.ap-south-1.rds.amazonaws.com:3306", "admin", "rajesh123A", "react_crud");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$res = $mysqli->query("SHOW TABLES [FROM react_crud] [LIKE '%']");

echo $res;

?>