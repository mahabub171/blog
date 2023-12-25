<?php
// require 'functions.php';
// require 'Database.php';
// require 'Response.php';
// require 'route.php';
session_start();
require 'functions.php';
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require "{$class}.php";
});
// require 'router.php';

require 'bootstrap.php';

$router = new Router();

$routes = require('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);
