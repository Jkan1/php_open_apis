<?php

  $json = file_get_contents('php://input');

  $data = json_decode($json);
  
  //Printing the Request Body 
  
  echo json_encode($data);
  
?>