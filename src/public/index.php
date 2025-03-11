<?php

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ .'/../config/config.php';
require_once __DIR__.'/../app/controllers/HomeController.php';

$controller = new HomeController();
$controller->index();