<?php
// Include the database connection
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input data
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Handle image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check === false) {
        echo "<script>alert('File bukan gambar.'); window.location='create_article.php';</script>";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>alert('File sudah ada.'); window.location='create_article.php';</script>";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($_FILES["gambar"]["size"] > 5000000) {
        echo "<script>alert('Ukuran file terlalu besar.'); window.location='create_article.php';</script>";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "<script>alert('Hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.'); window.location='create_article.php';</script>";
        $uploadOk = 0;
    }

    // If everything is OK, try to upload file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Prepare and execute the query
            try {
                $sql = "INSERT INTO article (title, content, gambar, created_at, updated_at) VALUES (:title, :content, :gambar, NOW(), NOW())";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':content', $content);
                $stmt->bindParam(':gambar', $target_file);
                $stmt->execute();

                // Redirect or show success message
                echo "<script>alert('Artikel berhasil ditambahkan!'); window.location='dashboard-admin.php';</script>";
            } catch (PDOException $e) {
                // Handle errors
                error_log("Error saving article: " . $e->getMessage());
                die("Maaf, terjadi kesalahan saat menyimpan artikel.");
            }
        } else {
            echo "<script>alert('Terjadi kesalahan saat mengunggah file.'); window.location='create_article.php';</script>";
        }
    }
}
?>