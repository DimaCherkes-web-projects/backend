<?php
session_start();

// Destroy the session to log the user out
session_unset();
session_destroy();

// Respond with a success message
echo json_encode(['message' => 'Logout successful', 'status' => 200]);
?>

