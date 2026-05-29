<?php
/**
 * pictures_styles.php
 * Estilos CSS para la galería de fotos
 * Extraído de pictures.php original (94KB → modular)
 */
?>
<style>
/* ---- Notificaciones ---- */
#notification-center {
    position: fixed;
    top: 40px;
    right: 40px;
    z-index: 10;
}

/* ---- Like button ---- */
.fas.fa-heart.liked {
    color: red !important;
}
button:focus {
    outline: 0px !important;
}

/* ---- Gallery Header ---- */
#gallery-header {
    margin-bottom: 20px;
}
#gallery-header .banner {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 8px;
    background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
    display: flex;
    align-items: center;
    justify-content: center;
}
#gallery-header .title-block {
    padding: 16px 0 8px;
}
#gallery-header h2 {
    font-size: 22px;
    font-weight: 800;
    color: #fff;
    margin: 0 0 4px;
}
#gallery-header p {
    font-size: 13px;
    color: rgba(255,255,255,0.5);
    margin: 0;
}

/* ---- Filtros / tabs ---- */
.pictures-tabs {
    display: flex;
    gap: 8px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}
.pictures-tabs .tab-btn {
    padding: 8px 20px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.12);
    background: rgba(255,255,255,0.05);
    color: rgba(255,255,255,0.6);
    font-size: 13px;
    cursor: pointer;
    transition: all 0.18s;
}
.pictures-tabs .tab-btn.active,
.pictures-tabs .tab-btn:hover {
    background: rgba(255,255,255,0.14);
    color: #fff;
    border-color: rgba(255,255,255,0.28);
}

/* ---- Grid de fotos ---- */
.pictures-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: 12px;
}
.pic-card {
    background: rgba(255,255,255,0.05);
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.08);
    transition: transform 0.18s, box-shadow 0.18s;
    cursor: pointer;
    position: relative;
}
.pic-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 28px rgba(0,0,0,0.4);
}
.pic-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    display: block;
}
.pic-card .pic-info {
    padding: 8px 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.pic-card .pic-author {
    font-size: 12px;
    color: rgba(255,255,255,0.6);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100px;
}
.pic-card .pic-likes {
    font-size: 12px;
    color: rgba(255,255,255,0.45);
    display: flex;
    align-items: center;
    gap: 4px;
}
.pic-card .pic-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0);
    transition: background 0.18s;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
}
.pic-card:hover .pic-overlay {
    background: rgba(0,0,0,0.35);
    opacity: 1;
}
.pic-overlay-icon {
    color: #fff;
    font-size: 28px;
}

/* ---- Empty state ---- */
.pictures-empty {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 60px 20px;
    color: rgba(255,255,255,0.4);
    text-align: center;
}
.pictures-empty .empty-icon {
    font-size: 48px;
    margin-bottom: 16px;
    opacity: 0.5;
}
.pictures-empty h4 {
    font-size: 16px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 8px;
}
.pictures-empty p {
    font-size: 13px;
    max-width: 240px;
    line-height: 1.6;
}

/* ---- Lightbox ---- */
.lightbox-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.85);
    z-index: 1000;
    display: none;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(6px);
}
.lightbox-overlay.open {
    display: flex;
    animation: fadeIn 0.2s ease;
}
@keyframes fadeIn {
    from { opacity: 0; } to { opacity: 1; }
}
.lightbox-box {
    background: #1e1e2e;
    border-radius: 14px;
    overflow: hidden;
    max-width: 90vw;
    max-height: 90vh;
    box-shadow: 0 20px 60px rgba(0,0,0,0.7);
    display: flex;
    flex-direction: column;
}
.lightbox-box img {
    max-width: 100%;
    max-height: 65vh;
    object-fit: contain;
    display: block;
}
.lightbox-meta {
    padding: 14px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.lightbox-meta .lb-author {
    font-size: 13px;
    color: rgba(255,255,255,0.6);
}
.lightbox-close {
    background: rgba(255,255,255,0.1);
    border: none;
    color: #fff;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    cursor: pointer;
    font-size: 18px;
    transition: background 0.15s;
    display: flex;
    align-items: center;
    justify-content: center;
}
.lightbox-close:hover { background: rgba(255,255,255,0.2); }

/* ---- Like button en lightbox ---- */
.lb-like-btn {
    background: none;
    border: 1px solid rgba(255,255,255,0.15);
    color: rgba(255,255,255,0.6);
    border-radius: 50px;
    padding: 6px 14px;
    font-size: 12px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
    transition: all 0.15s;
}
.lb-like-btn:hover, .lb-like-btn.liked {
    color: #ff4d6d;
    border-color: #ff4d6d;
    background: rgba(255,77,109,0.1);
}

/* ---- Pagination ---- */
.pictures-pagination {
    display: flex;
    gap: 6px;
    justify-content: center;
    margin-top: 24px;
    flex-wrap: wrap;
}
.pictures-pagination .page-btn {
    padding: 6px 14px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.12);
    background: rgba(255,255,255,0.05);
    color: rgba(255,255,255,0.6);
    font-size: 12px;
    cursor: pointer;
    transition: all 0.15s;
}
.pictures-pagination .page-btn.active,
.pictures-pagination .page-btn:hover {
    background: rgba(255,255,255,0.14);
    color: #fff;
}
</style>
