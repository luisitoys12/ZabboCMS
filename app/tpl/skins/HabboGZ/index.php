<?php
/**
 * index.php — Landing page HabboGZ (visitantes no logueados)
 * Equiv. a ZabboME/index.php
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
?>

<!-- HERO -->
<section style="
    min-height: 100vh;
    background: radial-gradient(ellipse at 60% 40%, rgba(212,160,23,0.08) 0%, transparent 60%),
                radial-gradient(ellipse at 20% 80%, rgba(212,160,23,0.05) 0%, transparent 50%),
                #0d0d0d;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
">
    <!-- Navbar -->
    <?php require_once(dirname(__FILE__).'/includes/gz_navbar.php'); ?>

    <div class="container" style="padding-top:80px;">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p style="font-size:13px;color:#d4a017;text-transform:uppercase;letter-spacing:3px;margin-bottom:16px;">Hotel Retro &mdash; Est. {year}</p>
                <h1 style="font-family:'Rajdhani',sans-serif;font-size:clamp(2.5rem,6vw,5rem);font-weight:700;line-height:1.1;color:#f0e6c8;margin-bottom:20px;">
                    Bienvenido a <br>
                    <span style="background:linear-gradient(135deg,#d4a017,#ffe680);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">{shortname}</span>
                </h1>
                <p style="font-size:16px;color:rgba(240,230,200,0.6);max-width:440px;line-height:1.7;margin-bottom:36px;">
                    El hotel retro donde la aventura nunca termina. Crea tu personaje, decora tus habitaciones y conecta con miles de jugadores.
                </p>
                <div style="display:flex;gap:14px;flex-wrap:wrap;">
                    <a href="{url}/register" style="background:linear-gradient(135deg,#d4a017,#f0c040);color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;font-size:16px;padding:14px 36px;border-radius:50px;text-decoration:none;letter-spacing:0.5px;">Crear cuenta</a>
                    <a href="{url}/home" style="border:1px solid rgba(212,160,23,0.4);color:#d4a017;font-family:'Rajdhani',sans-serif;font-size:16px;padding:14px 36px;border-radius:50px;text-decoration:none;">Saber más</a>
                </div>
                <div style="display:flex;gap:32px;margin-top:40px;">
                    <div>
                        <p style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#d4a017;margin:0;">{totalusers}+</p>
                        <p style="font-size:12px;color:rgba(240,230,200,0.4);margin:0;text-transform:uppercase;letter-spacing:1px;">Usuarios</p>
                    </div>
                    <div>
                        <p style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#d4a017;margin:0;">{onlinecount}</p>
                        <p style="font-size:12px;color:rgba(240,230,200,0.4);margin:0;text-transform:uppercase;letter-spacing:1px;">En línea</p>
                    </div>
                    <div>
                        <p style="font-family:'Rajdhani',sans-serif;font-size:28px;font-weight:700;color:#d4a017;margin:0;">{totalrooms}+</p>
                        <p style="font-size:12px;color:rgba(240,230,200,0.4);margin:0;text-transform:uppercase;letter-spacing:1px;">Habitaciones</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center">
                <!-- Imac mockup con screenshot del juego -->
                <div style="position:relative;display:inline-block;">
                    <div style="width:480px;height:320px;background:#1a1a1a;border-radius:16px;border:1px solid rgba(212,160,23,0.2);display:flex;align-items:center;justify-content:center;box-shadow:0 20px 60px rgba(0,0,0,0.6);">
                        <img src="{hotelbanner}" alt="{shortname}" style="max-width:100%;max-height:100%;border-radius:12px;" onerror="this.style.display='none'">
                        <div style="position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;" id="gz-hero-fallback">
                            <svg width="64" height="64" viewBox="0 0 36 36" fill="none" style="margin-bottom:12px;">
                                <rect width="36" height="36" rx="8" fill="#d4a017"/>
                                <text x="5" y="26" font-family="'Rajdhani',sans-serif" font-size="22" font-weight="700" fill="#1a1000">GZ</text>
                            </svg>
                            <span style="font-family:'Rajdhani',sans-serif;font-size:24px;color:#d4a017;font-weight:700;">{shortname}</span>
                        </div>
                    </div>
                    <!-- Glow effect -->
                    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:300px;height:300px;border-radius:50%;background:rgba(212,160,23,0.06);filter:blur(60px);z-index:-1;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section style="padding:80px 0;background:#0d0d0d;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-48" style="margin-bottom:48px;">
                <h2 style="font-family:'Rajdhani',sans-serif;font-size:clamp(1.8rem,4vw,3rem);color:#f0e6c8;">Por qué jugar en <span style="color:#d4a017;">{shortname}</span></h2>
            </div>
        </div>
        <div class="row">
            <?php
            $features = [
                ['fas fa-coins','Monedas diarias','Reclama tus monedas cada día solo por entrar al hotel.'],
                ['fas fa-trophy','Rankings','Compítete con los mejores jugadores del hotel.'],
                ['fas fa-door-open','Habitaciones','Diseña y decora habitaciones únicas.'],
                ['fas fa-camera','Fotos','Captura momentos y comparte con la comunidad.'],
                ['fas fa-shield-alt','Seguridad','Moderación activa 24/7 por nuestro staff.'],
                ['fas fa-gem','VIP','Accede a contenido exclusivo con la suscripción VIP.'],
            ];
            foreach ($features as $f):
            ?>
            <div class="col-md-4 mb-4">
                <div style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:12px;padding:28px 24px;height:100%;transition:border-color .2s;" onmouseenter="this.style.borderColor='rgba(212,160,23,0.35)'" onmouseleave="this.style.borderColor='rgba(212,160,23,0.12)'">
                    <i class="<?php echo $f[0]; ?>" style="font-size:22px;color:#d4a017;margin-bottom:14px;display:block;"></i>
                    <h5 style="font-family:'Rajdhani',sans-serif;font-size:18px;font-weight:700;color:#f0e6c8;margin-bottom:8px;"><?php echo $f[1]; ?></h5>
                    <p style="font-size:13px;color:rgba(240,230,200,0.5);margin:0;line-height:1.6;"><?php echo $f[2]; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA FINAL -->
<section style="padding:80px 0;background:linear-gradient(135deg,rgba(212,160,23,0.08),transparent);border-top:1px solid rgba(212,160,23,0.1);">
    <div class="container text-center">
        <h2 style="font-family:'Rajdhani',sans-serif;font-size:clamp(2rem,5vw,3.5rem);color:#f0e6c8;margin-bottom:16px;">Listo para entrar?</h2>
        <p style="color:rgba(240,230,200,0.5);font-size:15px;margin-bottom:32px;">El registro es gratis y tarda menos de 1 minuto.</p>
        <a href="{url}/register" style="background:linear-gradient(135deg,#d4a017,#f0c040);color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;font-size:18px;padding:16px 48px;border-radius:50px;text-decoration:none;">Crear mi cuenta gratis</a>
    </div>
</section>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
