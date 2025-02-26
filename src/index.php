<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'Products',
    'action' => 'index'
  ),
  'detail' => array(
    'controller' => 'Products',
    'action' => 'detail'
  ),
  'cart' => array(
    'controller' => 'Orders',
    'action' => 'cart'
  ),
  'checkout' => array(
    'controller' => 'Orders',
    'action' => 'checkout'
  ),
  'payment' => array(
    'controller' => 'Orders',
    'action' => 'payment'
  ),
  'message' => array(
    'controller' => 'Orders',
    'action' => 'message'
  ),
  'longreadHome' => array(
    'controller' => 'Products',
    'action' => 'longreadHome'
  ),
  'longreadError' => array(
    'controller' => 'Products',
    'action' => 'longreadError'
  ),
  'longread' => array(
    'controller' => 'Products',
    'action' => 'longread'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
