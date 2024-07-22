<?php
include_once '../models/service.php';
include_once '../config/database.php';

class ServiceController {
    private $service;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->service = new Service($db);
    }

    public function getServices() {
        $stmt = $this->service->read();
        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $services;
    }

    public function createService($data) {
        $this->service->name = $data['name'];
        $this->service->description = $data['description'];
        $this->service->price = $data['price'];

        if ($this->service->create()) {
            return array('message' => 'Service created successfully.');
        } else {
            return array('message' => 'Service could not be created.');
        }
    }

    public function updateService($data) {
        $this->service->id = $data['id'];
        $this->service->name = $data['name'];
        $this->service->description = $data['description'];
        $this->service->price = $data['price'];

        if ($this->service->update()) {
            return array('message' => 'Service updated successfully.');
        } else {
            return array('message' => 'Service could not be updated.');
        }
    }

    public function deleteService($id) {
        $this->service->id = $id;
        if ($this->service->delete()) {
            return array('message' => 'Service deleted successfully.');
        } else {
            return array('message' => 'Service could not be deleted.');
        }
    }
}
?>
