<?php
/**
 * pictures_lightbox.php
 * Lightbox modal + lógica de likes via JS/AJAX
 */
?>

<!-- Lightbox -->
<div class="lightbox-overlay" id="lightboxOverlay" onclick="closeLightboxOnBg(event)">
    <div class="lightbox-box">
        <img id="lbImage" src="" alt="Foto" width="800" height="600">
        <div class="lightbox-meta">
            <span class="lb-author" id="lbAuthor"></span>
            <div style="display:flex;gap:10px;align-items:center;">
                <button class="lb-like-btn" id="lbLikeBtn" onclick="toggleLike()">
                    <span>&#x2764;</span>
                    <span id="lbLikeCount">0</span>
                </button>
                <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
            </div>
        </div>
    </div>
</div>

<script>
var currentPhotoId = null;

function openLightbox(url, author, photoId) {
    currentPhotoId = photoId;
    document.getElementById('lbImage').src = url;
    document.getElementById('lbAuthor').textContent = '@' + author;

    // Obtener likes actuales del DOM
    var countEl = document.querySelector('.like-count-' + photoId);
    document.getElementById('lbLikeCount').textContent = countEl ? countEl.textContent : '0';

    document.getElementById('lightboxOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightboxOverlay').classList.remove('open');
    document.body.style.overflow = '';
    currentPhotoId = null;
}

function closeLightboxOnBg(e) {
    if (e.target === document.getElementById('lightboxOverlay')) closeLightbox();
}

function toggleLike() {
    if (!currentPhotoId) return;
    var btn = document.getElementById('lbLikeBtn');
    var countEl = document.getElementById('lbLikeCount');
    var gridCount = document.querySelector('.like-count-' + currentPhotoId);
    btn.classList.toggle('liked');
    var delta = btn.classList.contains('liked') ? 1 : -1;
    var newCount = parseInt(countEl.textContent) + delta;
    countEl.textContent = newCount;
    if (gridCount) gridCount.textContent = newCount;

    // AJAX al backend para guardar el like
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '{url}/ajax/like_photo', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('photo_id=' + currentPhotoId);
}

// Cerrar con ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLightbox();
});
</script>
