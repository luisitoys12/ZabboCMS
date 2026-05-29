<?php
// rewardreminder.php - Banner de recordatorio de recompensa diaria
?>
<style>
.reward-reminder-banner {
    display: flex;
    align-items: center;
    gap: 14px;
    background: linear-gradient(135deg, rgba(255,185,50,0.18), rgba(255,100,50,0.12));
    border: 1px solid rgba(255,185,50,0.3);
    border-radius: 12px;
    padding: 14px 20px;
    margin: 10px 0;
    animation: slideDown 0.5s cubic-bezier(0.16,1,0.3,1) forwards;
    cursor: pointer;
    transition: transform 0.15s, box-shadow 0.15s;
}
@keyframes slideDown {
    from { opacity: 0; transform: translateY(-12px); }
    to   { opacity: 1; transform: translateY(0); }
}
.reward-reminder-banner:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 24px rgba(255,185,50,0.2);
}
.reminder-icon {
    font-size: 32px;
    flex-shrink: 0;
    animation: wiggle 2s ease-in-out infinite;
}
@keyframes wiggle {
    0%,100% { transform: rotate(0deg); }
    20%     { transform: rotate(-10deg); }
    40%     { transform: rotate(10deg); }
    60%     { transform: rotate(-6deg); }
    80%     { transform: rotate(6deg); }
}
.reminder-text h4 {
    margin: 0 0 4px;
    font-size: 14px;
    font-weight: 700;
    color: #ffd34e;
    text-shadow: 0 0 12px rgba(255,211,78,0.4);
}
.reminder-text p {
    margin: 0;
    font-size: 12px;
    color: rgba(255,255,255,0.55);
    line-height: 1.5;
}
.reminder-cta {
    margin-left: auto;
    flex-shrink: 0;
    display: inline-block;
    padding: 8px 20px;
    background: linear-gradient(135deg, #f7b731, #e55039);
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    border-radius: 50px;
    text-decoration: none;
    letter-spacing: 0.5px;
    transition: transform 0.15s, box-shadow 0.15s;
    white-space: nowrap;
}
.reminder-cta:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 16px rgba(247,183,49,0.5);
    color: #fff;
}
/* Dismiss button */
.reminder-dismiss {
    background: none;
    border: none;
    color: rgba(255,255,255,0.3);
    font-size: 18px;
    cursor: pointer;
    padding: 0 0 0 8px;
    line-height: 1;
    transition: color 0.15s;
}
.reminder-dismiss:hover { color: rgba(255,255,255,0.7); }
</style>

<div class="reward-reminder-banner" id="rewardReminderBanner">
    <div class="reminder-icon">&#x1F381;</div>
    <div class="reminder-text">
        <h4>¡Tu recompensa diaria te espera!</h4>
        <p>Reclama tus monedas gratis hoy y mant&eacute;n tu racha activa.</p>
    </div>
    <a href="{url}/dailyreward" class="reminder-cta">⚡ Reclamar</a>
    <button class="reminder-dismiss" onclick="dismissReminder()" title="Cerrar">&times;</button>
</div>

<script>
function dismissReminder() {
    var b = document.getElementById('rewardReminderBanner');
    b.style.transition = 'opacity 0.3s, transform 0.3s';
    b.style.opacity = '0';
    b.style.transform = 'translateY(-8px)';
    setTimeout(function(){ b.remove(); }, 320);
}
</script>
