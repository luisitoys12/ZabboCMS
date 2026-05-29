<?php
/**
 * banned.php — Usuario baneado HabboGZ
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>
<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;">
<div class="text-center" style="max-width:480px;padding:40px;">
    <i class="fas fa-ban" style="font-size:72px;color:rgba(183,28,28,0.7);margin-bottom:24px;display:block;"></i>
    <h2 style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#f0e6c8;margin-bottom:12px;">Cuenta suspendida</h2>
    <p style="font-size:15px;color:rgba(240,230,200,0.55);margin-bottom:24px;">
        Tu cuenta ha sido suspendida del hotel. Si crees que es un error, contacta al staff.
    </p>
    <div style="background:rgba(183,28,28,0.08);border:1px solid rgba(183,28,28,0.3);border-radius:12px;padding:20px;margin-bottom:28px;">
        <p style="font-size:14px;color:#ef9a9a;margin-bottom:6px;"><strong>Razón:</strong> {ban_reason}</p>
        <p style="font-size:13px;color:rgba(239,154,154,0.6);margin:0;"><strong>Expira:</strong> {ban_expire}</p>
    </div>
    <a href="{url}/support" style="background:#d4a017;color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;padding:12px 32px;border-radius:50px;text-decoration:none;"><i class="fas fa-headset mr-2"></i>Apelar ban</a>
</div>
</div>
<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
