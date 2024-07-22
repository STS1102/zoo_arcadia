<?php
include_once '../models/review.php';
include_once '../config/database.php';

class ReviewController {
    private $review;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->review = new Review($db);
    }

    public function getReviews() {
        $stmt = $this->review->read();
        $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $reviews;
    }

    public function createReview($data) {
        $this->review->user_id = $data['user_id'];
        $this->review->service_id = $data['service_id'];
        $this->review->rating = $data['rating'];
        $this->review->comment = $data['comment'];
        $this->review->created_at = $data['created_at'];

        if ($this->review->create()) {
            return array('message' => 'Review created successfully.');
        } else {
            return array('message' => 'Review could not be created.');
        }
    }

    public function deleteReview($id) {
        $this->review->id = $id;
        if ($this->review->delete()) {
            return array('message' => 'Review deleted successfully.');
        } else {
            return array('message' => 'Review could not be deleted.');
        }
    }
}
?>
