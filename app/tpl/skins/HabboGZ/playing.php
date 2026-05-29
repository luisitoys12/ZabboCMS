<?php
/**
 * playing.php — Pantalla de carga mientras inicia el cliente HabboGZ
 * Equiv. a ZabboME/playing.php
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
?>
<style>
@keyframes spin { to { transform: rotate(360deg); } }
.gz-spinner { width:48px;height:48px;border:3px solid rgba(212,160,23,0.2);border-top-color:#d4a017;border-radius:50%;animation:spin 0.8s linear infinite;margin:0 auto 24px; }
@keyframes progress-fill { from{width:0} to{width:100%} }
.gz-progress-bar { height:4px;background:linear-gradient(90deg,#d4a017,#f0c040);border-radius:2px;animation:progress-fill 3s ease-out forwards; }
</style>

<div style="min-height:100vh;background:#0d0d0d;display:flex;align-items:center;justify-content:center;">
<div class="text-center" style="max-width:400px;padding:40px;">
    <svg width="56" height="56" viewBox="0 0 36 36" fill="none" style="margin-bottom:20px;">
        <rect width="36" height="36" rx="8" fill="#d4a017"/>
        <text x="5" y="26" font-family="'Rajdhani',sans-serif" font-size="22" font-weight="700" fill="#1a1000">GZ</text>
    </svg>
    <h2 style="font-family:'Rajdhani',sans-serif;font-size:26px;font-weight:700;color:#f0e6c8;margin-bottom:8px;">Entrando al hotel…</h2>
    <p style="font-size:14px;color:rgba(240,230,200,0.45);margin-bottom:32px;">Cargando {shortname} para {username}</p>
    <div class="gz-spinner"></div>
    <div style="background:rgba(212,160,23,0.08);border-radius:6px;overflow:hidden;margin-top:8px;">
        <div class="gz-progress-bar"></div>
    </div>
    <p style="font-size:12px;color:rgba(240,230,200,0.25);margin-top:20px;">Si el hotel no carga, <a href="{url}/client" style="color:#d4a017;">haz clic aquí</a></p>
</div>
</div>

<script>setTimeout(function(){ window.location.href = '{url}/client'; }, 3200);</script>
<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
