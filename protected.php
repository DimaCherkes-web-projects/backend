<?php
session_start();

// Check if the user is authenticated
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // If logged in, return a success message
    echo json_encode(['message' => 'You have access to protected content', 'status' => 200]);
} else {
    // If not logged in, return an error
    http_response_code(403);
    echo json_encode(['message' => 'Access denied. You are not logged in.', 'status' => 403]);
}
?>

