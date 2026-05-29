<?php
/**
 * dailyreward.php — Recompensa diaria HabboGZ (versión premium con animación)
 * Equiv. a ZabboME/dailyreward.php
 */
$navigatorID = 1;
require_once ('/includes/header.php');
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>

<style>
@keyframes pulse-gold {
    0%,100% { box-shadow: 0 0 0 0 rgba(212,160,23,0); }
    50% { box-shadow: 0 0 0 14px rgba(212,160,23,0.15); }
}
@keyframes float {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}
.daily-coin { animation: float 2.5s ease-in-out infinite; display:inline-block; }
</style>

<div style="min-height:100vh;background:radial-gradient(ellipse at 50% 30%,rgba(212,160,23,0.1),transparent 60%),#0d0d0d;display:flex;align-items:center;">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 col-lg-5">

    <div style="background:#141414;border:1px solid rgba(212,160,23,0.25);border-radius:20px;padding:48px 40px;text-align:center;">

        <!-- Ícono animado -->
        <div class="daily-coin" style="margin-bottom:24px;">
            <svg width="80" height="80" viewBox="0 0 80 80">
                <circle cx="40" cy="40" r="38" fill="#d4a017" stroke="#f0c040" stroke-width="2"/>
                <text x="40" y="52" text-anchor="middle" font-family="'Rajdhani',sans-serif" font-size="36" font-weight="700" fill="#1a1000">$</text>
            </svg>
        </div>

        <h2 style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#f0e6c8;margin-bottom:8px;">Recompensa Diaria</h2>
        <p style="font-size:14px;color:rgba(240,230,200,0.5);margin-bottom:32px;">Entra cada día y recibe monedas gratis</p>

        <!-- Racha de días -->
        <div style="background:rgba(212,160,23,0.08);border:1px solid rgba(212,160,23,0.15);border-radius:12px;padding:16px;margin-bottom:28px;">
            <p style="font-size:12px;text-transform:uppercase;letter-spacing:2px;color:#d4a017;margin-bottom:12px;">Tu racha</p>
            <div style="display:flex;justify-content:center;gap:8px;">
                <?php for ($d = 1; $d <= 7; $d++): ?>
                <div style="width:36px;height:36px;border-radius:50%;background:<?php echo $d<=intval('{streak}')?'#d4a017':'rgba(255,255,255,0.06)'; ?>;border:1px solid rgba(212,160,23,0.3);display:flex;align-items:center;justify-content:center;">
                    <span style="font-family:'Rajdhani',sans-serif;font-size:13px;font-weight:700;color:<?php echo $d<=intval('{streak}')?'#1a1000':'rgba(240,230,200,0.3)'; ?>;"><?php echo $d; ?></span>
                </div>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Recompensa de hoy -->
        <div style="background:rgba(212,160,23,0.06);border-radius:10px;padding:20px;margin-bottom:28px;">
            <p style="font-size:13px;color:rgba(240,230,200,0.5);margin-bottom:8px;">Hoy recibes</p>
            <p style="font-family:'Rajdhani',sans-serif;font-size:40px;font-weight:700;color:#d4a017;margin:0;">{daily_credits} <span style="font-size:18px;">créditos</span></p>
            <?php if (intval('{daily_duckets}') > 0): ?>
            <p style="font-family:'Rajdhani',sans-serif;font-size:20px;color:#42a5f5;margin:4px 0 0;">+ {daily_duckets} duckets</p>
            <?php endif; ?>
        </div>

        <!-- Botón reclamar -->
        {daily_button}

        <?php if ('{daily_claimed}' === 'true'): ?>
        <div style="background:rgba(76,175,80,0.1);border:1px solid rgba(76,175,80,0.3);border-radius:10px;padding:14px;margin-top:16px;">
            <i class="fas fa-check-circle mr-2" style="color:#4caf50;"></i>
            <span style="font-size:14px;color:#4caf50;">Ya reclamaste tu recompensa de hoy. Vuelve mañana!</span>
        </div>
        <?php else: ?>
        <a href="{url}/dailyreward/claim" class="btn btn-block" id="claimBtn"
           style="background:linear-gradient(135deg,#d4a017,#f0c040);color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;font-size:18px;border-radius:50px;padding:14px;animation:pulse-gold 2s ease-in-out infinite;margin-top:16px;">
            <i class="fas fa-hand-holding-usd mr-2"></i>Reclamar ahora
        </a>
        <?php endif; ?>

        <a href="{url}/home" style="display:block;margin-top:16px;font-size:13px;color:rgba(240,230,200,0.4);">Volver al hotel</a>
    </div>
</div>
</div>
</div>
</div>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
