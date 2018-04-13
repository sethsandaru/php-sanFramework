<?php

/// solving route...
$basePath = explode('/' , $_SERVER['SCRIPT_NAME']);

$uri = explode('/', trim($_SERVER['REQUEST_URI'], '/')) ;
$uri = array_diff($uri, array(''));

$routes = array_values(array_diff($uri, $basePath));
$routes = array_map('trim', $routes);


// function
function run_controller($controller, $data = [])
{
    $ctr = explode("/", $controller);
    $class = $ctr[0];
    $class_namespace = "\\controllers\\" .$ctr[0];

    // check file
    if (file_exists("./controllers/$class.php") == false)
        DIE("500 - Controller file is not existed");

    // require
    require_once "./controllers/$class.php";


    // check class
    if (class_exists($class_namespace) == false)
        DIE("500 - Controller class is not existed");

    // method
    $method = "index";
    if (isset($ctr[1]))
        $method = $ctr[1];

    // create obj
    $obj = new $class_namespace();

    call_user_func_array([$obj, $method], $data);
}

function parse_route($route)
{
    return str_replace(['/'], ['\/'], $route);
}