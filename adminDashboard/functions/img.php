<?php
require_once("../../backend/db.php");

// Establish database connection
$conn = connect_db(); // Assuming connect_db() function is defined in db.php

// Get the user ID (or any other identifier)
$userId = $_GET['id'];

// Fetch the image data from the database
$sql = "SELECT photo FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($photo);
$stmt->fetch();
$stmt->close();
$conn->close();

if ($photo) {
    // Display the image
    header("Content-Type: image/jpeg"); // Adjust the content type as needed
    echo $photo;
} else {
    echo "No image found for the specified ID.";
}
?>