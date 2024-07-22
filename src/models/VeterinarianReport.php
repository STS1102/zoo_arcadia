<?php
class VeterinarianReport {
    private $conn;
    private $table_name = "veterinarianreports";

    public $id;
    public $animal_id;
    public $report;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function create() {
        $query = "INSERT INTO " . $this->table_name . " SET animal_id=:animal_id, report=:report, created_at=:created_at";
        $stmt = $this->conn->prepare($query);

        $this->animal_id=htmlspecialchars(strip_tags($this->animal_id));
        $this->report=htmlspecialchars(strip_tags($this->report));
        $this->created_at=htmlspecialchars(strip_tags($this->created_at));

        $stmt->bindParam(":animal_id", $this->animal_id);
        $stmt->bindParam(":report", $this->report);
        $stmt->bindParam(":created_at", $this->created_at);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->id=htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
