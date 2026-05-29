<?php
/**
 * me.php — Página de perfil propio HabboGZ
 * Equiv. a ZabboME/me.php
 */
$navigatorID = 1;
require_once ('/includes/header.php');
require_once ('/includes/navigator.php');
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>

<div class="container" style="padding-top:32px;padding-bottom:60px;">

    <!-- Banner de perfil -->
    <div style="background:linear-gradient(135deg,#1a1a1a,#141414);border:1px solid rgba(212,160,23,0.18);border-radius:14px;overflow:hidden;margin-bottom:24px;">
        <!-- Cabecera -->
        <div style="background:linear-gradient(90deg,rgba(212,160,23,0.12),transparent);padding:28px 32px;display:flex;align-items:flex-end;gap:24px;">
            <img src="{imgurl}/avatarimage?figure={look}&size=l&gesture=sml&head_direction=3"
                 alt="Avatar" width="80" height="140"
                 style="image-rendering:pixelated;flex-shrink:0;"
                 onerror="this.src='{cdnurl}/imgs/avatar_default.gif'">
            <div class="flex-grow-1">
                <h2 style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#f0e6c8;margin:0 0 4px;">{username}</h2>
                <p style="font-size:14px;color:rgba(240,230,200,0.5);margin:0 0 12px;font-style:italic;">&ldquo;{motto}&rdquo;</p>
                <div style="display:flex;gap:16px;flex-wrap:wrap;">
                    <?php
                    $stats = [
                        ['fas fa-coins','#d4a017','{credits}','Créditos'],
                        ['fas fa-duck','#42a5f5','{duckets}','Duckets'],
                        ['fas fa-gem','#ab47bc','{diamonds}','Diamantes'],
                        ['fas fa-door-open','#4caf50','{rooms}','Habitaciones'],
                        ['fas fa-users','#ff7043','{friends}','Amigos'],
                    ];
                    foreach ($stats as $s):
                    ?>
                    <div style="display:flex;align-items:center;gap:6px;">
                        <i class="<?php echo $s[0]; ?>" style="color:<?php echo $s[1]; ?>;font-size:13px;"></i>
                        <span style="font-family:'Rajdhani',sans-serif;font-size:16px;font-weight:700;color:#f0e6c8;"><?php echo $s[2]; ?></span>
                        <span style="font-size:11px;color:rgba(240,230,200,0.35);text-transform:uppercase;letter-spacing:1px;"><?php echo $s[3]; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="d-none d-md-block">
                <a href="{url}/account" class="btn btn-sm" style="border:1px solid rgba(212,160,23,0.4);color:#d4a017;border-radius:50px;font-family:'Rajdhani',sans-serif;"><i class="fas fa-cog mr-1"></i>Editar perfil</a>
            </div>
        </div>

        <!-- Tabs -->
        <div style="border-top:1px solid rgba(212,160,23,0.1);padding:0 32px;display:flex;gap:0;overflow-x:auto;" id="me-tabs">
            <?php
            $tabs = [
                ['rooms','fas fa-door-open','Habitaciones'],
                ['badges','fas fa-shield-alt','Insignias'],
                ['friends','fas fa-users','Amigos'],
                ['groups','fas fa-layer-group','Grupos'],
            ];
            foreach ($tabs as $i => $t):
            ?>
            <button onclick="gzTab('<?php echo $t[0]; ?>')" id="tab-<?php echo $t[0]; ?>"
                    style="padding:14px 20px;background:none;border:none;border-bottom:2px solid <?php echo $i===0?'#d4a017':'transparent'; ?>;color:<?php echo $i===0?'#d4a017':'rgba(240,230,200,0.45)'; ?>;font-family:'Rajdhani',sans-serif;font-size:14px;font-weight:600;cursor:pointer;white-space:nowrap;transition:color .18s,border-color .18s;">
                <i class="<?php echo $t[1]; ?> mr-2"></i><?php echo $t[2]; ?>
            </button>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Contenido de tabs -->
    <div id="tab-content-rooms"><?php // {rooms_grid} ?></div>
    <div id="tab-content-badges"  style="display:none;"><?php // {badges_grid} ?></div>
    <div id="tab-content-friends" style="display:none;"><?php // {friends_list} ?></div>
    <div id="tab-content-groups"  style="display:none;"><?php // {groups_list} ?></div>

</div>

<script>
function gzTab(name) {
    ['rooms','badges','friends','groups'].forEach(function(t) {
        document.getElementById('tab-content-'+t).style.display = t===name?'block':'none';
        var btn = document.getElementById('tab-'+t);
        btn.style.borderBottomColor = t===name?'#d4a017':'transparent';
        btn.style.color = t===name?'#d4a017':'rgba(240,230,200,0.45)';
    });
}
</script>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
