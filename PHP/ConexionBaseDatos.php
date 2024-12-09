<?php
$servername = "localhost";
$username = "root";
$bdname="beautifulbody";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,$bdname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>