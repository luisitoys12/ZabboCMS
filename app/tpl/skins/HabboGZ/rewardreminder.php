<?php
/**
 * rewardreminder.php — Recordatorio de recompensa diaria HabboGZ
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>
<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;">
<div class="text-center" style="max-width:440px;padding:40px;">
    <div style="font-size:72px;margin-bottom:20px;animation:float 2.5s ease-in-out infinite;">&#x1F381;</div>
    <h2 style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#f0e6c8;margin-bottom:8px;">No olvides tu recompensa!</h2>
    <p style="font-size:15px;color:rgba(240,230,200,0.5);margin-bottom:28px;">Cada día que entras al hotel recibes monedas gratis. &iexcl;No dejes pasar el día!</p>
    <a href="{url}/dailyreward"
       style="background:linear-gradient(135deg,#d4a017,#f0c040);color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;font-size:18px;padding:14px 40px;border-radius:50px;text-decoration:none;">
        <i class="fas fa-gift mr-2"></i>Reclamar ahora
    </a>
    <br>
    <a href="{url}/home" style="display:inline-block;margin-top:16px;font-size:13px;color:rgba(240,230,200,0.3);">Quizás después</a>
</div>
</div>
<style>@keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}</style>
<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
