<?php
include_once '../models/user.php';
include_once '../config/database.php';

class UserController {
    private $user;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->user = new User($db);
    }

    public function getUsers() {
        $stmt = $this->user->read();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function createUser($data) {
        $this->user->username = $data['username'];
        $this->user->email = $data['email'];
        $this->user->password = password_hash($data['password'], PASSWORD_BCRYPT);

        if ($this->user->create()) {
            return array('message' => 'User created successfully.');
        } else {
            return array('message' => 'User could not be created.');
        }
    }

    public function deleteUser($id) {
        $this->user->id = $id;
        if ($this->user->delete()) {
            return array('message' => 'User deleted successfully.');
        } else {
            return array('message' => 'User could not be deleted.');
        }
    }
}
?>
