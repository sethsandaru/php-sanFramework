<?php
/*
 * MYSQL Connect Information Configuration
 */
$database['host'] = "localhost";
$database['user'] = "root";
$database['pass'] = "mysql";
$database['database'] = "test";


/*
 * DEFINE for using
 */
define("SAN_HOST", $database['host']);
define("SAN_USER", $database['user']);
define("SAN_PASS", $database['pass']);
define("SAN_DB", $database['database']);