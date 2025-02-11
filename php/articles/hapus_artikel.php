<?php
// Include the database connection
require_once '../db.php';

// Get input data
$article_id = $_POST['article_id'];

// Prepare and execute the query
try {
    $sql = "DELETE FROM article WHERE article_id = :article_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':article_id', $article_id);
    $stmt->execute();

    // Redirect or show success message
    echo "<script>alert('Artikel berhasil dihapus!'); window.location='dashboard-admin.php';</script>";
} catch (PDOException $e) {
    // Handle errors
    error_log("Error deleting article: " . $e->getMessage());
    die("Maaf, terjadi kesalahan saat menghapus artikel.");
}
?>