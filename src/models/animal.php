<?php
class Animal {
    private $conn;
    private $table_name = "animals";

    public $id;
    public $name;
    public $species;
    public $habitat_id;
    public $image;

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
        $query = "INSERT INTO " . $this->table_name . " SET name=:name, species=:species, habitat_id=:habitat_id, image=:image";
        $stmt = $this->conn->prepare($query);

        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->species=htmlspecialchars(strip_tags($this->species));
        $this->habitat_id=htmlspecialchars(strip_tags($this->habitat_id));
        $this->image=htmlspecialchars(strip_tags($this->image));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":species", $this->species);
        $stmt->bindParam(":habitat_id", $this->habitat_id);
        $stmt->bindParam(":image", $this->image);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    function update() {
        $query = "UPDATE " . $this->table_name . " SET name=:name, species=:species, habitat_id=:habitat_id, image=:image WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->species=htmlspecialchars(strip_tags($this->species));
        $this->habitat_id=htmlspecialchars(strip_tags($this->habitat_id));
        $this->image=htmlspecialchars(strip_tags($this->image));
        $this->id=htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":species", $this->species);
        $stmt->bindParam(":habitat_id", $this->habitat_id);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":id", $this->id);

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



require_once 'BaseModel.php';

class Animal extends BaseModel {
    protected $table = 'animals';

    public function __construct() {
        parent::__construct();
    }

    public function createAnimal($data) {
        return $this->create($this->table, $data);
    }

    public function getAnimals($conditions = []) {
        return $this->read($this->table, $conditions);
    }

    public function getAnimalDetails($id) {
        $sql = "SELECT a.*, v.report AS veterinarian_report
                FROM animals a
                LEFT JOIN veterinarianreports v ON a.id = v.animal_id
                WHERE a.id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAnimal($data, $conditions) {
        return $this->update($this->table, $data, $conditions);
    }

    public function deleteAnimal($conditions) {
        return $this->delete($this->table, $conditions);
    }
}

?>
