<?php
/**
 * maintenance.php — Modo mantenimiento HabboGZ
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
?>
<div style="min-height:100vh;background:#0d0d0d;display:flex;align-items:center;justify-content:center;">
<div class="text-center" style="max-width:500px;padding:40px;">
    <svg width="72" height="72" viewBox="0 0 36 36" fill="none" style="margin-bottom:24px;">
        <rect width="36" height="36" rx="8" fill="#d4a017"/>
        <text x="5" y="26" font-family="'Rajdhani',sans-serif" font-size="22" font-weight="700" fill="#1a1000">GZ</text>
    </svg>
    <h1 style="font-family:'Rajdhani',sans-serif;font-size:36px;font-weight:700;color:#f0e6c8;margin-bottom:12px;">En mantenimiento</h1>
    <p style="font-size:15px;color:rgba(240,230,200,0.55);line-height:1.7;margin-bottom:24px;">
        Estamos mejorando el hotel para ti. Volvemos pronto &mdash; generalmente en menos de una hora.
    </p>
    <div style="background:#141414;border:1px solid rgba(212,160,23,0.2);border-radius:12px;padding:20px;margin-bottom:28px;">
        <p style="font-size:13px;color:rgba(240,230,200,0.4);margin:0;">{maintenance_message}</p>
    </div>
    <p style="font-size:13px;color:rgba(240,230,200,0.3);">Sigue nuestras redes para actualizaciones.</p>
</div>
</div>
<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
