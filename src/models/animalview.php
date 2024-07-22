<?php
class AnimalView {
    private $conn;
    private $table_name = "animalviews";

    public $id;
    public $animal_id;
    public $viewed_at;

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
        $query = "INSERT INTO " . $this->table_name . " SET animal_id=:animal_id, viewed_at=:viewed_at";
        $stmt = $this->conn->prepare($query);

        $this->animal_id=htmlspecialchars(strip_tags($this->animal_id));
        $this->viewed_at=htmlspecialchars(strip_tags($this->viewed_at));

        $stmt->bindParam(":animal_id", $this->animal_id);
        $stmt->bindParam(":viewed_at", $this->viewed_at);

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
