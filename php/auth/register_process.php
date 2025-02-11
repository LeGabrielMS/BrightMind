<?php
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        echo "<script>alert('All fields are required!'); window.location='auth/signup-page.html';</script>";
        exit();
    }

    try {
        // Prepare SQL query
        $sql = "INSERT INTO user (username, password, role) VALUES (:username, :password, 'user')";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        // Redirect after success
        header("Location: login-page.html");
        exit();
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        echo "<script>alert('Registration failed. Username might be taken.'); window.location='signup-page.html';</script>";
    }
}
?>