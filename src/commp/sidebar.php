<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'sidebar_defaut' ) ) {
    /**
     * Create Sidebar default()
     * more {@link: https://codex.wordpress.org/Sidebars}
     * @since 1.1
     * @author Chym Con
     */
    function sidebar_defaut()
    {
        dynamic_sidebar( 'sidebar-1' );
    }
}
if ( !function_exists('chym_sidebar') ) {
    function chym_sidebar_logo( $post_id ) 
    {
        return chym_logo( [
            'echo' => false,
            'post_id' => $post_id,
            'key_name' => '_chym_meta_seo',
        ] );
    }
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
    $out .= chym_sidebar_logo( $post_id );
    $out .= '</aside>';
    __render( $out );
} );