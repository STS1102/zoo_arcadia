<?php

use src\Controllers\AnimalController;
use src\Controllers\HabitatController;
use src\Controllers\ServiceController;
use src\Controllers\UserController;

$router->map('GET', '/animals', [AnimalController::class, 'index']);
$router->map('POST', '/animals', [AnimalController::class, 'store']);
$router->map('GET', '/animals/[i:id]', [AnimalController::class, 'show']);
$router->map('PUT', '/animals/[i:id]', [AnimalController::class, 'update']);
$router->map('DELETE', '/animals/[i:id]', [AnimalController::class, 'destroy']);

$router->map('GET', '/habitats', [HabitatController::class, 'index']);
$router->map('POST', '/habitats', [HabitatController::class, 'store']);
$router->map('GET', '/habitats/[i:id]', [HabitatController::class, 'show']);
$router->map('PUT', '/habitats/[i:id]', [HabitatController::class, 'update']);
$router->map('DELETE', '/habitats/[i:id]', [HabitatController::class, 'destroy']);

$router->map('GET', '/services', [ServiceController::class, 'index']);
$router->map('POST', '/services', [ServiceController::class, 'store']);
$router->map('GET', '/services/[i:id]', [ServiceController::class, 'show']);
$router->map('PUT', '/services/[i:id]', [ServiceController::class, 'update']);
$router->map('DELETE', '/services/[i:id]', [ServiceController::class, 'destroy']);

$router->map('POST', '/login', [UserController::class, 'login']);
$router->map('POST', '/register', [UserController::class, 'register']);
$router->map('GET', '/logout', [UserController::class, 'logout']);
?>
