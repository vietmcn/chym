<?php 
/**
 * Functions template wordpresss 
 * @link {https://developer.wordpress.org/themes/basics/theme-functions/}
 * @since 1.0
 * @author facebook/vietmcn.com
 */
if ( ! defined( 'N_EXTEND_FOLDER' ) ) {
    /**
     * Defined Import Folder 
     *
     * @since 1.0
     */
	define( 'N_EXTEND_FOLDER', __DIR__ );
}
/**
 * GET the Version Template
 *
 * @since 1.0
 */
$theme    = wp_get_theme( 'chym' );
$chym_ver = $theme['Version'];

require_once 'src/bootstrap.php';
require_once 'src/help-functions.php';
if ( chym_is_woocommerce_activated() ) {
    require_once 'src/wc/wc-config.php';
}
require_once 'src/_temp.php';