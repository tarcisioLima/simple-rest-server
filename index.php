<?php

require_once 'vendor/autoload.php';

use Config\Router;

$router = new Router();

# New routes must be declared right here.
$routes = [
	"/"			       => "HomeController",
	'/teste'	       => 'HomeController',
	"/not-found"       => "NotFoundController"
];
	
foreach($routes as $url => $controller) {
	$router->createNewRoute($url, $controller);
}

$router->startRouter();

?>