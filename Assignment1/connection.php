<?php
// Database configuration
$hostname = 'localhost'; 
$username = 'root'; 
$password = ''; 
$dbname = 'company'; 

// Create a connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Removed "Connected successfully!" message for production use

// Sample data for insertion (for demonstration purposes)
$username = 'JohnDoe';
$email = 'john@example.com';
$pwd = 'secretpassword';

// Hash the password before storing it
$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

// Insert query with parameterized statements to prevent SQL injection
$insertQuery = $conn->prepare("INSERT INTO user (username, email, pwd) VALUES (?, ?, ?)");
$insertQuery->bind_param('sss', $username, $email, $hashedPwd);
$insertQuery->execute();

// Select query with parameterized statements
$selectQuery = $conn->prepare("SELECT * FROM user WHERE username = ?");
$selectQuery->bind_param('s', $username);
$selectQuery->execute();
$result = $selectQuery->get_result();

// Fetch data (for demonstration purposes)
while ($row = $result->fetch_assoc()) {
    echo "User: " . $row['username'] . " - Email: " . $row['email'] . "<br>";
}

// Close the database connection
$conn->close();
