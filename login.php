<?php
session_start();

// Define your user credentials (this could come from a database in real-world use)
$username = 'admin';
$password = 'admin';

// Check if request is POST and if username and password are provided
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON input
    $input = json_decode(file_get_contents('php://input'), true);
    
    $input_username = $input['username'] ?? '';
    $input_password = $input['password'] ?? '';

    // Validate the credentials
    if ($input_username === $username && $input_password === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Respond with a success message
        echo json_encode(['message' => 'Login successful', 'status' => 200]);
    } else {
        // Respond with error
        http_response_code(401);
        echo json_encode(['message' => 'Invalid username or password', 'status' => 401]);
    }
} else {
    // Method not allowed if not POST
    http_response_code(405);
    echo json_encode(['message' => 'Method Not Allowed', 'status' => 405]);
}
?>
