<?php
class Review {
    private $conn;
    private $table_name = "reviews";

    public $id;
    public $pseudo;
    public $comment;
    public $approved;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (pseudo, comment) VALUES (:pseudo, :comment)";
        $stmt = $this->conn->prepare($query);

      
        $this->pseudo = htmlspecialchars(strip_tags($this->pseudo));
        $this->comment = htmlspecialchars(strip_tags($this->comment));

    
        $stmt->bindParam(':pseudo', $this->pseudo);
        $stmt->bindParam(':comment', $this->comment);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function readPending() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE approved = 0";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    
    public function approve($id) {
        $query = "UPDATE " . $this->table_name . " SET approved = 1 WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
