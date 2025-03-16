<?php
session_start();
require_once __DIR__ . '/../config/database.php';
$config = require_once __DIR__ . '/../config/database.php';
$pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['username'], $config['password']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 加载路由
$routes = require_once __DIR__ . '/../config/routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$uri])) {
    list($controller, $method) = explode('@', $routes[$uri]);
    require_once __DIR__ . '/../app/controllers/' . $controller . '.php';
    $controllerInstance = new $controller();
    $controllerInstance->$method();
} else {
    http_response_code(404);
    echo '404 Not Found';
}