<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

include 'DbConnect.php';
$objDb = new DbConnect;
$conn = $objDb->connect();


$sth = $conn->prepare("SELECT * FROM user");
$sth->execute();
echo "<br>";
/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
echo "<br>";

$result = $sth->fetchAll();

print_r($result);
echo "\n all done"
  
$string=implode(",",$result);
echo $string;
?>
