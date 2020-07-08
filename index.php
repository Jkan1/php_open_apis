<?php
require 'database.php';
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require 'home.php';
        break;
    case '' :
        require 'home.php';
        break;
    case '/test' :
        require 'query.php';
        break;
    case '/api' :
        require 'execute.php';
        break;
    default:
        http_response_code(404);
        require '404.php';
        break;
}
?>