<?php
/**
 * pictures_header.php
 * Encabezado de la sección de galería
 */

// Contar total de fotos
$totalPics = mysql_num_rows(mysql_query("SELECT id FROM items_camera"));
$myPics = isset($_SESSION['user']['id'])
    ? mysql_num_rows(mysql_query("SELECT id FROM items_camera WHERE creator_id = '".$_SESSION['user']['id']."'"))
    : 0;
?>
<title>{shortname} ~ Galería de Fotos</title>
<?php
    $navigatorID = 2;
    require_once ('/includes/header.php');
    require_once ('/includes/navigator.php');

    // Cargar estilos del módulo
    require_once (dirname(__FILE__) . '/pictures_styles.php');
?>

<div id="gallery-header">
    <div class="banner">
        <span style="font-size:48px;">&#x1F4F7;</span>
    </div>
    <div class="title-block">
        <h2>Galería de Fotos</h2>
        <p><?php echo number_format($totalPics); ?> fotos publicadas &mdash; <?php echo $myPics; ?> tuyas</p>
    </div>
</div>
