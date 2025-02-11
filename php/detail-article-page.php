<?php
// Sertakan file koneksi database
require_once 'db.php';

// Ambil ID artikel dari URL secara aman
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

try {
    // Persiapkan dan jalankan query menggunakan prepared statement
    $stmt = $conn->prepare("SELECT title, content, created_at, gambar FROM article WHERE article_id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    // Ambil hasil query
    $article = $stmt->fetch();

    // Periksa apakah artikel ditemukan
    if (!$article) {
        die("Artikel tidak ditemukan.");
    }

    // Format tanggal
    $formatted_date = date("d M Y", strtotime($article['created_at']));
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Detail page artikel untuk User Brightmind">
    <meta name="keywords" content="detail page artikel, user">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?></title>

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/detail-article.css">
</head>

<body>
    <nav class="navbar">
        <a href="article_page.php" class="navbar-logo">
            <img src="../assets/images/logo.jpg" width="180px" alt="BrightMind Logo">
        </a>
        <div class="navbar-nav">
            <a href="dashboard-logged-in.html">Home</a>
            <a href="#">Content</a>
            <a href="#">Features</a>
            <a href="about-us-logged-in.html">About</a>
        </div>
        <div class="navbar-extra">
            <a href="../index.html" id="logout-icon"><i data-feather="user"></i></a>
        </div>
    </nav>

    <div class="containerTA">
        <h1><?php echo htmlspecialchars($article['title']); ?></h1>
        <p class="article-date">Published: <?php echo $formatted_date; ?></p>

        <?php if (!empty($article['gambar'])): ?>
            <img src="../assets/images/<?php echo htmlspecialchars($article['gambar']); ?>" alt="Article"
                class="article-img">
        <?php endif; ?>

        <p><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
    </div>

    <!-- JS -->
    <script>
        feather.replace(); // Agar ikon logout muncul
    </script>
    <script src="../js/logout_process.js"></script>
</body>

</html>