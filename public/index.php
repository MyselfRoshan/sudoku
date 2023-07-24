<?php

use App\Router;

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . "/config/functions.php";

// dd($_SERVER);
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $class = lcfirst($class);
    // dd($class);
    require base_path("{$class}.php");
});
$router = new Router();
$routes = require base_path("app/routes.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_request_method'] ?? $_SERVER['REQUEST_METHOD'];
// dd($method);
$router->route($uri, $method);
