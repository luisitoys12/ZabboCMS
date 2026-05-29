<?php
/**
 * store.php — Tienda de créditos HabboGZ
 * Equiv. a ZabboME/store.php
 */
$navigatorID = 3;
require_once ('/includes/header.php');
require_once ('/includes/navigator.php');
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>

<div class="container" style="padding-top:32px;padding-bottom:60px;">

    <!-- Header de la tienda -->
    <div style="background:linear-gradient(135deg,rgba(212,160,23,0.1),transparent);border:1px solid rgba(212,160,23,0.2);border-radius:14px;padding:32px;margin-bottom:32px;display:flex;align-items:center;justify-content:space-between;">
        <div>
            <h2 style="font-family:'Rajdhani',sans-serif;font-size:32px;font-weight:700;color:#f0e6c8;margin:0 0 6px;">
                <i class="fas fa-store mr-3" style="color:#d4a017;"></i>Tienda
            </h2>
            <p style="font-size:14px;color:rgba(240,230,200,0.5);margin:0;">Recarga créditos, duckets y diamantes</p>
        </div>
        <div style="display:flex;gap:20px;">
            <div class="text-center">
                <p style="font-family:'Rajdhani',sans-serif;font-size:22px;font-weight:700;color:#d4a017;margin:0;">{credits}</p>
                <p style="font-size:11px;color:rgba(240,230,200,0.4);margin:0;text-transform:uppercase;letter-spacing:1px;">Créditos</p>
            </div>
            <div class="text-center">
                <p style="font-family:'Rajdhani',sans-serif;font-size:22px;font-weight:700;color:#42a5f5;margin:0;">{duckets}</p>
                <p style="font-size:11px;color:rgba(240,230,200,0.4);margin:0;text-transform:uppercase;letter-spacing:1px;">Duckets</p>
            </div>
        </div>
    </div>

    <!-- Contenido de la tienda (hereda el sistema de ZabboME) -->
    {store_content}

    <!-- Si el sistema de tienda no tiene override, mostrar paquetes genéricos -->
    <?php if (empty('{store_content}')): ?>
    <div class="row">
        <?php
        $packages = [
            ['Bronce', 50, 50, 0, '#cd7f32', '5,000 duckets bonus', 'fas fa-coins'],
            ['Plata',  100, 150, 0, '#c0c0c0', '15,000 duckets bonus', 'fas fa-coins'],
            ['Oro',   250, 400, 10, '#d4a017', '50,000 duckets + VIP 7 días', 'fas fa-gem'],
            ['Diamante', 500, 1000, 30, '#42a5f5', '150,000 duckets + VIP 30 días', 'fas fa-gem'],
        ];
        foreach ($packages as $pkg):
        ?>
        <div class="col-md-3 mb-4">
            <div style="background:#141414;border:1px solid rgba(<?php echo $pkg[4]==='#d4a017'?'212,160,23':'255,255,255'; ?>,0.2);border-radius:14px;padding:28px 20px;text-align:center;height:100%;position:relative;<?php echo $pkg[0]==='Oro'?'box-shadow:0 8px 32px rgba(212,160,23,0.2);':''; ?>">
                <?php if ($pkg[0]==='Oro'): ?>
                <div style="position:absolute;top:-10px;left:50%;transform:translateX(-50%);background:#d4a017;color:#1a1000;font-size:10px;font-weight:700;font-family:'Rajdhani',sans-serif;padding:4px 12px;border-radius:50px;letter-spacing:1px;">POPULAR</div>
                <?php endif; ?>
                <i class="<?php echo $pkg[6]; ?>" style="font-size:32px;color:<?php echo $pkg[4]; ?>;margin-bottom:16px;display:block;"></i>
                <h4 style="font-family:'Rajdhani',sans-serif;font-size:22px;font-weight:700;color:#f0e6c8;margin-bottom:4px;">Paquete <?php echo $pkg[0]; ?></h4>
                <p style="font-family:'Rajdhani',sans-serif;font-size:36px;font-weight:700;color:<?php echo $pkg[4]; ?>;margin:12px 0;"><?php echo $pkg[1]; ?></p>
                <ul style="list-style:none;padding:0;margin:0 0 20px;">
                    <li style="font-size:13px;color:rgba(240,230,200,0.6);margin-bottom:6px;"><i class="fas fa-check mr-2" style="color:<?php echo $pkg[4]; ?>;"></i><?php echo number_format($pkg[2]); ?> créditos</li>
                    <?php if ($pkg[3] > 0): ?>
                    <li style="font-size:13px;color:rgba(240,230,200,0.6);margin-bottom:6px;"><i class="fas fa-check mr-2" style="color:<?php echo $pkg[4]; ?>;"></i><?php echo $pkg[3]; ?> diamantes</li>
                    <?php endif; ?>
                    <li style="font-size:13px;color:rgba(240,230,200,0.6);"><?php echo $pkg[5]; ?></li>
                </ul>
                <a href="{storeurl}" class="btn btn-block" style="background:<?php echo $pkg[4]; ?>;color:#1a1000;font-weight:700;font-family:'Rajdhani',sans-serif;border-radius:50px;">Comprar</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

</div>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
