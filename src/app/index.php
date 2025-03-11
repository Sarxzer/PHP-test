<?php

require_once '../config/config.php';
require_once '../app/controllers/HomeController.php';

$controller = new HomeController();
$controller->index();