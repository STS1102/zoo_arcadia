<?php
require_once 'src/config/database.php';

$database = new Database();
$db = $database->getConnection();

if ($db) {
    echo "Connexion à la base de données réussie.";
} else {
    echo "Échec de la connexion à la base de données.";
}
?>
