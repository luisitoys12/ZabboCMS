<?php
// noalerts.php - Empty state rediseñado con animación
?>
<style>
.no-alerts-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 60px 20px;
    text-align: center;
    animation: fadeInUp 0.5s ease forwards;
}
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}
.no-alerts-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    border: 2px dashed rgba(255,255,255,0.15);
    animation: pulse 2.5s ease-in-out infinite;
}
@keyframes pulse {
    0%, 100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255,255,255,0.1); }
    50%       { transform: scale(1.05); box-shadow: 0 0 0 12px rgba(255,255,255,0); }
}
.no-alerts-icon svg {
    width: 36px;
    height: 36px;
    opacity: 0.4;
}
.no-alerts-title {
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 8px;
    letter-spacing: 0.5px;
}
.no-alerts-subtitle {
    font-size: 13px;
    color: rgba(255,255,255,0.45);
    max-width: 240px;
    line-height: 1.6;
}
</style>

<div class="no-alerts-wrapper">
    <div class="no-alerts-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="1.8">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
        </svg>
    </div>
    <div class="no-alerts-title">No tienes notificaciones</div>
    <div class="no-alerts-subtitle">Cuando recibas alertas, aparecer&aacute;n aqu&iacute;.</div>
</div>
