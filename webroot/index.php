<?php

//use lib\Router;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'views');

require_once ("../lib/Init.php");


$uri = $_SERVER['REQUEST_URI'];
$userUri = substr($uri, 10);
//$router = new Router($userUri);
//
////print_r($uri);
//
//echo "<br />";
//print_r("Route: ". $router->getRoute());
//echo "<br />";
//print_r("Language: ". $router->getLanguage());
//echo "<br />";
//print_r("Controller: ". $router->getController());
//echo "<br />";
//print_r("Action to be called: ". $router->getMethodPrefix().$router->getAction().PHP_EOL);
//echo "Params: ";
//print_r($router->getParams());
//echo "</pre>";

App::run($userUri);

Session::setFlash('Test flash message!');

$test = App::$db->query('select * from pages');
//echo "<pre>";
//print_r($test);
