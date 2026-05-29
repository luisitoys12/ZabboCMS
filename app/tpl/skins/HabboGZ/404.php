<?php
/**
 * 404.php — Página no encontrada HabboGZ
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>

<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;">
<div class="text-center" style="max-width:480px;padding:40px;">
    <p style="font-family:'Rajdhani',sans-serif;font-size:120px;font-weight:700;background:linear-gradient(135deg,#d4a017,#ffe680);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1;margin-bottom:0;">404</p>
    <h2 style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#f0e6c8;margin-bottom:12px;">Página no encontrada</h2>
    <p style="font-size:15px;color:rgba(240,230,200,0.5);margin-bottom:32px;">La habitación a la que intentas entrar no existe o fue eliminada.</p>
    <a href="{url}/home" style="background:#d4a017;color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;font-size:16px;padding:12px 32px;border-radius:50px;text-decoration:none;"><i class="fas fa-home mr-2"></i>Volver al lobby</a>
</div>
</div>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
