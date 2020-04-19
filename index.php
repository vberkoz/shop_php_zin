<?php

// FRONT CONTROLLER

// 1. Common settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Include system files
define('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/Router.php');

// 3. Establish database connection


// 4. Call Router
$router = new Router();
$router->run();