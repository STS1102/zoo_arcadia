<?php
require '../vendor/autoload.php';
require '../src/config/database.php';
require '../src/controllers/animalcontroller.php';
require '../src/controllers/contactcontroller.php';
require '../src/controllers/habitatcontroller.php';
require '../src/controllers/reviewcontroller.php';
require '../src/controllers/servicecontroller.php';
require '../src/controllers/usercontroller.php';
require '../src/controllers/veterianreportcontroller.php';

$router = new AltoRouter();

// Map routes
$router->map('GET', '/', function() {
    require '../Views/home.php';
});

$router->map('GET', '/connexion', function() {
    require '../Views/users/login.php';
});

// More routes here...

// Match the current request
$match = $router->match();

// Call the matched handler
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // No route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    require '../Views/404.php';
}
?>
