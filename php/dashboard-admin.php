<?php

$host = "localhost";
$dbname = "brightmind";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil artikel dari database
$sql = "SELECT * FROM article ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/dashboard-admin.css">

</head>

<body>

    <!-- Header -->
    <div class="saturation">
        <div class="rectangle-background">
            <div class="logo-brand"></div>
            <div class="rectangle">
                <a href="logout_proses.php" class="log-out">
                    <i class="fas fa-user"></i></a>
            </div>
            <div class="feature"></div>
            <div class="content">
                <a href="content" class="content-1">Content</a>
            </div>
            <a href="features" class="features">Features</a>
            <a href="about_us.html" class="about">About</a>
            <a href="welcome_page.html" class="home">Home</a>
        </div>

        <!-- Container -->
        <div class="container">
            <div id="article-list">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="article" data-id="<?= $row['article_id'] ?>" data-title="<?= $row['title'] ?>"
                        data-content="<?= $row['content'] ?>">
                        <h2><?= $row['title'] ?></h2>
                        <p><?= substr($row['content'], 0, 100) ?>...</p>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- Modal Artikel -->
            <div class="article-modal" id="article-modal">
                <div class="article-content">
                    <div class="close-modal" id="close-modal">&times;</div>
                    <h2 id="modal-title"></h2>
                    <p id="modal-content"></p>
                    <button id="edit-article">Edit Artikel</button>
                    <button id="delete-article">Hapus Artikel</button>
                </div>
            </div>

            <!-- Modal CRUD -->
            <div class="crud-modal" id="crud-modal">
                <div class="crud-content">
                    <h2 id="crud-modal-title">Tambah Artikel</h2>
                    <input type="hidden" id="article-id">
                    <input type="text" id="crud-title" placeholder="Judul Artikel">
                    <textarea id="crud-content" placeholder="Konten Artikel"></textarea>
                    <button id="save-article">Simpan Artikel</button>
                    <button id="cancel-article">Batal</button>
                </div>
            </div>

            <script>
                const articles = document.querySelectorAll('.article');
                const articleModal = document.getElementById('article-modal');
                const modalTitle = document.getElementById('modal-title');
                const modalContent = document.getElementById('modal-content');
                const closeModal = document.getElementById('close-modal');
                let currentEditArticle = null;

                articles.forEach(article => {
                    article.addEventListener('click', () => {
                        const id = article.getAttribute('data-id');
                        const title = article.getAttribute('data-title');
                        const content = article.getAttribute('data-content');

                        modalTitle.textContent = title;
                        modalContent.textContent = content;
                        articleModal.style.display = 'flex';
                        currentEditArticle = id;
                    });
                });

                closeModal.addEventListener('click', () => {
                    articleModal.style.display = 'none';
                });

                document.getElementById('edit-article').addEventListener('click', () => {
                    if (currentEditArticle) {
                        document.getElementById('article-id').value = currentEditArticle;
                        document.getElementById('crud-title').value = modalTitle.textContent;
                        document.getElementById('crud-content').value = modalContent.textContent;
                        document.getElementById('crud-modal-title').textContent = 'Edit Artikel';
                        document.getElementById('crud-modal').style.display = 'flex';
                    }
                });

                document.getElementById('delete-article').addEventListener('click', () => {
                    if (currentEditArticle) {
                        fetch('/articles/hapus_artikel.php', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `id=${currentEditArticle}`
                        }).then(() => location.reload());
                    }
                });

                function showCrudModal() {
                    document.getElementById('crud-modal').style.display = 'flex';
                    document.getElementById('crud-modal-title').textContent = 'Tambah Artikel';
                    document.getElementById('crud-title').value = '';
                    document.getElementById('crud-content').value = '';
                    document.getElementById('article-id').value = '';
                }

                document.getElementById('save-article').addEventListener('click', () => {
                    const id = document.getElementById('article-id').value;
                    const title = document.getElementById('crud-title').value.trim();
                    const content = document.getElementById('crud-content').value.trim();

                    if (title && content) {
                        const url = id ? 'update_artikel.php' : 'tambah_artikel.php';
                        fetch(url, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `id=${id}&title=${title}&content=${content}`
                        }).then(() => location.reload());
                    }
                });

                document.getElementById('cancel-article').addEventListener('click', () => {
                    document.getElementById('crud-modal').style.display = 'none';
                });
            </script>

            <!-- Category Section -->
            <div class="category">Category Section</div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">Selanjutnya</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-background">
            <div class="flex-row-fd-6">
                <div class="logo-brand-7"></div>
                <span class="social-media">Social Media</span>
                <div class="instagram-com"></div>
                <div class="facebook-com"></div>
                <div class="youtube-com"></div>
                <div class="x-com"></div>
            </div>

            <div class="flex-row-dac">
                <span class="explore">Explore</span><span class="consumer-complaints-services">Consumer Complaints
                    Services</span><span class="privacy-policy">Privacy Policy</span>
            </div>

            <div class="flex-row-f">
                <span class="syarat-dan-ketentuan">Syarat dan Ketentuan</span>
                <div class="regroup">
                    <a href="about_us.html" class="tentang-brightmind">Tentang BrightMind</a>
                    <span class="support-brightmind">support@brightmind.com</span>
                </div>
            </div>

            <div class="flex-row-a">
                <span class="tim-kami">Tim Kami</span><span class="contact-info">+62 xxx-xxxx-xxxx</span><span
                    class="privacy-policy-8">Kebijakan Privasi</span>
            </div>

            <span class="copyright-info">© 2025 BrightMind | Platform Edukasi Inovatif. All rights
                reserved.</span>
        </div>

</body>

</html>

<?php
$conn->close();
?>