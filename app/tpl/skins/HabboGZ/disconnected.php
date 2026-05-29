<?php
/**
 * disconnected.php — Pantalla de desconexión HabboGZ
 * Equiv. a ZabboME/disconnected.php
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>
<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;">
<div class="text-center" style="max-width:460px;padding:40px;">
    <i class="fas fa-plug" style="font-size:64px;color:rgba(212,160,23,0.4);margin-bottom:24px;display:block;"></i>
    <h2 style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#f0e6c8;margin-bottom:12px;">Desconectado</h2>
    <p style="font-size:15px;color:rgba(240,230,200,0.5);margin-bottom:28px;">
        Tu sesión ha finalizado. Puedes volver a entrar cuando quieras.
    </p>
    <div style="display:flex;gap:12px;justify-content:center;">
        <a href="{url}/client" style="background:#d4a017;color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;padding:12px 28px;border-radius:50px;text-decoration:none;"><i class="fas fa-play mr-2"></i>Volver a jugar</a>
        <a href="{url}/home" style="border:1px solid rgba(212,160,23,0.4);color:#d4a017;font-family:'Rajdhani',sans-serif;padding:12px 28px;border-radius:50px;text-decoration:none;">Ir al inicio</a>
    </div>
</div>
</div>
<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
