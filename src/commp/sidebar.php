<?php 
import_commp( 'logo', 'global' );

if ( !defined('ABSPATH') ) {
    exit;
}
add_action( 'chym_page', function() {
    /**
     * Create Sidebar
     * @since 1.1
     * @author Chym Con
     */
    if ( is_home() || is_front_page() ) {
        global $post;
        $post_id = $post->ID;
    } else {
        $post_id = NULL;
    }
    $out  = '<aside chym-sidebar class="sidebar" id="idsidebar">';
    $out .= chym_logo( [
        'echo' => false,
        'post_id' => $post_id,
        'key_name' => '_chym_meta_seo',
    ] );
    $out .= '<span class="sidebar-border"></span>';
    $out .= '</aside>';
    __render( $out );
} );