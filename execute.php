<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: content-type");


  $json = file_get_contents('php://input');

  $data = json_decode($json);
  if($data->query){
  	$result = $conn->query($data->query);
  	$rows = array();
	while($r = mysqli_fetch_assoc($result)) {
    		$rows[] = $r;
	}
	print json_encode($rows);
  }else{
  	
	$Res->status = 201;
	$Res->message = "No query found in request body";
	$Res->help = "Please provide 'query' property with proper MySql query.";
	
	print_r(json_encode($Res));
  }
  
?>