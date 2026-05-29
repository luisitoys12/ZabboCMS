<?php
/**
 * pictures.php — REFACTORIZADO
 * Punto de entrada de la galería de fotos.
 * El archivo original (94KB) ha sido dividido en módulos:
 *
 *   pictures/pictures_styles.php   → Todos los estilos CSS
 *   pictures/pictures_header.php   → Encabezado + title + navigator
 *   pictures/pictures_grid.php     → Grid de fotos + paginación + filtros
 *   pictures/pictures_lightbox.php → Modal lightbox + lógica de likes JS
 *
 * Para personalizar estilos edita solo pictures_styles.php.
 * Para cambiar la lógica del grid edita solo pictures_grid.php.
 */

$skinPath = dirname(__FILE__);

require_once ($skinPath . '/pictures/pictures_header.php');
require_once ($skinPath . '/pictures/pictures_grid.php');
require_once ($skinPath . '/pictures/pictures_lightbox.php');
?>
