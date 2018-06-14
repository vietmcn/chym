<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists('chym_logo') ) {
    /**
     * Create logo 
     * @more {@link: //}
     * @since 1.0
     * @author Chym Con
     */
    function chym_logo( $att = array() )
    {
        if ( ! is_singular() ) {
            $h = 'h3';
        } else {
            $h = 'h1';
        }
        return '<'.$h.'><a href="'.esc_url( get_bloginfo('url') ).'" title="">QuanLegging.Co</a></'.$h.'>';
    }
}
add_action( 'chym_header', function() {
    /**
     * Render Các Đối Tượng Trong Header
     * @since 1.0
     * @author Chym Con
     */
    __render( '<div flex id="chym-header" class="container" ');
    if ( is_home() || is_front_page() ) {
        global $post;
        __render( chym_logo( [
            'post_id' => $post->ID,
            'key_name' => '_chym_meta_seo',
        ] ) );
    }
    __render( '</div> ' );
} );