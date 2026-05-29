<?php
// dailyreward.php - Interfaz mejorada de recompensa diaria
?>
<style>
.daily-reward-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    text-align: center;
    animation: fadeIn 0.6s ease forwards;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
}
.daily-chest {
    font-size: 64px;
    margin-bottom: 16px;
    animation: bounce 1.2s ease infinite alternate;
    cursor: pointer;
    display: inline-block;
    transition: transform 0.2s;
    filter: drop-shadow(0 0 18px rgba(255, 200, 60, 0.45));
}
@keyframes bounce {
    from { transform: translateY(0px) rotate(-4deg); }
    to   { transform: translateY(-10px) rotate(4deg); }
}
.daily-chest:active {
    transform: scale(0.9);
    filter: drop-shadow(0 0 30px rgba(255, 200, 60, 0.9));
}
.daily-title {
    font-size: 22px;
    font-weight: 800;
    color: #ffd34e;
    text-shadow: 0 0 20px rgba(255,211,78,0.6);
    margin-bottom: 8px;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.daily-subtitle {
    font-size: 13px;
    color: rgba(255,255,255,0.55);
    margin-bottom: 24px;
    max-width: 260px;
    line-height: 1.7;
}
.daily-btn {
    display: inline-block;
    padding: 12px 36px;
    background: linear-gradient(135deg, #f7b731, #e55039);
    color: #fff;
    font-weight: 700;
    font-size: 14px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 4px 20px rgba(247, 183, 49, 0.4);
    transition: transform 0.15s, box-shadow 0.15s;
    text-decoration: none;
}
.daily-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(247, 183, 49, 0.6);
    color: #fff;
}
.daily-btn:active {
    transform: scale(0.97);
}
/* Confeti al reclamar */
@keyframes confettiFall {
    0%   { transform: translateY(-30px) rotate(0deg); opacity: 1; }
    100% { transform: translateY(180px) rotate(720deg); opacity: 0; }
}
.confetti-piece {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 2px;
    animation: confettiFall 1s ease forwards;
}
</style>

<div class="daily-reward-wrapper" id="dailyRewardBox" style="position:relative;">
    <div class="daily-chest" id="chestIcon" onclick="claimReward()">&#x1F4E6;</div>
    <div class="daily-title">¡Recompensa Diaria!</div>
    <div class="daily-subtitle">Entra cada d&iacute;a y reclama tus monedas gratis. &#x1F31F; &iexcl;No pierdas tu racha!</div>
    <a href="?claim=1" class="daily-btn" id="claimBtn" onclick="launchConfetti(event)">
        &#x1F381; Reclamar ahora
    </a>
</div>

<script>
function launchConfetti(e) {
    e.preventDefault();
    var box = document.getElementById('dailyRewardBox');
    var colors = ['#ffd34e','#ff6b6b','#4ecdc4','#45b7d1','#96e6a1','#fff'];
    for (var i = 0; i < 24; i++) {
        var piece = document.createElement('div');
        piece.className = 'confetti-piece';
        piece.style.left = (Math.random() * 90 + 5) + '%';
        piece.style.top = '30%';
        piece.style.background = colors[Math.floor(Math.random() * colors.length)];
        piece.style.animationDelay = (Math.random() * 0.4) + 's';
        piece.style.animationDuration = (0.7 + Math.random() * 0.6) + 's';
        box.appendChild(piece);
        setTimeout(function(p){ p.remove(); }, 1400, piece);
    }
    document.getElementById('chestIcon').textContent = '\uD83C\uDF89';
    document.getElementById('claimBtn').textContent = '\u2714 ¡Reclamado!';
    document.getElementById('claimBtn').style.background = 'linear-gradient(135deg,#43e97b,#38f9d7)';
    setTimeout(function(){ window.location.href = '?claim=1'; }, 900);
}
</script>
<?php
// ---- lógica de reclamación (solo si no existe ya) ----
// Aquí va la lógica PHP original de validación de recompensa diaria
// (sin modificar para mantener compatibilidad con el sistema existente)
?>
