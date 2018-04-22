<?php
/**
 * SAN FRAMEWORK v1.1
 * Supported:
 * + MVC
 * + MySQLi
 * + Router
 * Easy for learning MVC structure
 */

// running application
require_once "./config/routes.php";
require_once "./config/database.php";
require_once "./core/Model.php";
require_once "./core/Controller.php";
require_once "./core/Master.php";

// get route
$page = '';
if (empty($routes[0])) {
    $page = "/";
}
else {
    $page = "/".implode("/", $routes);
}

// retrieve method
$method = $_SERVER['REQUEST_METHOD'];

if (count($route[$method]) <= 0)
{
    DIE("404 not found!");
}

// check now
if (isset($route[$method][$page]))
{
    run_controller($route[$method][$page]);
}
else {
    // check if this is dynamic route
    foreach ($route[$method] as $path => $controller)
    {
        if (stristr($path, '(') == false && stristr($path, ')') == false)
            continue;
        preg_match_all("/".parse_route($path)."/", $page, $matches);

        if (count($matches[1]) > 0)
        {
            run_controller($route[$method][$path], $matches[1]);
            return;
        }
    }

    // if you out here, 100% no route
    DIE("404 not found!");
}