<?php

use App\Router;
use Database\Database;

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . "app/Helper/functions.php";
require base_path("/config/bootstrap.php");

// auto require class when corresponding namespace is called
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $class = lcfirst($class);
    require base_path("{$class}.php");
});
$router = new Router();
$db = new Database();
$db->select("select * from users where id =1");
$routes = require base_path("app/routes.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_request_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);
