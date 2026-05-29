<?php
/**
 * community.php — Página de comunidad HabboGZ
 * Equiv. a ZabboME/community.php
 */
$navigatorID = 2;
require_once ('/includes/header.php');
require_once ('/includes/navigator.php');
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>

<div class="container" style="padding-top:32px;padding-bottom:60px;">

    <h2 style="font-family:'Rajdhani',sans-serif;font-size:32px;font-weight:700;color:#f0e6c8;margin-bottom:6px;">
        <i class="fas fa-users mr-2" style="color:#d4a017;"></i>Comunidad
    </h2>
    <p style="font-size:14px;color:rgba(240,230,200,0.45);margin-bottom:28px;">{onlinecount} jugadores en línea ahora</p>

    <div class="row">
        <!-- Usuarios online -->
        <div class="col-lg-8">
            <div style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:14px;padding:24px;margin-bottom:24px;">
                <h5 style="font-family:'Rajdhani',sans-serif;font-size:16px;text-transform:uppercase;letter-spacing:2px;color:rgba(240,230,200,0.4);margin-bottom:18px;">
                    <i class="fas fa-circle mr-2" style="color:#4caf50;font-size:10px;"></i>En línea ahora
                </h5>
                <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(100px,1fr));gap:12px;">
                    {online_users_grid}
                </div>
            </div>

            <!-- Fotos recientes -->
            <div style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:14px;padding:24px;">
                <h5 style="font-family:'Rajdhani',sans-serif;font-size:16px;text-transform:uppercase;letter-spacing:2px;color:rgba(240,230,200,0.4);margin-bottom:18px;">
                    <i class="fas fa-camera mr-2" style="color:#d4a017;"></i>Fotos recientes
                </h5>
                {recent_pictures}
            </div>
        </div>

        <!-- Sidebar: Grupos + ROTW -->
        <div class="col-lg-4">
            <div style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:12px;padding:20px;margin-bottom:20px;">
                <h6 style="font-family:'Rajdhani',sans-serif;font-size:14px;text-transform:uppercase;letter-spacing:2px;color:#d4a017;margin-bottom:14px;">
                    <i class="fas fa-layer-group mr-2"></i>Grupos populares
                </h6>
                {popular_groups}
            </div>

            <div style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:12px;padding:20px;">
                <h6 style="font-family:'Rajdhani',sans-serif;font-size:14px;text-transform:uppercase;letter-spacing:2px;color:#d4a017;margin-bottom:14px;">
                    <i class="fas fa-bed mr-2"></i>Habitación de la semana
                </h6>
                {room_of_week}
            </div>
        </div>
    </div>
</div>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
