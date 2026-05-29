<?php
/**
 * register.php — Formulario de registro HabboGZ
 * Equiv. a ZabboME/register.php — mantiene todos los campos originales
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
?>

<?php require_once(dirname(__FILE__).'/includes/gz_navbar.php'); ?>

<div style="min-height:100vh;background:radial-gradient(ellipse at 50% 0%,rgba(212,160,23,0.06),transparent 60%),#0d0d0d;padding:60px 0;">
<div class="container">
<div class="row justify-content-center align-items-center">

    <!-- Columna izquierda: pitch -->
    <div class="col-lg-5 d-none d-lg-block pr-5">
        <svg width="48" height="48" viewBox="0 0 36 36" fill="none" style="margin-bottom:20px;">
            <rect width="36" height="36" rx="8" fill="#d4a017"/>
            <text x="5" y="26" font-family="'Rajdhani',sans-serif" font-size="22" font-weight="700" fill="#1a1000">GZ</text>
        </svg>
        <h1 style="font-family:'Rajdhani',sans-serif;font-size:clamp(2rem,4vw,3.2rem);font-weight:700;color:#f0e6c8;line-height:1.15;margin-bottom:16px;">
            Tu aventura<br>comienza hoy
        </h1>
        <p style="font-size:15px;color:rgba(240,230,200,0.55);line-height:1.7;margin-bottom:32px;">
            Únete gratis a {shortname}, personaliza tu avatar, crea habitaciones y conoce miles de jugadores.
        </p>
        <?php
        $perks = ['Registro 100% gratuito','Monedas de bienvenida','Avatares personalizables','Comunidad activa'];
        foreach ($perks as $p):
        ?>
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px;">
            <i class="fas fa-check" style="color:#d4a017;font-size:13px;"></i>
            <span style="font-size:14px;color:rgba(240,230,200,0.65);"><?php echo $p; ?></span>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Formulario -->
    <div class="col-lg-7 col-xl-6">
        <div style="background:#141414;border:1px solid rgba(212,160,23,0.18);border-radius:16px;padding:40px;">
            <h3 style="font-family:'Rajdhani',sans-serif;font-size:24px;font-weight:700;color:#f0e6c8;margin-bottom:6px;">Crear cuenta</h3>
            <p style="font-size:13px;color:rgba(240,230,200,0.4);margin-bottom:28px;">Ya tienes una? <a href="{url}" style="color:#d4a017;text-decoration:none;">Inicia sesión</a></p>

            <!-- Errores -->
            {register_errors}

            <form action="{url}/register" method="POST" autocomplete="off">
                {csrf_token}

                <!-- Nombre de usuario -->
                <div class="form-group">
                    <label style="font-size:12px;text-transform:uppercase;letter-spacing:1px;color:rgba(240,230,200,0.5);margin-bottom:6px;">Nombre de usuario</label>
                    <input type="text" name="username" class="form-control" placeholder="TuNombre"
                           value="{register_username}" maxlength="25" required
                           style="background:rgba(255,255,255,0.05);border:1px solid rgba(212,160,23,0.2);color:#f0e6c8;border-radius:8px;padding:12px;">
                </div>

                <!-- Contraseña -->
                <div class="form-group">
                    <label style="font-size:12px;text-transform:uppercase;letter-spacing:1px;color:rgba(240,230,200,0.5);margin-bottom:6px;">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Mínimo 6 caracteres"
                           required style="background:rgba(255,255,255,0.05);border:1px solid rgba(212,160,23,0.2);color:#f0e6c8;border-radius:8px;padding:12px;">
                </div>

                <!-- Correo -->
                <div class="form-group">
                    <label style="font-size:12px;text-transform:uppercase;letter-spacing:1px;color:rgba(240,230,200,0.5);margin-bottom:6px;">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" placeholder="tu@correo.com"
                           value="{register_email}" required
                           style="background:rgba(255,255,255,0.05);border:1px solid rgba(212,160,23,0.2);color:#f0e6c8;border-radius:8px;padding:12px;">
                </div>

                <!-- Avatar selector (hereda lógica de ZabboME) -->
                {avatar_selector}

                <!-- Captcha si está activo -->
                {register_captcha}

                <!-- Términos -->
                <div class="form-check mb-4">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required
                           style="border-color:rgba(212,160,23,0.4);">
                    <label class="form-check-label" for="terms" style="font-size:13px;color:rgba(240,230,200,0.5);">Acepto los <a href="{url}/safety" style="color:#d4a017;">términos de uso</a></label>
                </div>

                <button type="submit" name="register" class="btn btn-block" style="background:linear-gradient(135deg,#d4a017,#f0c040);color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;font-size:16px;border-radius:50px;padding:13px;">
                    Crear mi cuenta <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </form>
        </div>
    </div>

</div>
</div>
</div>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
