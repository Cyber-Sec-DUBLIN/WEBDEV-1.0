<?php

$servername = "localhost";
$DB_username = "username";
$DB_password = "password";

$conn = new mysqli($servername, $DB_username, $DB_password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";





?>