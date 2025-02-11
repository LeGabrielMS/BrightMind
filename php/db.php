<?php
// db.php

// Database configuration
$host = "localhost";
$db = "brightmind";
$user = "root";
$pass = "";

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);

    // Set PDO attributes
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exceptions for errors
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Fetch results as associative arrays
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Use native prepared statements

} catch (PDOException $e) {
    // Log the error (for debugging)
    error_log("Database connection failed: " . $e->getMessage());

    // Display a user-friendly error message
    die("Maaf, terjadi kesalahan pada sistem. Silakan coba lagi nanti.");
}

// Function to get the database connection
function getDbConnection()
{
    global $conn;
    return $conn;
}
?>