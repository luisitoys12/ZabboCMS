<?php
/**
 * leaderboards.php — Rankings HabboGZ
 * Equiv. a ZabboME/leaderboards.php
 */
$navigatorID = 2;
require_once ('/includes/header.php');
require_once ('/includes/navigator.php');
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>
<style>
.lb-row { display:flex;align-items:center;gap:14px;padding:12px 16px;border-radius:10px;margin-bottom:8px;transition:background .18s; }
.lb-row:hover { background:rgba(212,160,23,0.05); }
.lb-row.rank-1 { background:rgba(212,160,23,0.12);border-left:3px solid #d4a017; }
.lb-row.rank-2 { background:rgba(192,192,192,0.06);border-left:3px solid #c0c0c0; }
.lb-row.rank-3 { background:rgba(184,115,51,0.06);border-left:3px solid #b87333; }
.lb-rank { font-family:'Rajdhani',sans-serif;font-size:18px;font-weight:700;width:32px;text-align:center;flex-shrink:0; }
.lb-avatar { image-rendering:pixelated;flex-shrink:0; }
.lb-username { font-family:'Rajdhani',sans-serif;font-size:16px;font-weight:600;color:#f0e6c8;flex-grow:1; }
.lb-value { font-family:'Rajdhani',sans-serif;font-size:18px;font-weight:700;color:#d4a017; }
.lb-tab-btn { background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);color:rgba(240,230,200,0.5);border-radius:50px;padding:8px 20px;font-family:'Rajdhani',sans-serif;font-size:13px;font-weight:600;cursor:pointer;transition:all .18s;letter-spacing:.5px; }
.lb-tab-btn.active,.lb-tab-btn:hover { background:rgba(212,160,23,0.15);border-color:rgba(212,160,23,0.4);color:#d4a017; }
</style>

<div class="container" style="padding-top:32px;padding-bottom:60px;">

    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;flex-wrap:wrap;gap:16px;">
        <div>
            <h2 style="font-family:'Rajdhani',sans-serif;font-size:32px;font-weight:700;color:#f0e6c8;margin:0 0 4px;">
                <i class="fas fa-trophy mr-2" style="color:#d4a017;"></i>Rankings
            </h2>
            <p style="font-size:14px;color:rgba(240,230,200,0.45);margin:0;">Los mejores jugadores de {shortname}</p>
        </div>
    </div>

    <!-- Selector de categoría -->
    <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:28px;" id="lb-tabs">
        <?php
        $lbTabs = [
            ['achievement_score','fas fa-star','Logros'],
            ['credits','fas fa-coins','Créditos'],
            ['duckets','fas fa-duck','Duckets'],
            ['diamonds','fas fa-gem','Diamantes'],
            ['respects_received','fas fa-heart','Respetos'],
            ['online_time','fas fa-clock','Tiempo online'],
        ];
        foreach ($lbTabs as $i => $tab):
        ?>
        <button class="lb-tab-btn <?php echo $i===0?'active':''; ?>"
                onclick="loadLb('<?php echo $tab[0]; ?>', this)">
            <i class="<?php echo $tab[1]; ?> mr-1"></i><?php echo $tab[2]; ?>
        </button>
        <?php endforeach; ?>
    </div>

    <!-- Lista de rankings -->
    <div id="lb-list" style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:14px;padding:20px;">
        <!-- Se rellena vía PHP o AJAX -->
        {leaderboard_rows}
    </div>
</div>

<script>
function loadLb(cat, btn) {
    document.querySelectorAll('.lb-tab-btn').forEach(function(b){ b.classList.remove('active'); });
    btn.classList.add('active');
    window.location.href = '?cat=' + cat;
}
</script>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
