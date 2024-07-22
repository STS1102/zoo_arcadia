<?php
require_once '../src/config/database.php';
require_once '../src/models/review.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
    $comment = htmlspecialchars(strip_tags($_POST['comment']));

    $database = new Database();
    $db = $database->getConnection();

    $review = new Review($db);
    $review->pseudo = $pseudo;
    $review->comment = $comment;

    if ($review->create()) {
        header("Location: index.html?success=review_submitted");
    } else {
        header("Location: index.html?error=review_submission_failed");
    }
}
?>
