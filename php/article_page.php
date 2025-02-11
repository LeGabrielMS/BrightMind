<?php
require_once 'db.php';

try {
  // Koneksi ke database menggunakan PDO
  $conn = new PDO("mysql:host=localhost;dbname=brightmind;charset=utf8", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Ambil data artikel dari database
  $stmt = $conn->prepare("SELECT article_id, title, created_at, gambar FROM article ORDER BY created_at DESC");
  $stmt->execute();
  $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Koneksi gagal: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Page Artikel untuk User Brightmind">
  <meta name="keywords" content="page artikel, user">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brightmind</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <!-- Feather Icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="../css/article-page.css" />
</head>

<body>
  <nav class="navbar">
    <a href="#" class="navbar-logo"><img src="../assets/images/logo.jpg" width="180px" alt="BrightMind Logo" /></a>
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
    <h1>Daftar Artikel</h1>
    <section class="article-section">
      <div class="article-list">
        <?php if (!empty($articles)): ?>
          <?php foreach ($articles as $article): ?>
            <div class="article-item">
              <a href="detail-article-page.php?id=<?= $article["article_id"] ?>">
                <img src="<?= (!empty($article["gambar"]) && file_exists("../assets/images/" . $article["gambar"]))
                  ? '../assets/images/' . htmlspecialchars($article["gambar"])
                  : '../assets/images/default-image.jpg'; ?>" alt="Article Thumbnail" class="article-thumbnail" />
                <h3><?= htmlspecialchars($article["title"]) ?></h3>
                <p class="article-date">Published: <?= date("d M Y", strtotime($article["created_at"])) ?></p>
              </a>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p>Tidak ada artikel tersedia.</p>
        <?php endif; ?>
      </div>

      <div class="category">
        <h3>Category</h3>
        <ul>
          <li><a href="#">Kesehatan</a></li>
          <li><a href="#">Pendidikan</a></li>
          <li><a href="#">Gaya Hidup</a></li>
          <li><a href="#">Teknologi</a></li>
          <li><a href="#">Sosial</a></li>
        </ul>
      </div>
    </section>
  </div>

  <div class="pagination">
    <button>1</button>
    <button>2</button>
    <button>3</button>
    <button>Selanjutnya</button>
  </div>

  <footer class="footer-background">
    <div class="flex-row-cd">
      <div class="logo-brand-9"></div>
      <span class="social-media">Social Media</span>
      <div class="instagram-com"></div>
      <div class="facebook-com"></div>
      <div class="youtube-com"></div>
      <div class="x-com"></div>
    </div>
    <div class="flex-row-ccc">
      <span class="explore">Explore</span>
      <span class="consumer-complaints-services">Consumer Complaints Services</span>
      <span class="privacy-policy">Privacy Policy</span>
    </div>
    <div class="flex-row-d">
      <span class="syarat-dan-ketentuan">Syarat dan Ketentuan</span>
      <div class="regroup">
        <span class="tentang-brightmind">Tentang BrightMind</span>
        <span class="support-email">support@brightmind.com</span>
      </div>
    </div>
    <div class="flex-row">
      <span class="tim-kami">Tim Kami</span>
      <span class="contact-number">+62 xxx-xxxx-xxxx</span>
      <span class="kebijakan-privasi">Kebijakan Privasi</span>
    </div>
    <span class="copyright">© 2025 BrightMind | Platform Edukasi Inovatif. All rights reserved.</span>
  </footer>

  <!-- JS -->
  <script src="../js/logout_process.js"></script>
</body>

</html>

<?php
$conn = null; // Tutup koneksi PDO
?>