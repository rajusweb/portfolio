<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "messages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['messages'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES ($name, $email, $messages)");
$stmt->bind_param("sss", $name, $email, $messages);

// Execute the statement
if ($stmt->execute()) {
    echo "We appreciate you taking the time to reach out, and one of our support team members will be in touch with you shortly";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
