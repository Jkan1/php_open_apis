<?php
  global $conn;
  $conn = new mysqli("localhost", "root", "root", "open_api");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  }
  
?>