<?php
include_once '../models/veterinarianreport.php';
include_once '../config/database.php';

class VeterinarianReportController {
    private $veterinarianReport;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->veterinarianReport = new VeterinarianReport($db);
    }

    public function getVeterinarianReports() {
        $stmt = $this->veterinarianReport->read();
        $reports = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $reports;
    }

    public function createVeterinarianReport($data) {
        $this->veterinarianReport->animal_id = $data['animal_id'];
        $this->veterinarianReport->report = $data['report'];
        $this->veterinarianReport->created_at = $data['created_at'];

        if ($this->veterinarianReport->create()) {
            return array('message' => 'Veterinarian report created successfully.');
        } else {
            return array('message' => 'Veterinarian report could not be created.');
        }
    }

    public function deleteVeterinarianReport($id) {
        $this->veterinarianReport->id = $id;
        if ($this->veterinarianReport->delete()) {
            return array('message' => 'Veterinarian report deleted successfully.');
        } else {
            return array('message' => 'Veterinarian report could not be deleted.');
        }
    }
}
?>
