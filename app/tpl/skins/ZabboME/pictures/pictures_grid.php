<?php
/**
 * pictures_grid.php
 * Grid principal de fotos con paginación y filtros por tab
 */

// --- Parámetros de paginación y filtro ---
$page   = max(1, (int)($_GET['page'] ?? 1));
$limit  = 24;
$offset = ($page - 1) * $limit;
$filter = $_GET['filter'] ?? 'latest'; // latest | mine | liked

// --- Consulta según filtro ---
if ($filter === 'mine' && isset($_SESSION['user']['id'])) {
    $whereClause = "WHERE creator_id = '".(int)$_SESSION['user']['id']."'";
} else {
    $whereClause = '';
}

$totalResult = mysql_query("SELECT COUNT(*) as total FROM items_camera $whereClause");
$totalRow    = mysql_fetch_assoc($totalResult);
$totalPages  = max(1, ceil($totalRow['total'] / $limit));

$picsQuery = mysql_query(
    "SELECT ic.id, ic.creator_id, ic.url, ic.timestamp, u.username, u.look
     FROM items_camera ic
     LEFT JOIN users u ON u.id = ic.creator_id
     $whereClause
     ORDER BY ic.id DESC
     LIMIT $limit OFFSET $offset"
);
?>

<!-- Tabs de filtro -->
<div class="pictures-tabs">
    <button class="tab-btn <?php echo $filter === 'latest' ? 'active' : ''; ?>"
            onclick="location.href='?filter=latest'">&#x1F550; Recientes</button>
    <?php if (isset($_SESSION['user']['id'])): ?>
    <button class="tab-btn <?php echo $filter === 'mine' ? 'active' : ''; ?>"
            onclick="location.href='?filter=mine'">&#x1F464; Mis Fotos</button>
    <?php endif; ?>
</div>

<!-- Grid -->
<?php if (mysql_num_rows($picsQuery) > 0): ?>
<div class="pictures-grid" id="picturesGrid">
    <?php while ($pic = mysql_fetch_assoc($picsQuery)): ?>
    <div class="pic-card"
         onclick="openLightbox('<?php echo htmlspecialchars($pic['url']); ?>',
                               '<?php echo htmlspecialchars($pic['username']); ?>',
                               <?php echo (int)$pic['id']; ?>)">
        <img src="<?php echo htmlspecialchars($pic['url']); ?>"
             alt="Foto de <?php echo htmlspecialchars($pic['username']); ?>"
             loading="lazy" width="180" height="160">
        <div class="pic-overlay">
            <span class="pic-overlay-icon">&#x1F50D;</span>
        </div>
        <div class="pic-info">
            <span class="pic-author">@<?php echo htmlspecialchars($pic['username']); ?></span>
            <span class="pic-likes">
                <span>&#x2764;</span>
                <span class="like-count-<?php echo (int)$pic['id']; ?>">
                    <?php
                    $likesRow = mysql_fetch_assoc(mysql_query(
                        "SELECT COUNT(*) as cnt FROM camera_likes WHERE photo_id = '".(int)$pic['id']."'"
                    ));
                    echo (int)($likesRow['cnt'] ?? 0);
                    ?>
                </span>
            </span>
        </div>
    </div>
    <?php endwhile; ?>
</div>

<!-- Paginación -->
<?php if ($totalPages > 1): ?>
<div class="pictures-pagination">
    <?php for ($i = 1; $i <= min($totalPages, 10); $i++): ?>
    <button class="page-btn <?php echo $i === $page ? 'active' : ''; ?>"
            onclick="location.href='?filter=<?php echo $filter; ?>&page=<?php echo $i; ?>'">
        <?php echo $i; ?>
    </button>
    <?php endfor; ?>
    <?php if ($totalPages > 10): ?>
    <span style="color:rgba(255,255,255,0.3);padding:6px 10px;">... <?php echo $totalPages; ?></span>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php else: ?>
<!-- Empty state -->
<div class="pictures-empty">
    <div class="empty-icon">&#x1F4F7;</div>
    <h4>No hay fotos aquí todavía</h4>
    <p>¡Toma una foto en el hotel y compártela con la comunidad!</p>
</div>
<?php endif; ?>
