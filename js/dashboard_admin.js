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
        fetch('../php/articles/hapus_artikel.php', {
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
        const url = id ? '../php/articles/update_artikel.php' : '../php/articles/tambah_artikel.php';
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