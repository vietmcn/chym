<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
add_action( 'chym_page', function() {

    #if ( !( is_home() || is_front_page() ) ) {
        /**
         * Create Sidebar
         * 
         * @import /commp/global/logo
         * @import /commp/global/sidebar-menu
         * @import /commp/wc/product-cat
         * 
         * @since 1.1
         * @author Chym Con
         */
        import_commp( 'logo', 'global' );
        import_commp( 'sidebar-menu', 'global' );
        import_commp( 'product-cat', 'wc' );
    
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
   # }
    
} );