<?php
include_once '../models/contactrequest.php';
include_once '../config/database.php';

class ContactController {
    private $contactRequest;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->contactRequest = new ContactRequest($db);
    }

    public function getContactRequests() {
        $stmt = $this->contactRequest->read();
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $contacts;
    }

    public function createContactRequest($data) {
        $this->contactRequest->name = $data['name'];
        $this->contactRequest->email = $data['email'];
        $this->contactRequest->message = $data['message'];

        if ($this->contactRequest->create()) {
            return array('message' => 'Contact request created successfully.');
        } else {
            return array('message' => 'Contact request could not be created.');
        }
    }

    public function deleteContactRequest($id) {
        $this->contactRequest->id = $id;
        if ($this->contactRequest->delete()) {
            return array('message' => 'Contact request deleted successfully.');
        } else {
            return array('message' => 'Contact request could not be deleted.');
        }
    }
}
?>
