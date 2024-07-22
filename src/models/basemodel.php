<?php
class BaseModel {
    protected $conn;

    public function __construct() {
        $host = 'localhost';
        $db = 'zoo';
        $user = 'root';
        $pass = '';

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    protected function create($table, $data) {
        $keys = implode(',', array_keys($data));
        $placeholders = ':' . implode(',:', array_keys($data));
        $sql = "INSERT INTO $table ($keys) VALUES ($placeholders)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    protected function read($table, $conditions = []) {
        $sql = "SELECT * FROM $table";
        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(' AND ', array_map(function ($key) {
                return "$key = :$key";
            }, array_keys($conditions)));
        }
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($conditions);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function update($table, $data, $conditions) {
        $setPart = implode(', ', array_map(function ($key) {
            return "$key = :$key";
        }, array_keys($data)));
        $conditionPart = implode(' AND ', array_map(function ($key) {
            return "$key = :$key";
        }, array_keys($conditions)));
        $sql = "UPDATE $table SET $setPart WHERE $conditionPart";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(array_merge($data, $conditions));
    }

    protected function delete($table, $conditions) {
        $conditionPart = implode(' AND ', array_map(function ($key) {
            return "$key = :$key";
        }, array_keys($conditions)));
        $sql = "DELETE FROM $table WHERE $conditionPart";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($conditions);
    }
}
?>
