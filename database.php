<?php
  global $conn;
  $conn = new mysqli("localhost", "kankan94_test0", "Qwerty@123", "kankan94_test0");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  }
  
?>