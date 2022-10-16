<?php
$servername = 'database-2.ciedmyepmavr.ap-south-1.rds.amazonaws.com:3306';
$username = "admin";
$password = "rajesh123A";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>