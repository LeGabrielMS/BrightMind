<?php
session_start();
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    try {
        $sql = "SELECT * FROM user WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && $password === $user['password']) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'admin') {
                header("Location: ../dashboard-admin.php");
            } else {
                header("Location: ../dashboard-logged-in.html");
            }
            exit();
        } else {
            echo "<script>alert('Invalid username or password!'); window.location='login-page.html';</script>";
        }
    } catch (PDOException $e) {
        error_log("Login error: " . $e->getMessage());
        echo "<script>alert('An error occurred. Please try again.'); window.location='auth/login-page.html';</script>";
    }
}
?>