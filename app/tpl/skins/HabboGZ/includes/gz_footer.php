<?php
/**
 * gz_footer.php — Footer + scripts del skin HabboGZ
 */
?>
<footer style="background:#0d0d0d;border-top:1px solid rgba(212,160,23,0.12);padding:40px 0 20px;margin-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px;">
                    <svg width="28" height="28" viewBox="0 0 36 36" fill="none">
                        <rect width="36" height="36" rx="8" fill="#d4a017"/>
                        <text x="5" y="26" font-family="'Rajdhani',sans-serif" font-size="22" font-weight="700" fill="#1a1000">GZ</text>
                    </svg>
                    <span style="font-family:'Rajdhani',sans-serif;font-size:18px;font-weight:700;color:#f0e6c8;">{shortname}</span>
                </div>
                <p style="font-size:13px;color:rgba(240,230,200,0.45);line-height:1.7;max-width:280px;">
                    Hotel retro privado. {shortname} no tiene afiliación con Sulake ni Habbo Hotel®.
                </p>
            </div>
            <div class="col-md-2 mb-4">
                <h6 style="color:#d4a017;font-family:'Rajdhani',sans-serif;font-size:13px;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">Hotel</h6>
                <ul style="list-style:none;padding:0;margin:0;">
                    <li><a href="{url}/home" style="font-size:13px;color:rgba(240,230,200,0.55);text-decoration:none;">Inicio</a></li>
                    <li><a href="{url}/store" style="font-size:13px;color:rgba(240,230,200,0.55);text-decoration:none;">Tienda</a></li>
                    <li><a href="{url}/community" style="font-size:13px;color:rgba(240,230,200,0.55);text-decoration:none;">Comunidad</a></li>
                    <li><a href="{url}/leaderboards" style="font-size:13px;color:rgba(240,230,200,0.55);text-decoration:none;">Rankings</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4">
                <h6 style="color:#d4a017;font-family:'Rajdhani',sans-serif;font-size:13px;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">Info</h6>
                <ul style="list-style:none;padding:0;margin:0;">
                    <li><a href="{url}/staff" style="font-size:13px;color:rgba(240,230,200,0.55);text-decoration:none;">Staff</a></li>
                    <li><a href="{url}/help" style="font-size:13px;color:rgba(240,230,200,0.55);text-decoration:none;">Ayuda</a></li>
                    <li><a href="{url}/safety" style="font-size:13px;color:rgba(240,230,200,0.55);text-decoration:none;">Seguridad</a></li>
                    <li><a href="{url}/contact" style="font-size:13px;color:rgba(240,230,200,0.55);text-decoration:none;">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h6 style="color:#d4a017;font-family:'Rajdhani',sans-serif;font-size:13px;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">Estado del Servidor</h6>
                <div style="background:#1a1a1a;border:1px solid rgba(212,160,23,0.15);border-radius:8px;padding:12px;">
                    <div style="display:flex;align-items:center;gap:8px;">
                        <span style="width:8px;height:8px;border-radius:50%;background:#4caf50;display:inline-block;"></span>
                        <span style="font-size:13px;color:rgba(240,230,200,0.7);">Online &mdash; {onlinecount} habbo(s)</span>
                    </div>
                </div>
            </div>
        </div>
        <div style="border-top:1px solid rgba(212,160,23,0.08);padding-top:20px;margin-top:10px;text-align:center;">
            <p style="font-size:12px;color:rgba(240,230,200,0.25);margin:0;">
                &copy; <?php echo date('Y'); ?> {shortname} &mdash; Skin HabboGZ by <strong style="color:rgba(212,160,23,0.5);">Cush Media</strong>
            </p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
