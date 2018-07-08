<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
add_action( 'chym_footer', function() {
    /**
     * Create Footer Template
     * 
     * @import_commp /commp/global/footer-credit
     * 
     * @since 1.0
     * @author chym con
     */
    import_commp( 'footer-credit', 'global' );
    $out  = '<footer class="chym-footer">';
    $out .= chym_footer_credit();
    $out .= '</footer>';
    __render( $out );
});