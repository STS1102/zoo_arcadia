<?php
require_once '../src/models/animal.php';
require_once '../src/config/database.php';

$database = new Database();
$db = $database->getConnection();

$animal = new Animal($db);


$animal->name = "Lion";
$animal->species = "Panthera leo";
$animal->age = 5;
if ($animal->create()) {
    echo "Animal créé avec succès.\n";
} else {
    echo "Échec de la création de l'animal.\n";
}


$stmt = $animal->read();
$num = $stmt->rowCount();
if ($num > 0) {
    echo "Animaux trouvés : $num.\n";
} else {
    echo "Aucun animal trouvé.\n";
}


$animal->id = 1; 
$animal->name = "Lion modifié";
if ($animal->update()) {
    echo "Animal mis à jour avec succès.\n";
} else {
    echo "Échec de la mise à jour de l'animal.\n";
}


$animal->id = 1; 
if ($animal->delete()) {
    echo "Animal supprimé avec succès.\n";
} else {
    echo "Échec de la suppression de l'animal.\n";
}
?>
