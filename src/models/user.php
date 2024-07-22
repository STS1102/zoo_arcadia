<?php
class User {
    private $conn;
    private $table_name = "users";

    public $id;
    public $username;
    public $password;
    public $role;

    public function __construct($db) {
        $this->conn = $db;
    }

    
    public function validateUser() {
        $query = "SELECT id, username, password, role FROM " . $this->table_name . " WHERE username = ? LIMIT 0,1";

        
        $stmt = $this->conn->prepare($query);

       
        $this->username = htmlspecialchars(strip_tags($this->username));

    
        $stmt->bindParam(1, $this->username);

        
        $stmt->execute();


        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            
            error_log("Fetched user: " . print_r($row, true));

            
            if (password_verify($this->password, $row['password'])) {
                
                $this->id = $row['id'];
                $this->role = $row['role'];
                return true;
            } else {
                error_log("Password mismatch for user: " . $this->username);
            }
        } else {
            error_log("No user found with username: " . $this->username);
        }

        return false;
    }
}
?>
