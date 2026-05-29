<?php
/**
 * gz_navbar.php — Barra de navegación superior HabboGZ
 */
?>
<nav class="navbar navbar-expand-lg" id="gz-navbar" style="
    background: #141414;
    border-bottom: 1px solid rgba(212,160,23,0.2);
    padding: 0 1rem;
    position: sticky;
    top: 0;
    z-index: 999;
    box-shadow: 0 2px 20px rgba(0,0,0,0.6);
">
    <a class="navbar-brand" href="{url}" style="display:flex;align-items:center;gap:10px;">
        <!-- Logo SVG HabboGZ -->
        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" aria-label="HabboGZ Logo">
            <rect width="36" height="36" rx="8" fill="#d4a017"/>
            <text x="5" y="26" font-family="'Rajdhani',sans-serif" font-size="22" font-weight="700" fill="#1a1000">GZ</text>
        </svg>
        <span style="font-family:'Rajdhani',sans-serif;font-size:20px;font-weight:700;color:#f0e6c8;letter-spacing:1px;">{shortname}</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gzNav"
            style="border-color:rgba(212,160,23,0.4);">
        <i class="fas fa-bars" style="color:#d4a017;"></i>
    </button>

    <div class="collapse navbar-collapse" id="gzNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="{url}/home"><i class="fas fa-home mr-1"></i>Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="{url}/community"><i class="fas fa-users mr-1"></i>Comunidad</a></li>
            <li class="nav-item"><a class="nav-link" href="{url}/store"><i class="fas fa-store mr-1"></i>Tienda</a></li>
            <li class="nav-item"><a class="nav-link" href="{url}/leaderboards"><i class="fas fa-trophy mr-1"></i>Rankings</a></li>
            <li class="nav-item"><a class="nav-link" href="{url}/staff"><i class="fas fa-shield-alt mr-1"></i>Staff</a></li>
            <li class="nav-item"><a class="nav-link" href="{url}/events"><i class="fas fa-calendar-star mr-1"></i>Eventos</a></li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user'])): ?>
            <!-- Online badge -->
            <li class="nav-item d-flex align-items-center mr-3">
                <span style="width:8px;height:8px;border-radius:50%;background:#4caf50;display:inline-block;margin-right:6px;"></span>
                <span style="font-size:13px;color:rgba(240,230,200,0.7);"><?php echo htmlspecialchars($_SESSION['user']['username']); ?></span>
            </li>
            <li class="nav-item"><a class="nav-link" href="{url}/me"><i class="fas fa-user-circle mr-1"></i>Mi Perfil</a></li>
            <li class="nav-item"><a class="nav-link" href="{url}/client" style="color:#d4a017;font-weight:600;"><i class="fas fa-play-circle mr-1"></i>Jugar</a></li>
            <li class="nav-item"><a class="nav-link" href="{url}/logout"><i class="fas fa-sign-out-alt"></i></a></li>
            <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="{url}/register">Registrarse</a></li>
            <li class="nav-item">
                <a class="nav-link btn btn-sm" href="{url}/client"
                   style="background:#d4a017;color:#1a1000;font-weight:700;border-radius:50px;padding:6px 18px;margin-left:6px;">Entrar</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
