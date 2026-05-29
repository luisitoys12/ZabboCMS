<?php
/**
 * staff.php — Página del equipo HabboGZ
 * Equiv. a ZabboME/staff.php
 */
require_once(dirname(__FILE__).'/includes/gz_head.php');
require_once(dirname(__FILE__).'/includes/gz_navbar.php');
?>

<div class="container" style="padding-top:32px;padding-bottom:60px;">

    <div class="text-center" style="margin-bottom:48px;">
        <h2 style="font-family:'Rajdhani',sans-serif;font-size:36px;font-weight:700;color:#f0e6c8;margin-bottom:8px;">
            <i class="fas fa-shield-alt mr-2" style="color:#d4a017;"></i>Equipo de {shortname}
        </h2>
        <p style="font-size:15px;color:rgba(240,230,200,0.45);">Conoce a quienes mantienen el hotel seguro y divertido</p>
    </div>

    <!-- Grupos de staff (hereda el sistema de rangos de ZabboME) -->
    {staff_ranks}

    <!-- Fallback visual si {staff_ranks} no renderiza -->
    <div class="row" id="gz-staff-grid">
        <?php
        // Este bloque solo aparece si el CMS no inyecta {staff_ranks}
        // En producción {staff_ranks} lo reemplaza completamente
        $staffRoles = [
            ['fas fa-crown',   '#d4a017', 'Fundadores',   '{founders_list}'],
            ['fas fa-gem',     '#ab47bc', 'Administración','{admins_list}'],
            ['fas fa-gavel',   '#42a5f5', 'Moderadores',  '{mods_list}'],
            ['fas fa-headset', '#4caf50', 'Soporte',      '{support_list}'],
        ];
        foreach ($staffRoles as $role):
        ?>
        <div class="col-md-6 mb-4">
            <div style="background:#141414;border:1px solid rgba(212,160,23,0.12);border-radius:14px;overflow:hidden;">
                <div style="background:rgba(<?php echo $role[1]==='#d4a017'?'212,160,23':'78,78,78'; ?>,0.1);padding:18px 24px;border-bottom:1px solid rgba(212,160,23,0.1);display:flex;align-items:center;gap:12px;">
                    <i class="<?php echo $role[0]; ?>" style="color:<?php echo $role[1]; ?>;font-size:20px;"></i>
                    <h5 style="font-family:'Rajdhani',sans-serif;font-size:18px;font-weight:700;color:#f0e6c8;margin:0;"><?php echo $role[2]; ?></h5>
                </div>
                <div style="padding:20px;">
                    <?php echo $role[3]; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once(dirname(__FILE__).'/includes/gz_footer.php'); ?>
