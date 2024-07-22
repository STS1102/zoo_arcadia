<?php
include_once '../models/animal.php';
include_once '../config/database.php';

class AnimalController {
    private $animal;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->animal = new Animal($db);
    }

    public function getAnimals() {
        $stmt = $this->animal->read();
        $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $animals;
    }

    public function createAnimal($data) {
        $this->animal->name = $data['name'];
        $this->animal->species = $data['species'];
        $this->animal->habitat_id = $data['habitat_id'];
        $this->animal->image = $data['image'];

        if ($this->animal->create()) {
            return array('message' => 'Animal created successfully.');
        } else {
            return array('message' => 'Animal could not be created.');
        }
    }

    public function updateAnimal($data) {
        $this->animal->id = $data['id'];
        $this->animal->name = $data['name'];
        $this->animal->species = $data['species'];
        $this->animal->habitat_id = $data['habitat_id'];
        $this->animal->image = $data['image'];

        if ($this->animal->update()) {
            return array('message' => 'Animal updated successfully.');
        } else {
            return array('message' => 'Animal could not be updated.');
        }
    }

    public function deleteAnimal($id) {
        $this->animal->id = $id;
        if ($this->animal->delete()) {
            return array('message' => 'Animal deleted successfully.');
        } else {
            return array('message' => 'Animal could not be deleted.');
        }
    }
}

require_once 'models/Animal.php';

class AnimalController {
    private $model;

    public function __construct() {
        $this->model = new Animal();
    }

    public function showAnimalDetails($id) {
        $animal = $this->model->getAnimalDetails($id);
        require 'views/animal/details.php';
    }

    public function listAnimals() {
        $animals = $this->model->getAnimals();
        require 'views/animal/list.php';
    }
}

?>
