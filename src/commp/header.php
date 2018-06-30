<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
//Breadcrumb
import_commp( 'breadcrumb', 'global' );

add_action( 'chym_header', function() {
    /**
     * Render Các Đối Tượng Trong Header
     * 
     * @import /inc/class.menu.php
     * @import /commp/wc/navbars.php
     * 
     * @since 1.0
     * @author Chym Con
     */
    global $mobile, $post;

    $out  = '<div flex id="chym-header" class="">';

    if ( $mobile->isMobile() ) {

        if ( chym_is_woocommerce_activated() ) {

            //import WC_Custom_Nav
            require_once 'wc/navbars.php';
            $menu = new Chym_WC_Navbar();
            
            $out .= $menu->get_the_nav( [
                'logo' => 'TrangFox.com',
            ] );
        }    

    } 
    $out .= '</div>';
    //Render
    __render( $out );
} );