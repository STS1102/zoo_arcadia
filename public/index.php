<?php

require '../lib/AltoRouter.php';

$router = new AltoRouter();

$router->map('GET', '/', function() {
    require 'home.php';
});

$router->map('GET', '/connexion', function() {
    require 'connexion.html';
});


$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    require '404.php';
}
?>
