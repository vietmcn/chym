<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
add_action( 'chym_index', 'chym_render_sidebar' );

if ( !function_exists( 'chym_render_sidebar' ) ) {
    function chym_render_sidebar() {
    
            /**
             * Create Sidebar
             * 
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
            $out .= 'Hello';
            $out .= '<span class="sidebar-border"></span>';
            
            $out .= '</aside>';
            __render( $out );
        
    }
}