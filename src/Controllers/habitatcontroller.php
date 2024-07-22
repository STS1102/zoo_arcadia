<?php
include_once '../models/habitat.php';
include_once '../config/database.php';

class HabitatController {
    private $habitat;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->habitat = new Habitat($db);
    }

    public function getHabitats() {
        $stmt = $this->habitat->read();
        $habitats = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $habitats;
    }

    public function createHabitat($data) {
        $this->habitat->name = $data['name'];
        $this->habitat->description = $data['description'];

        if ($this->habitat->create()) {
            return array('message' => 'Habitat created successfully.');
        } else {
            return array('message' => 'Habitat could not be created.');
        }
    }

    public function updateHabitat($data) {
        $this->habitat->id = $data['id'];
        $this->habitat->name = $data['name'];
        $this->habitat->description = $data['description'];

        if ($this->habitat->update()) {
            return array('message' => 'Habitat updated successfully.');
        } else {
            return array('message' => 'Habitat could not be updated.');
        }
    }

    public function deleteHabitat($id) {
        $this->habitat->id = $id;
        if ($this->habitat->delete()) {
            return array('message' => 'Habitat deleted successfully.');
        } else {
            return array('message' => 'Habitat could not be deleted.');
        }
    }
}
?>
