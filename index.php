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
$result = $sth->fetchAll();


if ($sth->num_rows > 0) {

  while($row = $sth->fetch_assoc()) {
    echo "Name: ". $row["user_id"]. "<br>";
  }
} 
else {
  echo "0 results";
}

//print_r($result);
echo "\n all done"
?>
