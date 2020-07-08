<?php

	$Res->status = 404;
	$Res->message = "Not Found";
	$Res->help = "Please try /test and /api endpoints.";
	
	print_r(json_encode($Res));
?>