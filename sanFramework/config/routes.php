<?php
/**
 * Routing config
 *
 * Static route
 * Example: $route['GET']['/register'] = 'RegisterController/index';
 * Example: $route['POST']['/doRegister'] = 'RegisterController/doReg';
 *
 * Dynamic route
 * Example: $route['GET']['/view/([0-9]+)'] = 'ViewController/index';
 * (View more for the Regex online: Regex cheat sheet)
 * And at your function, like this:
 * function index($id) { ... }
 * We automatically pass the parameter.
 *
 * Note: if you don't define the function, index will be default function
 */

$route['GET']['/'] = "HomeController/index";
$route['GET']['/view/(\d+)'] = 'HomeController/item';