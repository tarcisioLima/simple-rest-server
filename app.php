<?php 

require_once 'vendor/autoload.php';

$token     = apache_request_headers()["authorization"];
$met	   = $_GET["met"];
$classe    = ucfirst($_GET["classe"]);
$verb	   = $_SERVER["REQUEST_METHOD"];
$arg	   = $_GET["arg0"];
$resource  = $classe . $verb;
$resource  = 'Controllers\\Api\\' . $resource;

if(class_exists($resource)) {
    $obj = new $resource();
    (isset($arg)) ? $obj->$met($arg) : $obj->$met();
}else {
	header('HTTP/1.0 404 Not Found');
}


?>