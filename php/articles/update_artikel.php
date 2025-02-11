<?php
// Include the database connection
require_once '../db.php';

// Get input data
$article_id = $_POST['article_id'];
$title = $_POST['title'];
$content = $_POST['content'];

// Prepare and execute the query
try {
    $sql = "UPDATE article SET title = :title, content = :content, updated_at = NOW() WHERE article_id = :article_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':article_id', $article_id);
    $stmt->execute();

    // Redirect or show success message
    echo "<script>alert('Artikel berhasil diperbarui!'); window.location='dashboard-admin.php';</script>";
} catch (PDOException $e) {
    // Handle errors
    error_log("Error updating article: " . $e->getMessage());
    die("Maaf, terjadi kesalahan saat memperbarui artikel.");
}
?>