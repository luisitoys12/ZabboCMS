<?php
/**
 * home.php — Dashboard principal para usuarios logueados
 * Equiv. a ZabboME/home.php
 */
$navigatorID = 1;
require_once ('/includes/header.php');
require_once ('/includes/navigator.php');
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>

<div class="container" style="padding-top:32px;padding-bottom:60px;">

    <!-- Bienvenida personalizada -->
    <div style="background:linear-gradient(135deg,rgba(212,160,23,0.12),rgba(212,160,23,0.04));border:1px solid rgba(212,160,23,0.2);border-radius:14px;padding:28px 32px;margin-bottom:28px;display:flex;align-items:center;gap:20px;">
        <img src="{imgurl}/avatarimage?figure={look}&head_direction=3&gesture=sml&size=l"
             alt="Avatar" width="64" height="110"
             style="image-rendering:pixelated;flex-shrink:0;"
             onerror="this.src='{cdnurl}/imgs/avatar_default.gif'">
        <div>
            <h2 style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#f0e6c8;margin:0 0 4px;">Hola, {username}! <span style="color:#d4a017;">&#x1F451;</span></h2>
            <p style="font-size:14px;color:rgba(240,230,200,0.5);margin:0;">{motto}</p>
        </div>
        <div class="ml-auto d-none d-md-flex" style="gap:24px;">
            <div class="text-center">
                <p style="font-family:'Rajdhani',sans-serif;font-size:22px;font-weight:700;color:#d4a017;margin:0;">{credits}</p>
                <p style="font-size:11px;color:rgba(240,230,200,0.4);margin:0;text-transform:uppercase;letter-spacing:1px;">Créditos</p>
            </div>
            <div class="text-center">
                <p style="font-family:'Rajdhani',sans-serif;font-size:22px;font-weight:700;color:#d4a017;margin:0;">{duckets}</p>
                <p style="font-size:11px;color:rgba(240,230,200,0.4);margin:0;text-transform:uppercase;letter-spacing:1px;">Duckets</p>
            </div>
            <div class="text-center">
                <p style="font-family:'Rajdhani',sans-serif;font-size:22px;font-weight:700;color:#d4a017;margin:0;">{diamonds}</p>
                <p style="font-size:11px;color:rgba(240,230,200,0.4);margin:0;text-transform:uppercase;letter-spacing:1px;">Diamantes</p>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Columna principal -->
        <div class="col-lg-8">

            <!-- Noticias recientes -->
            <div style="margin-bottom:24px;">
                <h5 style="font-family:'Rajdhani',sans-serif;font-size:16px;text-transform:uppercase;letter-spacing:2px;color:#d4a017;margin-bottom:16px;"><i class="fas fa-newspaper mr-2"></i>Noticias</h5>
                {articles}
            </div>

            <!-- Acciones rápidas -->
            <div style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:12px;padding:24px;margin-bottom:24px;">
                <h5 style="font-family:'Rajdhani',sans-serif;font-size:16px;text-transform:uppercase;letter-spacing:2px;color:rgba(240,230,200,0.4);margin-bottom:18px;">Acceso rápido</h5>
                <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(120px,1fr));gap:12px;">
                    <?php
                    $quickLinks = [
                        ['{url}/client','fas fa-play','Jugar','#4caf50'],
                        ['{url}/store','fas fa-store','Tienda','#d4a017'],
                        ['{url}/leaderboards','fas fa-trophy','Rankings','#f0c040'],
                        ['{url}/community','fas fa-users','Comunidad','#42a5f5'],
                        ['{url}/pictures','fas fa-camera','Fotos','#ab47bc'],
                        ['{url}/account','fas fa-cog','Mi Cuenta','#78909c'],
                    ];
                    foreach ($quickLinks as $ql):
                    ?>
                    <a href="<?php echo $ql[0]; ?>" style="display:flex;flex-direction:column;align-items:center;padding:16px 8px;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);border-radius:10px;text-decoration:none;transition:border-color .18s;" onmouseenter="this.style.borderColor='rgba(212,160,23,0.3)'" onmouseleave="this.style.borderColor='rgba(255,255,255,0.06)'">
                        <i class="<?php echo $ql[1]; ?>" style="font-size:20px;color:<?php echo $ql[3]; ?>;margin-bottom:8px;"></i>
                        <span style="font-size:12px;color:rgba(240,230,200,0.6);"><?php echo $ql[2]; ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Sidebar derecho -->
        <div class="col-lg-4">
            <!-- Recompensa diaria -->
            <div style="background:linear-gradient(135deg,rgba(212,160,23,0.15),rgba(212,160,23,0.05));border:1px solid rgba(212,160,23,0.3);border-radius:12px;padding:22px;margin-bottom:20px;">
                <h6 style="font-family:'Rajdhani',sans-serif;font-size:14px;text-transform:uppercase;letter-spacing:2px;color:#d4a017;margin-bottom:12px;"><i class="fas fa-gift mr-2"></i>Recompensa diaria</h6>
                {dailyreward_widget}
                <a href="{url}/dailyreward" class="btn btn-block" style="background:#d4a017;color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;border-radius:50px;margin-top:10px;">Reclamar ahora</a>
            </div>

            <!-- Top Online -->
            <div style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:12px;padding:22px;">
                <h6 style="font-family:'Rajdhani',sans-serif;font-size:14px;text-transform:uppercase;letter-spacing:2px;color:rgba(240,230,200,0.4);margin-bottom:16px;"><i class="fas fa-signal mr-2"></i>En línea ({onlinecount})</h6>
                {onlineusers_widget}
            </div>
        </div>
    </div>
</div>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
