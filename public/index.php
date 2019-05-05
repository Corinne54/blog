<?php

require '../config/dev.php';
require '../vendor/autoload.php';
session_start();
session_regenerate_id(true);

$router = new \App\config\Router();
$router->run();